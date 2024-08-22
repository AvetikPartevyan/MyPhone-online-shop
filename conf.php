<?php
session_start();
include ('classes/DB.php');
if(isset($_POST['class'])){
    $class_name = $_POST['class'];
    include "classes/$class_name.php";

    $class = new $class_name();
 
    // print_r(7);
}
exit;
?>