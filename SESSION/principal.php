<?php
    session_start();
    
    if($_SESSION['user_login'] == 0){
        header('location: index.php');
    }else{
        echo "Seja Bem vindo ao sistema!";
    }
?>