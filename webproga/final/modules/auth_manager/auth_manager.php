<?

    if(session_status() != PHP_SESSION_ACTIVE) {
        session_start();
        echo "Auth manager: ";
        print_r($_SESSION);
    }

    $user = $_SESSION["user"];
    if (!empty($user)) {
        include_once("./components/main_content.php");
    } else {
        echo "
            <div class='container'>
                <h2 class='title'>Добро пожаловать, незнакомец</h2>
                <div class='buttons'>
                    <a class='link' href='modules/reg/reg.php'>Зарегистрироваться</a>
                    <a class='link' href='modules/auth/auth.php'>Войти</a>
                </div>
            </div>
        ";
    }

?>