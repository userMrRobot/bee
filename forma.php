<?php
session_start();
require 'function.php';
$login = $_POST['email'];
$pass = $_POST['password'];

login($login, $pass);


?>