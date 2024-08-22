<?php
    $token = $server[2];
    include('classes/Auth.php');
    $auth = new Auth();
    $auth->validate_email($token);
?>