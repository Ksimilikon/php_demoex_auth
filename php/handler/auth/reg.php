<?php
require_once '../../conf.php';
session_start();
require_once '../class/G/Errors.php';
require_once '../class/G/Redirect.php';
require_once '../class/G/Auth.php';

use G\Auth;
use G\Errors;
use G\Redirect;

$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if($email == '' or $email == null){
    Errors::setError("Поле email должно быть заполненно");
}
if($password == '' or $password == null){
    Errors::setError('Пароль не должен быть пустым');
}
if($password_confirm != $password){
    Errors::setError('Пароли не совпадают');
}
////
if(Errors::isExistErrors()){
    $q = 'INSERT INTO users (`email`, `password`) values(?, ?)';
    $stm = $db->prepare($q);
    $stm->bind_param('ss', $email, password_hash($password, PASSWORD_DEFAULT));
    $stm->execute();
    $id = $db->insert_id;
    echo $id;
    Auth::setUserId($id);
    Redirect::redirect('../../view/main.php');
}
else{
    Redirect::redirect('../../view/auth/reg.php');
}