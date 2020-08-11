<?php 
    include_once '../config/config.php';
    include_once '../library/mainFunctions.php';


    //determine which controller we will work with
    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']):'Index';
    
    //determine which function we will work with
    $actionName = isset($_GET['action']) ? $_GET['action'] : 'test';
    
    loadPage($controllerName, $actionName);