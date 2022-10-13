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
        <section class="container">
            <div class="header_profile">
                <img src="assets/photo/1.png">
                <h10>Ефимов Егор Семёнович</h10>
                <h11>Стоматолог-терапевт</h11>
                <h11>Опыт работы: 16 лет</h11>
                <div class="btn">
                    <a href="#">Записаться на приём</a>
                </div>
                </div>
                <div class="doctor_info">
                    <div class="doctor_info_title">Специальность</div>
                    <p>Специалист по комплексной реабилитации полости рта, эстетическому и функциональному протезированию на естественных зубах и имплантатах.</p>
                </div>
                <div class="doctor_info">
                    <div class="doctor_info_title">Образование и курсы</div>
                    <p>2002-2007 гг. — Диплом-Ставропольская государственная медицинская академия, г. Ставрополь, присвоена квалификация врач-стоматолог, по специальности «стоматология».</p>
                    <p>2006 г. — Интернатура, Республиканская стоматологическая поликлиника, г. Ставрополь, присвоена квалификация врача-стоматолога.</p>
                    <p>2012-2014 гг. — Диплом-Ординатура «Федерального медико-биологического агентства», г. Москва, присвоена квалификация врача-стоматолога-ортопеда, по специальности стоматология ортопедическая.</p>
                </div>
                <div class="doctor_info">
                    <div class="doctor_info_title">Примеры работ</div>
                </div>
                <div class="all">
                    <input checked type="radio" name="respond" id="desktop">
                    <article id="slider">
                        <input checked type="radio" name="slider" id="switch1">
                        <input type="radio" name="slider" id="switch2">
                        <input type="radio" name="slider" id="switch3">
                        <input type="radio" name="slider" id="switch4">
                        <input type="radio" name="slider" id="switch5">
				<div id="slides">
					<div id="overflow">
						<div class="image">
							<article><img src="/assets/photo/1.jpg"></article>
							<article><img src="/assets/photo/2.jpg"></article>
							<article><img src="/assets/photo/3.jpg"></article>
                            <article><img src="/assets/photo/4.jpg"></article>
						</div>
					</div>
				</div>
				<div id="controls">
					<label for="switch1"></label>
					<label for="switch2"></label>
				</div>
				<div id="active">
					<label for="switch1"></label>
					<label for="switch2"></label>
				</div>
			</article>
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