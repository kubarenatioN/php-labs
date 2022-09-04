<?

    if(session_status() != PHP_SESSION_ACTIVE) {
        session_start();
        // print_r("auth_in session: ");
        // print_r($_SESSION);
        // echo "<br>";
    }

    include_once("../../helpers/redirects.php");
    include_once("../../db/users.php");

    $login = $_POST["login"] ?? null;
    $pass = $_POST["pass"] ?? null;
    $pass_repeat = $_POST["pass_repeat"] ?? null;

    $login = trim($login);
    $pass = trim($pass);
    $pass_repeat = trim($pass_repeat);

    echo "pass: $pass<br>";
    echo "repeat: $pass_repeat<br>";

    if (!$login || !$pass) {
        echo "
            <script>
                alert('Логин или пароль пусты')
            </script>
        ";
        header("location: 'auth.php'");
    }

    unset($_SESSION["auth_e1"]);
    unset($_SESSION["auth_e2"]);
    unset($_SESSION["auth_e3"]);

    if($pass !== $pass_repeat) {
        echo "not equals<br>";
        $_SESSION["auth_e3"] = "Пароли не совпадают.";
        redirect_on_auth();
        exit();
    }

    include("../../db/connect.php");
    $read_user_query = read_user($login);
    $read_user_res = mysqli_query($db_link, $read_user_query) or die("Ошибка чтения пользователя из БД при входе" . mysqli_error($db_link));
    if ($read_user_res) {
        $row = mysqli_fetch_assoc($read_user_res);
        if (!empty($row["id"])) {
            if ($row["password"] === md5(md5($pass).$row["salt"])) {
                // save in session
                $_SESSION["login"] = $row["login"];
                $_SESSION["user"] = "{$row['name']} {$row['surname']}";

                include("../../db/disconnect.php");
                redirect_on_main();
            }
            else {
                $_SESSION["auth_e2"] = "Пароль не подходит";
                include("../../db/disconnect.php");
                redirect_on_auth();
            }
        }
        else {
            $_SESSION["auth_e1"] = "Пользователь не найден";
            include("../../db/disconnect.php");
            redirect_on_auth();
        }
    }
    
    include("../../db/disconnect.php");

?>