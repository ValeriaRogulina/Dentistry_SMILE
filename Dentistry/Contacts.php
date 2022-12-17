<?php require 'db.php'; 
session_start();
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
        <a href="/Profile.php">
        <img src="/assets/images/lk.png" width="50" height="50px"/>
        </a>
    </div>                                                             
    </header>
    <main>
        <section class="contact_container">
            <div class="prices_title">
                <h2>Контакты</h2>
            </div>
            <div class="contacts">
                <div class="info_contacts">
                    <img src="/assets/images/clock.png" width="25px" height="25px"/>
                    <p>C 9 до 21 ежедневно, без перерыва</p>
                </div>
                <div class="info_contacts">
                    <img src="/assets/images/phone-call.png" width="25px" height="25px"/>
                    <p>+ 7 (983) 311-55-72</p>
                </div>
                <div class="info_contacts">
                    <img src="/assets/images/email.png" width="25px" height="25px"/>
                    <p>privet@smile.ru</p>
                </div>
                <div class="info_contacts">
                    <img src="/assets/images/vk.png" width="50" height="50px"/>
                    <img src="/assets/images/telegram.png" width="50" height="50px"/>
                </div>
            </div>    
        </section>
    </main>
    <footer>
        <a class="ft">
            <h3>ООО «SMILE», ИНН 1234567891</h3>
            <h4>© 2022</h4>
        </a>
    </footer>  
</body>
</html>