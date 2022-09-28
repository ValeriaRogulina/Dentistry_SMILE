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
        <div class="registration">
        <img src="assets/images/adduser.png">
        <h6>Регистрация</h6>
            <form action="signup.php" method="POST">
                <div class="form-input">
                    <input type="text" name="surname" placeholder="Фамилия">
                    <input type="text" name="name" placeholder="Имя">
                    <input type="text" name="patronymic" placeholder="Отчество">
                    <input type="text" name="login" placeholder="Логин">
                    <input type="password" name="password" placeholder="Пароль">
                    <br/>
                    <input class="form-submit" type="submit" name="submit" value="Зарегистрироваться">
                </div>
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