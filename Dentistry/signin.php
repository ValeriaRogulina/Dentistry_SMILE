<?php
// Подключаем библиотеку RedBeanPHP
$connection = mysqli_connect('localhost', 'root', '12345', 'my_dentistry');
//Если форма авторизации отправлена...
	if ( !empty($_REQUEST['password']) and !empty($_REQUEST['login']) ) {
		//Пишем логин и пароль из формы в переменные (для удобства работы):
		$login = $_REQUEST['login']; 
		$password = $_REQUEST['password']; 

		/*
			Формируем и отсылаем SQL запрос:
			ВЫБРАТЬ ИЗ таблицы_users ГДЕ поле_логин = $login И поле_пароль = $password.
		*/
		$query = 'SELECT * FROM patient WHERE login="'.$login.'" AND password="'.$password.'"';
		$result = mysqli_query($connection, $query); //ответ базы запишем в переменную $result. 
		$user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP
        

		//Если база данных вернула не пустой ответ - значит пара логин-пароль правильная
		if (!empty($user)) {
            
            header('location:/Profile.php');
            
			//Стартуем сессию:
			session_start(); 

			//Пишем в сессию информацию о том, что мы авторизовались:
			$_SESSION['auth'] = true; 

			//Пишем в сессию логин и id пользователя (их мы берем из переменной $user!):
			$_SESSION['id'] = $user['idpatient']; 
			$_SESSION['login'] = $user['login']; 
		} else {
			//Пользователь неверно ввел логин или пароль, выполним какой-то код.
            echo 'Пользователь не найден!';
		}
	}
?>