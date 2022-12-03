<?php require 'db.php'; 
session_start();
$sql = mysqli_query($connection, 'SELECT * FROM `doctor`');
$result = get_doctor($_GET['id_doctor']);
$work=get_works($_GET['id_doctor']);
if(!isset($_SESSION["session_name"])):
header("location:Authorization.php");
else:
?>
<?php endif; ?>
    
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
        <a href="/Profile.php">
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

                

                <img src="<?php echo $result['photo']; ?>">
                <h10><?php echo "{$result['name']}"; ?></h10>
                <h11><?php echo "{$result['speciality']}"; ?></h11>
                <h11>Опыт работы: <?php echo "{$result['experience']}"; ?> лет</h11>
                <div class="btn">
               

                    <a href="Timetable_doc.php?id_doctor=<?php echo $result ['id_doctor'];?>" >Записаться на приём</a>
                   
                </div>
                </div>
                <div class="doctor_info">
                    <div class="doctor_info_title">Специальность</div>
                    <p><?php echo "{$result['specialization']}"; ?></p>
                </div>
                <div class="doctor_info">
                    <div class="doctor_info_title">Образование и курсы</div>
                    <p><?php echo "{$result['education']}"; ?></p>
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
                            <?php
                          
                            foreach ($work as $works) {?>
							<article>
                                <img src="<?php echo $works['work']; ?>">
                            </article>
                        <?php
                    }
                    ?>
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