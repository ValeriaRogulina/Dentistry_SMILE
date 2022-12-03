<?php require 'db.php'; 
session_start();
if(!isset($_SESSION["session_name"])):
header("location:Authorization.php");
else:
?>
<?php endif; ?>
<?php
$sql = mysqli_query($connection, 'SELECT * FROM `doctor`');
$result = get_doctor($_GET['id_doctor']);
$time=get_times($_GET['id_doctor']);

if(isset($_POST["zapis"])){
    if(!empty($_POST['date_res']) && !empty($_POST['time_reception']) ) {
        $date_res= $_POST['date_res'];
        $time_reception=$_POST['time_reception'];
        $doctor=$_POST['doctor'];
        $name_patient=$_SESSION['session_name'];

    $query=$connection->query("SELECT * FROM reception WHERE date_res='".$date_res."' AND time_reception='".$time_reception."'AND doctor='".$doctor."'");
    $numrows=mysqli_num_rows($query);
    if($numrows==0) {
        $sqll="INSERT INTO reception (name_patient, date_res, time_reception, doctor) VALUES( '$name_patient', '$date_res', '$time_reception', '$doctor')";
        $res=$connection->query($sqll);
    if($res){
        $message = "Вы записаны";
    } else {
        $message = "Не удалось записаться";
    } } else {
        $message = "Это время занято";
    } } else {
        $message = "Не выбраны все поля";
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
        <div class="container">
            <div class="prices_title">
                <h2>Запись к врачу онлайн</h2>
            </div>
            <form action="Timetable_doc.php?id_doctor=<?php echo $result['id_doctor']; ?>" method="post">
                <div class="header_profile">
                    <img src="<?php echo $result['photo']; ?>">
                    <div class="name_d">
                     <select name="doctor">
                        <option>
                    <?php echo "{$result['name']}"; ?>
                    </option>
                    </select>
                </div>
                    <h11><?php echo "{$result['speciality']}"; ?></h11>
                    <h11>Опыт работы: <?php echo "{$result['experience']}"; ?> лет</h11>
                </div>
                <div class="doctor_info">
                    <h12>Дата приёма</h12>
                        <div class="row_schedule">
                            <div class="row_schedule_btn">
                        <?php
                        $d = new DateTime(); ?>
                                <input id="date-21.10.2022" type="radio" name="date_res" value="<?php echo $d->modify('+1day')->format('d.m.Y'); ?>">
                                <label for="date-21.10.2022"> <?php echo $d->format('d.m.Y'); ?></label>
                            </div>
                            <div class="row_schedule_btn">
                                <input id="date-22.10.2022" type="radio" name="date_res" value="<?php echo $d->modify('+1day')->format('d.m.Y'); ?>">
                                <label for="date-22.10.2022"> <?php echo $d->format('d.m.Y'); ?></label>
                            </div>
                            <div class="row_schedule_btn">
                                <input id="date-23.10.2022" type="radio" name="date_res" value="<?php echo $d->modify('+1day')->format('d.m.Y'); ?>">
                                <label for="date-23.10.2022"> <?php echo $d->format('d.m.Y'); ?></label>
                            </div>
                            <div class="row_schedule_btn">
                                <input id="date-24.10.2022" type="radio" name="date_res" value="<?php echo $d->modify('+1day')->format('d.m.Y'); ?>">
                                <label for="date-24.10.2022"> <?php echo $d->format('d.m.Y'); ?></label>
                            </div>
                            <div class="row_schedule_btn">
                                <input id="date-25.10.2022" type="radio" name="date_res" value="<?php echo $d->modify('+1day')->format('d.m.Y'); ?>">
                                <label for="date-25.10.2022"> <?php echo $d->format('d.m.Y'); ?></label>
                            </div>
                        </div>
                </div>
                <div class="doctor_info">
                    <h12>Время приёма</h12>
                    <div class="row_schedule">
                    
                        <?php
                        foreach ($time as $times) {?>
                        <div class="row_schedule_btn">
                            <input id="time-<?php echo $times['time'];  ?>" type="radio" name="time_reception" value="<?php echo $times['time'];  ?>">
                            <label for="time-<?php echo $times['time'];  ?>" ><?php echo $times['time'];  ?></label>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <div class="button">
                    <input class="form-submit" type="submit" name="zapis" value="Записаться на приём">
                </div>
            </form>
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