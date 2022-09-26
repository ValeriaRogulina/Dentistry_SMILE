<?php
$servername = 'localhost';
$username = 'root';
$password = 'Vepfngs.ru1';
$db='my_dentistry';

$connection = mysqli_connect($servername, $username, $password, $db);
// Проверяем соединение
if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}
?>