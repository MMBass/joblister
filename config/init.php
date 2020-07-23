<?php
//Start Session
session_start();

//Config File
require_once 'config.php';

//Helper include
require_once 'helpers/system_helper.php';

//Autoloader
function __autoload($class_name){
    require_once 'lib/'.$class_name.'.php';
}
