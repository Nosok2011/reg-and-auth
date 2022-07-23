<?php
$host = 'localhost'; #Хост phpMyAdmin
$username = 'root'; #Имя пользователя phpMyAdmin
$password = 'root'; #Пароль от аккаунта phpMyAdmin
$connection = mysqli_connect($host, $username, $password);
$select_db = mysqli_select_db($connection, 'register');
?>