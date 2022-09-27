<?php  
require 'db.php'; 
session_start();
?>
<?php
    $sql1 = mysqli_query($connection, 'SELECT * FROM `patient` WHERE idpatient="'.$_SESSION['id'].'"');
    $result1 = mysqli_fetch_assoc($sql1);
    $sql2 = mysqli_query($connection, 'SELECT * FROM `personal data` WHERE idpatient="'.$_SESSION['id'].'"');
    $result2 = mysqli_fetch_assoc($sql2);
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
        <div class="private_office">
            <div class="leftside_bar">
                <div class="leftside_bar_title">
                    <h7>Личный кабинет</h7>
                </div>
                <div class="leftside_list">
                    <a href="/Profile.php">Профиль</a>
                    <a href="/Med_card.php">Моя медицинская карта</a>
                    <a href="/logout.php">Выйти</a>
                </div>
            </div>
            <div class="right_info">
                <div class="page_content">
                    <section class="person">
                        <div class="person_photo">
                            <img src="/assets/images/lk.png" width="150" height="150px"/>
                        </div>
                        <div class="person_info">
                            <div class="person_header">
                                <h7><?php echo "{$result1['surname']} {$result1['name']} {$result1['patronymic']}";?></h7>
                            </div>
                            <div class="short_info">
                                <p>Пол:<?php echo "&nbsp{$result1['gender']}";?></p>
                                <p>Дата рождения:<?php echo "&nbsp{$result1['patient_date']}";?></p>
                                <p>Телефон:<?php echo "&nbsp{$result1['phone']}";?></p>
                                <p>Хронические заболевания/Аллергии:<?php echo "&nbsp{$result1['chronic illness/allergy']}";?></p>
                                <p>Полис ОМС:<?php echo "&nbsp{$result2['OMS number']}";?></p>
                                <p>Паспортные данные:<?php echo "&nbsp{$result2['passport series']} {$result2['passport number']}";?></p>
                                <p>Снилс:<?php echo "&nbsp{$result2['SNILS']}";?></p>
                            </div>
                        </div>
                    </section>
                </div>
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