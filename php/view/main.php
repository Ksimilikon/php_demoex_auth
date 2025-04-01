<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Главная</title>
</head>
<body>
    <?php
    include '../layouts/header.php';
    ?>
    <div class="">
    <?php
    require_once '../handler/class/G/Auth.php';
    
    use G\Auth;
    if(Auth::getUserId() != null){
        require_once '../conf.php';
        $q = 'select * from users where id = '.Auth::getUserId();
        $email = $db->query($q)->fetch_assoc()['email'];
        echo '<p>email: '.$email.'</p>';
    }
    ?>
    </div>
</body>
</html>