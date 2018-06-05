<?php
require_once "config/config.php";
//auto load classes
spl_autoload_register(function($className){
    require_once "libaries/$className.php";
});