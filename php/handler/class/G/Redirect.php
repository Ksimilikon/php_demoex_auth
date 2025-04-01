<?php
namespace G{
    class Redirect{
        public static function redirect($to){
            return header('Location: '. $to);
        }
    }
}

?>