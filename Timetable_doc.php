<?php require 'db.php'; 
$sql = mysqli_query($connection, 'SELECT * FROM `doctor`');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
     <link href="https://fonts.googleapis.com/css?family=Italiana|Montserrat:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link>
	<link rel="stylesheet" href="libs/bootstrap-reboot.min.css">
	<!-- Bootstrap сетка -->
	<link rel="stylesheet" href="libs/bootstrap-grid.min.css">
    <!-- Стили сайта -->
	<link rel="stylesheet" href="css/styles.css">
    <title>Dentistry</title>
</head>
<body>
    <header>
    <div class="logo">
        <a href="/Dentistry.php">
        <img src="/assets/images/logo.jpg" width="350" height="80px"/>
        </a>
    </div>
    <div class="menu">
        <ul>
            <li><a href="#">+ 7 (983) 311-55-72</a></li>
            <li><a href="/Prices_costs.php">Услуги и цены</a></li>
            <li><a href="/Doctors.php">Наши врачи</a></li>
            <li><a href="/Discounts.php">Акции</a></li>
            <li><a href="/Contacts.php">Контакты</a></li>
        </ul>
    </div>
    <div class="btn">
        <a href="#">Обратный звонок</a>
    </div>
    <div class="lk">
        <a href="/Authorization.php">
        <img src="/assets/images/lk.png" width="50" height="50px"/>
        </a>
    </div>                                                        
    </header>
    
    <main>
        <div class="container">
            <div class="prices_title">
                <h2>Запись к врачу онлайн</h2>
            </div>
            <div class="header_profile">
                <img src="/assets/photo/1.png">
                <h10>Ефимов Егор Семенович</h10>
                <h11>Стоматолог-терапевт</h11>
                <h11>Опыт работы: 8 лет</h11>
             </div>
            <div class="doctor_info">
                <h12>Дата приёма</h12>
                    <div class="row_schedule">
                        <div class="row_schedule_btn">
                            <input id="date-21.10.2022" type="radio" name="date" value="21.10.2022">
                            <label for="date-21.10.2022">завтра</label>
                        </div>
                        <div class="row_schedule_btn">
                            <input id="date-22.10.2022" type="radio" name="date" value="22.10.2022">
                            <label for="date-22.10.2022">22.10.2022</label>
                        </div>
                        <div class="row_schedule_btn">
                            <input id="date-23.10.2022" type="radio" name="date" value="23.10.2022">
                            <label for="date-23.10.2022">23.10.2022</label>
                        </div>
                        <div class="row_schedule_btn">
                            <input id="date-24.10.2022" type="radio" name="date" value="24.10.2022">
                            <label for="date-24.10.2022">24.10.2022</label>
                        </div>
                        <div class="row_schedule_btn">
                            <input id="date-25.10.2022" type="radio" name="date" value="25.10.2022">
                            <label for="date-25.10.2022">25.10.2022</label>
                        </div>
                    </div>
            </div>
            <div class="doctor_info">
                    <h12>Время приёма</h12>
                    <div class="row_schedule">
                        <div class="row_schedule_btn">
                            <input id="time-9:00" type="radio" name="time" value="9:00">
                            <label for="time-9:00">9:00</label>
                        </div>
                        <div class="row_schedule_btn">
                            <input id="time-10:30" type="radio" name="time" value="10:30">
                            <label for="time-10:30">10:30</label>
                        </div>
                        <div class="row_schedule_btn">
                            <input id="time-12:00" type="radio" name="time" value="12:00">
                            <label for="time-12:00">12:00</label>
                        </div>
                        <div class="row_schedule_btn">
                            <input id="time-13:30" type="radio" name="time" value="13:40">
                            <label for="time-13:30">13:30</label>
                        </div>
                        <div class="row_schedule_btn">
                            <input id="time-15:00" type="radio" name="time" value="15:00">
                            <label for="time-15:00">15:00</label>
                        </div>
                    </div>
            </div>
            <div class="button">
                <input class="form-submit" type="submit" name="submit" value="Записаться на приём">
            </div>
        </div>
        
    </main>
    
    <footer>
        <a class="ft">
            <h3>ООО «SMILE», ИНН 1234567891</h3>
            <h4>© 2022</h4>
        </a>
    </footer>  
</body>
</html>