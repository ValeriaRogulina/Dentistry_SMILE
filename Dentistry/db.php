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

//поучение врача по id
function get_doctor($id_doctor){
	global $connection;
    $doctors=$connection->query("SELECT * FROM doctor WHERE id_doctor=$id_doctor");
    foreach ($doctors as $doctor) {
    return $doctor;
      }
}

//врачи
function get_doctors(){
	global $connection;
    $doctors=$connection->query("SELECT * FROM doctor");
    return $doctors;
}


//получение работ по id доктора
function get_works($id_doctor){
    global $connection;
    $works=$connection->query("SELECT * FROM works WHERE id_doctor=$id_doctor");
    return $works;
    } 

//получение времени приёма по id доктора
function get_times($id_doctor){
    global $connection;
    $times=$connection->query("SELECT * FROM time_of_doctor WHERE id_doctor=$id_doctor");
    return $times;
    } 
?>