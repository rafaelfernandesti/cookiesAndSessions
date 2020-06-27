<?php
    session_start();

    if($_POST['login'] == "lucas" && $_POST['senha'] == "20178"){
        $_SESSION['user_login'] = 1;
    }else{
        $_SESSION['user_login'] = 0;
    }
    
    header('location: principal.php');
?>