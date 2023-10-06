<?php
    $session_start();
    $nivel = $_SESSION['nivel'];
    if($nivel != 1){
        header('location: erronivel.php');
    }
?>