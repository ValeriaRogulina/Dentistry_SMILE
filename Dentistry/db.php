<?php
$servername = 'localhost';
$username = 'root';
$password = '12345';
$db='my_dentistry';

$connection = mysqli_connect($servername, $username, $password, $db);
// Проверяем соединение
if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}
//врачи
function get_doctors(){
	global $connection;
    $doctors=$connection->query("SELECT * FROM doctor");
    return $doctors;
}
?>