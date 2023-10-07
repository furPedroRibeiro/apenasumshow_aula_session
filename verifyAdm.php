<?php
    $nivel = $_SESSION['nivel']; 

    if($nivel != 1){
        header('Location: erroNivel.php');
    }
?>