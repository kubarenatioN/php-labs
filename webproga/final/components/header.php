<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Final Project</title>
    <link rel="stylesheet" href="/final/style/main.css">
</head>
<body>

    <header class="header">

        <div class="container">

            <div class="logo">
                <b>PHP</b>
            </div>

            <?
                if(session_status() != PHP_SESSION_ACTIVE) {
                    session_start();
                }

                $user = $_SESSION["user"];
                if (!empty($user)) {
                    echo "
                        <a class='link__leave' href='modules/auth/auth_out.php'>Выйти</a>
                    ";
                }
            ?>

        </div>

    </header>