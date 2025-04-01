<?php

namespace G{
    use G\Auth;
    include '../../../autoload.php';
    class Layouts{
        public static function header(){
            if(Auth::getUserId() == null){
                return include '../../../layouts/header_null_user.php';
            }
            else{
                return include  '../../../layouts/header_user.php';
            }
        }
    }
}