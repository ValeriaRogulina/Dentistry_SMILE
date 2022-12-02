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

function get_services(){
global $connection;
$service=$connection->query("SELECT * FROM services WHERE id_type=1");
return $service;
}

function get_services_two(){
global $connection;
$service_two=$connection->query("SELECT * FROM services WHERE id_type=2");
return $service_two;
}

function get_services_three(){
global $connection;
$service_three=$connection->query("SELECT * FROM services WHERE id_type=3");
return $service_three;
}
function get_services_four(){
global $connection;
$service_four=$connection->query("SELECT * FROM services WHERE id_type=4");
return $service_four;
}
function get_services_five(){
global $connection;
$service_five=$connection->query("SELECT * FROM services WHERE id_type=5");
return $service_five;
}
function get_services_six(){
global $connection;
$service_six=$connection->query("SELECT * FROM services WHERE id_type=6");
return $service_six;
}
function get_services_seven(){
global $connection;
$service_seven=$connection->query("SELECT * FROM services WHERE id_type=7");
return $service_seven;
}
?>