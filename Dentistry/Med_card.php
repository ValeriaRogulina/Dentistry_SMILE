<?php 
require 'db.php'; 
session_start();

if(!isset($_SESSION['id'])):
header("location:Authorization.php");
else:
?>
<?php endif; 
$name_patient=$_SESSION['session_name'];
$query =$connection->query("SELECT * FROM reception WHERE name_patient='".$name_patient."'");
$sql2 = mysqli_query($connection, 'SELECT * FROM `doctor`');

if (isset($_GET['del'])) { //проверяем, есть ли переменная
    //удаляем строку из таблицы
    $sql = mysqli_query($connection, "DELETE FROM reception WHERE `id_reception` = {$_GET['del']}");
    header('Location: Med_card.php');
    if ($sql) {
      echo "<p>Запись удалена.</p>";
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($connection) . '</p>';
    }
  }
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
        <?php
        foreach ($query as $row) {;?>
            <div class="right_info">
                <div class="page_content">
                    <section class="medcard">
                            <div class="appointment">
                                <div class="card_info">
                                    <h8>Приём № <?php echo "{$row['id_reception']}";?></h8>
                                    <div class="line"></div>
                                    <div class = "part">
                                        <img src="/assets/images/calendar.png" width="25" height="25px"/>
                                        <p>Дата приёма: <?php echo "{$row['date_res']}";?></p>
                                    </div>
                                    <div class = "part">
                                        <img src="/assets/images/clock.png" width="25" height="25px"/>
                                        <p>Время приёма приёма: <?php echo "{$row['time_reception']}";?></p>
                                    </div>
                                    <div class = "part">
                                        <img src="/assets/images/doc.png" width="25" height="25px"/>
                                        <p>Лечащий врач: <?php echo "{$row['doctor']}";?></p>
                                    </div>
                                    <?php
        echo
        "<a href='?del={$row['id_reception']}' >Удалить</a>";?>
                                    <div class="line"></div>
                                    
                                </div>
                                
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
        <?php
}
;?>
    </main>
    
    <footer>
        <a class="ft">
            <h3>ООО «SMILE», ИНН 1234567891</h3>
            <h4>© 2022</h4>
        </a>
    </footer>  
</body>
</html>