<?php
spl_autoload_register(function ($className) {
    include 'php\\handler\\class\\' . $className . '.php';  
});
?>
