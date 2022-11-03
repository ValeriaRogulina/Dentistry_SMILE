<?php require 'db.php'; 
$sql = mysqli_query($connection, 'SELECT * FROM `doctor`');
$result = get_doctor($_GET['id_doctor']);
$time=get_times($_GET['id_doctor'])
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
                <img src="<?php echo $result['photo']; ?>">
                <h10><?php echo "{$result['name']}"; ?></h10>
                <h11><?php echo "{$result['speciality']}"; ?></h11>
                <h11>Опыт работы: <?php echo "{$result['experience']}"; ?> лет</h11>
             </div>
            <div class="doctor_info">
                <h12>Дата приёма</h12>
                    <div class="row_schedule">
                        <div class="row_schedule_btn">

                    <?php
                    $d = new DateTime(); ?>
                        

                            <input id="date-21.10.2022" type="radio" name="date" value="21.10.2022">
                            <label for="date-21.10.2022"> <?php echo $d->modify('+1day')->format('d.m.Y'); ?></label>
                        </div>
                        <div class="row_schedule_btn">
                            <input id="date-22.10.2022" type="radio" name="date" value="22.10.2022">
                            <label for="date-22.10.2022"> <?php echo $d->modify('+1day')->format('d.m.Y'); ?></label>
                        </div>
                        <div class="row_schedule_btn">
                            <input id="date-23.10.2022" type="radio" name="date" value="23.10.2022">
                            <label for="date-23.10.2022"> <?php echo $d->modify('+1day')->format('d.m.Y'); ?></label>
                        </div>
                        <div class="row_schedule_btn">
                            <input id="date-24.10.2022" type="radio" name="date" value="24.10.2022">
                            <label for="date-24.10.2022"> <?php echo $d->modify('+1day')->format('d.m.Y'); ?></label>
                        </div>
                        <div class="row_schedule_btn">
                            <input id="date-25.10.2022" type="radio" name="date" value="25.10.2022">
                            <label for="date-25.10.2022"> <?php echo $d->modify('+1day')->format('d.m.Y'); ?></label>
                        </div>
                    </div>
            </div>
            <div class="doctor_info">
                    <h12>Время приёма</h12>
                    <div class="row_schedule">

                    <?php
                          
                            foreach ($time as $times) {?>

                        <div class="row_schedule_btn">
                            <input id="time-<?php echo $times['time'];  ?>" type="radio" name="time" value="<?php echo $times['time'];  ?>">
                            <label for="time-<?php echo $times['time'];  ?>"><?php echo $times['time'];  ?></label>
                        </div>
                        
                    <?php } ?>
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