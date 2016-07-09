<?php

session_start();
session_destroy();

unset($_COOKIE['username']);
unset($_SESSION['username']);
setcookie("username","");



setcookie('username', null, -1, '/');


header("Location: index.php");

?>