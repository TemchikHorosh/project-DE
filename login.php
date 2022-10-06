<?php

if(!empty($_POST['login']) and !empty($_POST['password'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $link = mysqli_connect("localhost", "root", "root", "flowers");
    $query = "SELECT * From users1 WHERE login='$login' AND password='$password' AND role='admin'";
    $result = mysqli_query($link, $query);
    $admin = mysqli_fetch_assoc($result);
    $query2 = "SELECT * From users1 WHERE login='$login' AND password='$password' AND role='client'";
    $result2 = mysqli_query($link, $query2);
    $client = mysqli_fetch_assoc($result2);

    if(!empty($admin)){
        $_SESSION['auth'] = true;
        echo 'Вы авторизовались как ' .$admin['role'];
    }
    elseif(!empty($client)){
        $_SESSION['auth'] = true;
        echo 'Вы авторизовались как ' .$client['role'];
    }
    else {
        echo 'Неверные данные ';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Авторизация</title>
</head>
<body>
    <header>
        <!-- Логотип и девиз кмопании-->
        <div class="top">
            <div class="row">
                <img src="logo/logo.png" alt="">
                <a href="index.php">
                    <h1>Мир цветов</h1>
                </a>
            </div>
            <h2>Цветам всегда рады!</h2>
        </div>
        <!--Меню сайта -->
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
            <div class="head">Авторизация</div>
            <!-- Форма авторизации -->
            <form  action="" method="POST" id="login">
                <input name="login" type="text" placeholder="Введите логин">
                <input name="password" type="password" placeholder="Введите пароль">
                <button style="max-width: 100%;">Авторизоваться</button>
            </form>

        </div>
    </main>

</body>
</html>