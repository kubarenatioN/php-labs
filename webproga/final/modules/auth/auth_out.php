<?

    include_once("../../helpers/redirects.php");

    if(session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }

    $_SESSION["login"] = "";
    $_SESSION["user"] = "";

    session_unset();

    redirect_on_auth();

?>