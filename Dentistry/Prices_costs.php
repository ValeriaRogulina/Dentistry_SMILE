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
                <?php
                $services=get_services();
                foreach ($services as $service) {?>
                <a class="price_list">
                    <div class="price_list_title"><?php echo $service['name'];?></div>
                    <div class="cost"><?php echo $service['price'];?></div>
                </a>
                 <?php }?>
                <h5>Профилактика</h5>
                <?php
                $services=get_services_two();
                foreach ($services as $service) {?>
                <a class="price_list">
                    <div class="price_list_title"><?php echo $service['name'];?></div>
                    <div class="cost"><?php echo $service['price'];?></div>
                </a>
                <?php }?>
                <h5>Лечение зубов</h5>
                <?php
                $services=get_services_three();
                foreach ($services as $service) {?>
                <a class="price_list">
                    <div class="price_list_title"><?php echo $service['name'];?></div>
                    <div class="cost"><?php echo $service['price'];?></div>
                </a>
                <?php }?>
                
                <h5>Протезирование</h5>
                 <?php
                $services=get_services_four();
                foreach ($services as $service) {?>
                <a class="price_list">
                    <div class="price_list_title"><?php echo $service['name'];?></div>
                    <div class="cost"><?php echo $service['price'];?></div>
                        </a>
                  <?php }?>
                <h5>Лечение без боли</h5>
                 <?php
                $services=get_services_five();
                foreach ($services as $service) {?>
                <a class="price_list">
                    <div class="price_list_title"><?php echo $service['name'];?></div>
                    <div class="cost"><?php echo $service['price'];?></div>
                </a>
                <?php }?>
                <h5>Эстетическая стоматология</h5>
                <?php
                $services=get_services_six();
                foreach ($services as $service) {?>
                <a class="price_list">
                    <div class="price_list_title"><?php echo $service['name'];?></div>
                    <div class="cost"><?php echo $service['price'];?></div>
                </a>
               <?php }?>
                <h5>Исправление прикуса</h5>
                <?php
                $services=get_services_seven();
                foreach ($services as $service) {?>
                <a class="price_list">
                    <div class="price_list_title"><?php echo $service['name'];?></div>
                    <div class="cost"><?php echo $service['price'];?></div>
                </a>
                <?php }?>
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