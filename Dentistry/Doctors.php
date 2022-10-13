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
                <h2>Наши врачи</h2>
            </div>
                <div class="doctors">
                    <?php
                    while ($result = mysqli_fetch_array($sql)) { ?>
                    <div class="doc_info">
                        <div class="doc_name">
                            <a href="Doctor_profile.php"><?php echo "{$result['name']}"; ?></a>
                            <p><?php echo "{$result['speciality']}"; ?></p>
                            <p>Опыт работы: <?php echo "{$result['experience']}"; ?> лет</p>
                           
                        </div>
                        <div class="doc_photo">
                            <img src="<?php echo $result['photo']; ?>" width="250" height="250px"/>
                        </div>
                    </div><?php } ?>
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