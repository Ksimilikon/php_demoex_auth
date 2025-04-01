<?php
namespace G{
    class Errors{
        public static function isExistErrors(){
            session_start();
            if (array_key_exists('errors', $_SESSION)){
                if($_SESSION['errors'] == []){
                    return false;
                }
                else{
                    return true;
                }
            }
            else{
                return false;
            }
        }
        public static function getErrors(){
        $errors = '';
            if (Errors::isExistErrors()){
                foreach($_SESSION['errors'] as $err){
                    $errors .= '<p>'.$err.'</p>';
                }
                $_SESSION['errors'] = [];
                return $errors;
            }
        }
        public static function setError($errorText){
            $_SESSION['errors'][] = $errorText;
        }
        
    }
}