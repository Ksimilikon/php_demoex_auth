<header>
    <?php
    session_start();
require_once '../autoload.php';
if(array_key_exists('id_user', $_SESSION)){
     include 'header_user.php';
}
else{
    include 'header_null_user.php';
}
    ?>
</header>