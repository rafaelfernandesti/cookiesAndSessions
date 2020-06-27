<?php
setcookie('name', $_GET['nome'], time() + 60 * 60 * 24);
setcookie('email', $_GET['email'], time() + 60 * 60 * 24);
setcookie('city', $_GET['cidade'], time() + 60 * 60 * 24);

header('Location: mensagem.php');
?>