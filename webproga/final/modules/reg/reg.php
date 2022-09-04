<style>
    form {
        display: flex;
        /* flex-direction: column; */
        flex-wrap: wrap;
        max-width: 700px;
        justify-content: space-between;
        /* align-items: center; */
    }
    p.label {
        margin: 0;
        font-size: 12px;
        margin-bottom: 5px;
    }
    p.error {
        margin: 0;
        height: 24px;
        font-size: 12px;
        padding-top: 8px;
        color: red;
    }
    label {
        width: 48%;
    }
    input {
        background-color: transparent;
        width: 100%;
        padding: 6px 10px;
        border: 1px solid #fff;
        color: #000;
        font: unset;
        font-family: Arial, sans-serif;
    }
    form button.link {
        margin: 0 auto;
    }
</style>

<?include_once("../../components/header.php");?>

<?
echo "before ";
print_r($_SESSION);
echo "<br>";
print_r($_POST["captcha"]);

echo "
<script>
    function update_c() {
        const r = Math.random();
        console.log(document.getElementById('captcha'));
        const c = document.getElementById('captcha');
        c.src = `../../helpers/captcha.php?id=${r}}`
    }
</script>
";

    if(session_status() != PHP_SESSION_ACTIVE) {
        session_start();
        // print_r("reg session: ");
        // print_r($_SESSION);
        // echo "<br>";
    }

    include_once("../../db/users.php");
    include_once("../../helpers/redirects.php");

    // print_r($_POST);

    // getting credentials
    $name = $_POST["name"] ?? "";
    if ($name === "") unset($name);

    $surname = $_POST["surname"] ?? "";
    if ($surname === "") unset($surname);

    $login = $_POST["login"] ?? "";
    if ($login === "") unset($login);

    $email = $_POST["email"] ?? "";
    if ($email === "") unset($email);

    $pass = $_POST["pass"] ?? "";
    if ($pass === "") unset($pass);

    $pass_repeat = $_POST["pass_repeat"] ?? "";
    if ($pass_repeat === "") unset($pass_repeat);

    $phone = $_POST["phone"] ?? "";
    if ($phone === "") unset($phone);

    $gender = $_POST["gender"] ?? "";
    if ($gender === "") unset($gender);

    // unset($go);
    $go = $_POST["go"];

    $captcha = $_POST["captcha"] ?? "";
    if ($captcha === "") unset($captcha);

    // validations
    if (isset($go)) {
        $e1 = null;
        if (strlen($name) === 0) {
            $e1 .= "Имя должно быть заполнено.";
        }
        
        $e2 = null;
        if (strlen($surname) === 0) {
            $e2 .= "Фамилия должна быть заполнена.";
        }

        $e3 = null;
        $db_link = include("../../db/connect.php");
        if ($login != null) {
            $login = trim($login);
            $login_q = "select id from users where login='$login'";
            // print_r($db_link);
            $res = mysqli_query($db_link, $login_q) or die("Ошибка выполнения запроса логина" . mysqli_error($db_link));
        }
        if ($res) {
            $row = mysqli_fetch_assoc($res);
        }
        if (strlen($login) === 0) {
            $e3 .= "Логин должен быть заполнен.";
        } elseif (!preg_match_all("/^[a-zа-я_\d]{4,}$/iu", $login)) {
            $e3 .= "Логин должен состоять из 4 и более символов или _.";
        } elseif(!empty($row["id"])) {
            $e3 .= "Данный логин занят.";
        } elseif (preg_match_all("/(.)\1{3,}/", $login)) {
            $e3 .= "Не допускается 4 одинаковых подряд идущих символа.";
        }


        $email = trim($email);
        $email_exceptions = ["дура", "дурак", "идиот", "олух"];
        $email_exceptions = array_map(function($word){
            return "($word)";
        }, $email_exceptions);
        $email_exceptions = implode("|", $email_exceptions);
        $e4 = null;
        if (strlen($email) === 0) {
            $e4 .= "Email должен быть заполнен.";
        } elseif (!preg_match_all("/^[a-zа-я][a-zа-я\d]*@[a-zа-я\d]+\.[a-z]+$/iu", $email)) {
            $e4 .= "Email не валидный.";
        } elseif(preg_match_all("/$email_exceptions/", $email)) {
            $e4 .= "Email не должен содержать нецензурные слова.";
        }

        $pass = trim($pass);
        $e5 = null;
        if (strlen($pass) === 0) {
            $e5 .= "Пароль должен быть заполнен.";
        } elseif(!preg_match_all("/^[%?^#$\w][\d\w]{5,}$/", $pass)) {
            $e5 .= "Пароль должен содержать 6 и более символов или цифр.";
        }

        $e6 = null;    
        if (strlen($pass_repeat) === 0) {
            $e6 .= "Пароль должен быть заполнен.";
        } elseif ($pass !== $pass_repeat) {
            $e6 .= "Пароли не совпадают.";
        }

        $e7 = null;
        if (strlen($phone) === 0) {
            $e7 .= "Телефон должен быть заполнен.";
        } elseif(!preg_match_all("/^\+\d{12}$/", $phone)) {
            $e7 .= "Телефон должен быть в формате +375291234567.";
        }

        $e8 = null;
        if ($gender == null) {
            $e8 .= "Пол должен быть выбран.";
        }

        $e9 = null;
        $captcha_answ = $_SESSION["captcha"];
        // echo "<br>ansewr: $captcha_answ<br>captha: $captcha<br>";
        if ($captcha_answ != $captcha) {
            $e9 .= "Капча не пройдена.";
        }

    $e_all = $e1.$e2.$e3.$e4.$e5.$e6.$e7.$e8.$e9;

    // insert user
    if ($e_all == null) {
        $insert_user_query = insert_user($name, $surname, $login, $pass, $email, $phone, $gender);
        $insert_user_res = mysqli_query($db_link, $insert_user_query) or die("Ошибка вставки пользователя" . mysqli_error($db_link));
        echo "
            <script>
                console.log('register user')
            </script>
        ";
        // read new user data
        if ($insert_user_res) {
            $read_user_query = read_user($login);
            $read_user_res = mysqli_query($db_link, $read_user_query);
            if ($read_user_res) {
                $row = mysqli_fetch_assoc($read_user_res);
                echo "<h2>read: {$row['name']}</h2>";
                
                $str = "Регистрация прошла успешно. Пользователь: {$row['name']} {$row['surname']}";
                $time = date("Y-m-d H:i:s", time());
                $f = fopen("../../log.txt", "a");
                $text = "$time -- $str\n";
                $write = fwrite($f, $text);
                fclose($f);

                // redirect on main
                redirect_on_auth();
            }
        }
    } 
    // log errors in file
    else {
        $str = $e_all;
        $time = date("Y-m-d H:i:s", time());

        $f = fopen("../../log.txt", "a");
        $text = "$time -- $str\n";
        $write = fwrite($f, $text);
        fclose($f);
    }

    include("../../db/disconnect.php");
}

    
?>

<? echo "<br>"; print_r($_SESSION); ?>

<div class="form-container container">
<form action="" method="post">

    <label for="name">
        <p class="error"><?echo $e1?></p>
        <input type="text" placeholder="Имя" name="name" value="<?=@$name?>">
    </label>

    <label for="surname">
        <p class="error"><?echo $e2?></p>
        <input type="text" placeholder="Фамилия" name="surname" value="<?=@$surname?>">
    </label>

    <label for="login">
        <p class="error"><?echo $e3?></p>
        <input type="text" placeholder="Логин" name="login" value="<?=@$login?>">
    </label>

    <label for="email">
        <p class="error"><?echo $e4?></p>
        <input type="text" placeholder="E-mail" name="email" value="<?=@$email?>">
    </label>

    <label for="pass">
        <p class="error"><?echo $e5?></p>
        <input type="text" placeholder="Пароль" name="pass">
    </label>

    <label for="pass_repeat">
        <p class="error"><?echo $e6?></p>
        <input type="text" placeholder="Повторите пароль" name="pass_repeat">
    </label>

    <label for="phone">
        <p class="error"><?echo $e7?></p>
        <input type="phone" placeholder="Телефон" name="phone" value="<?=@$phone?>">
    </label>

    <div class="group gender">
        <p class="error"><?echo $e8?></p>
        <p class="label">Выберите пол:</p>
        <label>
            <input type="radio" name="gender" <?echo $gender === "M" ? "checked" : ""?> value="M">
            <span>Мужской</span>
        </label>
        <label>
            <input type="radio" name="gender" <?echo $gender === "W" ? "checked" : ""?> value="W">
            <span>Женский</span>
        </label>
    </div>

    <input type="text" hidden name="go" value="7">

    <hr width="100%">

    <div class="group captcha">
        <p class="error"><? echo $e9; ?></p>
        <p class="label">Пройдите капчу:</p>
        <img id="captcha" src="../../helpers/captcha.php">
        <? echo "
            <a class='captcha_upd' onclick='update_c()'>Обновить капчу</a>
        "; ?>
        <input type="text" name="captcha" class="captcha__input">
    </div>

    <hr width="100%">

    <button class="link" type="submit">Зарегистрироваться</button>

</form>
</div>

<?include_once("../../components/footer.php");?>
