<?php
session_start();
unset($_SESSSION['email']);
unset($_SESSION['senha']);
header('Location: login.php');
?>