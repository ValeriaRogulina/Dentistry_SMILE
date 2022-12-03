<?php
    require 'db.php';
    session_start();
    if(isset($_SESSION["session_name"])){
    echo "Session is set"; // в целях проверки
    header("Location: Dentistry.php");
    }

    if(isset($_POST["sub"])){

    if(!empty($_POST['login']) && !empty($_POST['password'])) {
    $login=htmlspecialchars($_POST['login']);
    $password=htmlspecialchars($_POST['password']);
    $query =$connection->query("SELECT * FROM patient WHERE login='".$login."' AND password='".$password."'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)
 {
while($row=mysqli_fetch_assoc($query))
 {
    $dbusername=$row['login'];
  $dbpassword=$row['password'];
 }
  if($login == $dbusername && $password == $dbpassword)
 {
    // старое место расположения
    //  session_start();
     $_SESSION['session_name']=$login;   
 /* Перенаправление браузера */
   header("Location: Dentistry.php");
    }
    } else {
    //  $message = "Invalid username or password!";
    
    echo  "Неправильный логин и пароль!";
 }
    } else {
    $message = "Не заполнены все поля!";
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
        <a href="/Authorization.php">
        <img src="/assets/images/lk.png" width="50" height="50px"/>
        </a>
    </div>                                                        
</header>
    <main>
    <div class="container">
        <div class="authorization">
        <img src="assets/images/user.png">
        <h6>Вход в личный кабинет</h6>
            <form action="" method="POST">
                <div class="form-input">
                    <input type="text" name="login" placeholder="Логин">
                    <input type="password" name="password" placeholder="Пароль">
                    <br/>
                    <input class="form-submit" type="submit" name="sub" value="Войти">
                </div>
                <span class="tooltip" data-tooltip="Для получения доступа к личному кабинету или восстановления пароля обратитесь на регистратуру">i</span>
            </form>
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
