<?php
namespace G{
    class Auth{
        public static function getUserId() {
            if(array_key_exists('id_user', $_SESSION)){
                return $_SESSION['id_user'];
            }
            else{
                return null;
            }
        }
        public static function setUserId($id){
            $_SESSION['id_user'] = $id;
        }
    }
}