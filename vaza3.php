<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Цветок бабочка</title>
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
            <!-- Заголовок-->
            <div class="head">ваза</div>
            <!-- Картинка товара-->
            <div class="wrap" style="display:flex; justify-content: space-evenly;">
                <div class="col" style="border:none">
                    <img src="images/vaza3.jpg" alt="">
                </div>
                <!-- Характеристики товара -->
                <div class="col">
                    <h2>Характеристики:</h2>
                    <p>Страна: <b>Россия</b></p>
                    <p>Вид: <b>Ваза</b></p>
                    <p>Цвет: <b>Не прозрачный</b></p>
                    <hr>
                    <div class="row">
                        <p>Цена: </p>
                        <p>400 руб.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>