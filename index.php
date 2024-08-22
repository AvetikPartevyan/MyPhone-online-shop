<?php
session_start();
// header('Location: views/home.php');
$get_url = $_SERVER['REQUEST_URI'];
$str = strtok($get_url, '?');
$server = explode('/',$str);
$products;
include ('classes/DB.php');
$page = 'home';
$loggedIn = ['home','products','product','logout','404','add_product'];
$loggedOut = ['home','login','product','register','products','404','verificate','forgot_password','change_password'];

$loggedInMenu = ['home' => 'active','products' => 'active','logout'=> 'active','404' => 'passive'];
$loggedOutMenu = ['home' => 'active','login' => 'active','register' => 'active','products' => 'active','404'=> 'passive','verificate'=> 'passive','forgot_password'=> 'passive','change_password'=> 'passive'];

if(isset($server[1])){
    if(isset($_SESSION['id']) and in_array($server[1], $loggedIn)){
        $page = $server[1];
    }
    else if(!isset($_SESSION['id']) and in_array($server[1], $loggedOut)){
        $page = $server[1];
    }
    else{
        // header('Location: /404');
    }
}
else{
    // header('Location: /404');
}

if(isset($_POST['class'])){
    $class_name = $_POST['class'];
    include "classes/$class_name.php";

    $class = new $class_name();
    // print_r(7);
}

// print_r($_POST);

include('views/header.php');

include("views/$page.php");

include('views/footer.php');

?>