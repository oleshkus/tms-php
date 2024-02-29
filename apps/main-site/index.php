<?php
//include("practice.php");
//include("15.php");
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


