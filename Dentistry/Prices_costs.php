<?php require 'db.php'; ?>
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
            <div class="prices_title">
                <h2>Услуги и цены</h2>
            </div>
            <div class="prices">
                <h5>Диагностика</h5>
                <a class="price_list">
                    <div class="price_list_title">Прицельный снимок</div>
                    <div class="cost">400 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Панорамный снимок (ортопантомограмма)</div>
                    <div class="cost">1 200 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Консультация стоматолога</div>
                    <div class="cost">Бесплатно</div>
                </a>
                <h5>Профилактика</h5>
                <a class="price_list">
                    <div class="price_list_title">Удаление зубного камня</div>
                    <div class="cost">от 150 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Чистка Air Flow</div>
                    <div class="cost">от 1 700 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Профессиональная чистка зубов ClinPro</div>
                    <div class="cost">7 000 руб.</div>
                </a>
                <h5>Лечение зубов</h5>
                <a class="price_list">
                    <div class="price_list_title">Пломбирование зубов</div>
                    <div class="cost">от 6 000 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Лечение кариеса зубов</div>
                    <div class="cost">6 000 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Лечение пульпита</div>
                    <div class="cost">от 15 000 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Лечение корневых каналов</div>
                    <div class="cost">от 15 000 руб.</div>
                </a>
                <h5>Протезирование</h5>
                <a class="price_list">
                    <div class="price_list_title">Протезирование на имплантах</div>
                    <div class="cost">от 25 000 руб.</div>
                        </a>
                <a class="price_list">
                    <div class="price_list_title">Несъемное протезирование</div>
                    <div class="cost">от 1 000 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Съёмное протезирование</div>
                    <div class="cost">от 2 000 руб.</div>
                </a>
                <h5>Лечение без боли</h5>
                <a class="price_list">
                    <div class="price_list_title">Лечение зубов под общим наркозом</div>
                    <div class="cost">от 14 000 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Лечение зубов с анастезией</div>
                    <div class="cost">от 250 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Удаление зубов под наркозом</div>
                    <div class="cost">от 14 000 руб.</div>
                </a>
                <h5>Эстетическая стоматология</h5>
                <a class="price_list">
                    <div class="price_list_title">Отбеливание</div>
                    <div class="cost">20 000 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Удаление зубного налёта</div>
                    <div class="cost">1 700 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Реставрация зубов</div>
                    <div class="cost">7 800 руб.</div>
                </a>
                <h5>Исправление прикуса</h5>
                <a class="price_list">
                    <div class="price_list_title">Установка брекетов</div>
                    <div class="cost">от 20 000 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Лингвальные брекеты</div>
                    <div class="cost">от 11 000 руб.</div>
                </a>
                <a class="price_list">
                    <div class="price_list_title">Ортодонтические микроимпланты</div>
                    <div class="cost">от 12 500 руб.</div>
                </a>
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