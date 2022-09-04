<style>
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 400px;
    }
    p {
        margin: 0;
        height: 22px;
        font-size: 12px;
        padding-top: 8px;
        color: red;
    }
    label {
        width: 240px;
    }
    input {
        background-color: transparent;
        width: 100%;
        padding: 10px;
        border: 1px solid #fff;
        color: #000;
        font: unset;
        font-family: Arial, sans-serif;
    }
    .buttons {
        margin-top: 20px;
    }
</style>

<?

    include_once("../../components/header.php");
    include_once("../../helpers/redirects.php");

    if(session_status() != PHP_SESSION_ACTIVE) {
        session_start();
        // print_r("auth in session: ");
        // print_r($_SESSION);
    }

    $login = $_SESSION["login"] ?? "";

    $e1 = $_SESSION["auth_e1"] ?? "";
    $e2 = $_SESSION["auth_e2"] ?? "";
    $e3 = $_SESSION["auth_e3"] ?? "";

    // if user is logged redirect to main page
    if ($login !== "") {
        redirect_on_main();
    }
?>
<main class="main">

    <form action="auth_in.php" method="post">

        <label for="login">
            <p class="error"><?echo $e1?></p>
            <input type="text" placeholder="Логин" name="login" value="<?=@$login?>">
        </label>

        <label for="pass">
            <p class="error"><?echo $e2?></p>
            <input type="text" placeholder="Пароль" name="pass" value="">
        </label>

        <label for="pass_repeat">
            <p class="error"><?echo $e3?></p>
            <input type="text" placeholder="Повторите пароль" name="pass_repeat" value="">
        </label>

        <div class="buttons">
            <button class="link" type="submit">Войти</button>
            <a class="link" href="../../index.php">На главную</a>
        </div>
    </form>
</main>

<?
include_once("../../components/footer.php");
?>