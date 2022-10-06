<?php
if(!empty($_POST['login'])) {
    if(!empty($_POST['password'])){
        if($_POST['password'] != $_POST['password_repeat']){
            echo 'Пароли не совпали';
        }
        else {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $patronymic = $_POST['patronymic'];
            $email = $_POST['email'];
            $link = mysqli_connect("localhost", "root", "root", "flowers");
            $query = "INSERT INTO users1 SET login='$login', password='$password', name='$name', surname='$surname', patronymic='$patronymic', email='$email', role='client'";
            mysqli_query($link, $query);
            $_SESSION['auth'] = true;

            if($_SESSION['auth'] = true){
                echo 'Вы зарегистрировались';
            } 
        }
    }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Регистрация</title>
</head>
<body>
    <header>
        <!-- Логотип и девиз компании-->
        <div class="top">
            <div class="row">
                <img src="logo/logo.png" alt="">
                <a href="index.php">
                    <h1>Мир цветов</h1>
                </a>
            </div>
            <h2>Цветам всегда рады!</h2>
        </div>
        <!-- Меню сайта-->
        <div class="content">
        <ul>
                <li><a href="index.php">О нас</a></li>
                <li><a href="catalog.php">Каталог</a></li>
                <li><a href="admin.php">Заказы</a></li>
                <li><a href="cart.php">Корзина</a></li>
                <li><a href="where.php">Где нас найти?</a></li>
                <li><a href="index.php">Выход</a></li>
                <li><a href="login.php#login"><button>Вход</button></a></li>
                <li><a href="register.php#register"><button>Регистрация</button></a></li>
            </ul>
        </div>
    </header>
    <!-- Главный контент страницы-->
    <main>
        <div class="content">
            <!-- Заголовок -->
            <div class="head">Регистрация</div>
            <!-- Форма регистрации-->
            <form action="" method="POST" id="register">
                <input name="name" type="text" placeholder="Введите имя">
                <input name="surname" type="text" placeholder="Введите фамилию">
                <input name="patronymic" type="text" placeholder="Введите отчество">
                <input name="login" type="text" placeholder="Придумайте логин">
                <input name="email" type="email" placeholder="Введите Эл. почту">
                <input name="password" type="password" placeholder="Придумайте пароль">
                <input name="password_repeat" type="password" placeholder="Повторите пароль">
                <p><input name="rules" type="checkbox" style="max-width: 20px; max-height:20px;"> Вы согласны с правилами регистрации?</p>
                <button style="max-width: 100%;"> Зарегистрироваться</button>
            </form>
        </div>
    </main>
</body>
</html>