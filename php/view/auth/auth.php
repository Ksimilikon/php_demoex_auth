<?php
session_start();
require_once '../../handler/class/G/Errors.php';
use G\Errors;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
    <title></title>
</head>
<body>
    <form class="flex flex-col gap-5" action="/php/handler/auth/auth.php" method="post">
        <input name="email" id="email" type="text" placeholder="email">
        <input name="password" id="password" type="password" placeholder="пароль">
        <div class="error">
            <?php
            echo Errors::getErrors();
            ?>
        </div>
        <button type="submit">Войти</button>
    </form>
</body>
</html>