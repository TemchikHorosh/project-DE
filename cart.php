<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Корзина</title>
</head>
<body>
    <header>
        <!--Логотип и девиз компании-->
        <div class="top">
            <div class="row">
                <img src="logo/logo.png" alt="">
                <a href="index.php">
                    <h1>Мир цветов</h1>
                </a>
            </div>
            <h2>Цветам всегда рады!</h2>
        </div>
        <!--Меню сайта-->
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
    <!--Главный контент страницы-->
    <main>
        <div class="content">
            <!--Заголовок-->
            <div class="head">Ваши корзина</div>
            <!--Корзина с добавлением или убыванием количества товаров-->
            <div class="row">
                <!--Карточка с красными цветами-->
                <div class="col">
                    <img src="images/cvety1.jpg" alt="">
                    <div class="row">
                        <h3>Красные цветы</h3>
                        <p>Цена: 500 руб.</p>
                    </div>
                    <div class="row">
                        <p><a href="#" class="text-small">Удалить</a></p>
                        <p>1</p>
                        <p><a href="#" class="text-small">Добавить</a></p>
                    </div>
                </div>
                <!--Карточка с вазой-->
                <div class="col">
                    <img src="images/vaza1.jpg" alt="">
                    <div class="row">
                        <h3>Стеклянная ваза</h3>
                        <p>Цена: 220 руб.</p>
                    </div>
                    <div class="row">
                        <p><a href="#" class="text-small">Удалить</a></p>
                        <p>1</p>
                        <p><a href="#" class="text-small">Добавить</a></p>
                    </div>
                </div>
                <!--Карточка с корзинкой-->
                <div class="col">
                    <img src="images/corzina1.jpg" alt="">
                    <div class="row">
                        <h3>Корзинка</h3>
                        <p>Цена: 220 руб.</p>
                    </div>
                    <div class="row">
                        <p><a href="#" class="text-small">Удалить</a></p>
                        <p>1</p>
                        <p><a href="#" class="text-small">Добавить</a></p>
                    </div>
                </div>
            </div>

            <!--Карточка с заказом-->
            <div class="head">Ваш заказ</div>
                <div class="wrap">
                    <div class="row">
                        <h2>Заказ 35422</h2>
                        <p class="text-right"><a href="" class="text-small">Удалить заказ</a></p>
                    </div>
                    <div class="row">
                        <p>Количество товаров: </p>
                        <p><b>3</b></p>
                    </div>
                    <hr>
                    <div class="row">
                        <p>Сумма заказа: </p>
                        <p>960 руб.</p>
                    </div>
                    <form action="" method="POST" style="max-width: 100%;">
                        <input type="password" placeholder="Введите пароль">
                        <button style="max-width:100%;">Оформить заказ</button>
                    </form>
                </div>
        </div>
    </main>
</body>
</html>