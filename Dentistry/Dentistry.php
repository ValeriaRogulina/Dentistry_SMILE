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
        <section class="content" style="background-image: url(assets/images/content.jpg)">
            <div class="container">
            <h1>Входим в десятку лучших клиник Москвы</h1>
            <p>Каждый год портал ПроДокторов выбирает лучшие клиники по мнению пациентов. На премиях 2020 и 2021 годов две наши клиники вошли в первую десятку среди всех стоматологий Москвы.
            </p>  
            </div>
        </section>
        
        <section class="section-padding">
            <div class="container">
                <div class="price">
                    <div class="price_left">
                    <h2>Популярные услуги "SMILE"</h2>
                        <a class="price_link" href="/Prices_costs.php">Все услуги</a>
                    </div>
                    <div class="price_right">
                        <a class="price_list">
                            <div class="price_list_title">Профессиональная чистка зубов</div>
                            <div class="cost">7 000 руб.</div>
                        </a>
                        <a class="price_list">
                            <div class="price_list_title">Лечение кариеса зубов</div>
                            <div class="cost">6 000 руб.</div>
                        </a>
                        <a class="price_list">
                            <div class="price_list_title">Удаление зубов</div>
                            <div class="cost">от 2 500 руб.</div>
                        </a>
                        <a class="price_list">
                            <div class="price_list_title">Коронки</div>
                            <div class="cost">от 16 000 руб.</div>
                        </a>
                        <a class="price_list">
                            <div class="price_list_title">Протезирование на имплантах</div>
                            <div class="cost">от 25 000 руб.</div>
                        </a>
                        <a class="price_list">
                            <div class="price_list_title">Безметалловые коронки</div>
                            <div class="cost">от 16 000 руб.</div>
                        </a>
                        <a class="price_list">
                            <div class="price_list_title">Керамические коронки</div>
                            <div class="cost">от 16 000 руб.</div>
                        </a>
                        <a class="price_list">
                            <div class="price_list_title">Лечение зубов под общим наркозом</div>
                            <div class="cost">от 14 000 руб.</div>
                        </a>
                        <a class="price_list">
                            <div class="price_list_title">Установка брекетов</div>
                            <div class="cost">от 20 000 руб.</div>
                        </a>
                    </div>
                </div>
            </div>
        </section> 
        
        <section class="info">
            <div class="container">
                <h2>Лечение у нас</h2>
                <p>«SMILE» — сеть частных стоматологических клиник, удобно расположенных недалеко от станций метро Академическая, Братиславская, Автозаводская и Таганская.</p>
                <p>В каждой из клиник можно пройти качественное лечение у высококвалифицированного узконаправленного специалиста: терапевта, ортодонта, ортопеда, пародонтолога, хирурга, имплантолога.</p>
                <p>Собираем много реальных положительных отзывов со сторонних площадок. Пациенты рекомендуют нас, так как довольны лечением. Мы заинтересованы, чтобы пациенты получали самые качественные услуги.</p>
                <p>Принимаем оплату онлайн, чтобы лишний раз не ездить в клинику — например, при лечение на элайнерах. Поддерживаем платежи с таких карт:</p>
                <div class="cards">
                    <a href="#">
                        <img src="/assets/images/pay.png" width="20%" height="20%"/>
                    </a>
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
