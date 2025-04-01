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
    <title>Document</title>
</head>
<body>
    <form action="../../handler/auth/reg.php" method="post">
        <input name="email" id='email' type="email" placeholder="email" require>
        <input name="password" type="password" placeholder="пароль">
        <input name="password_confirm" type="password" placeholder="повтор пароль">
        <div>
        <?php
        Errors::getErrors();
        ?>
        </div>
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>