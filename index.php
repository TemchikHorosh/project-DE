<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlowerSales</title>
    <link rel="stylesheet" href="assets/style.css">
    <script>
        //Переменные
        let timer, n ;

        //Запуск слайдера после загрузки страницы
        window.onload = () => slider((n = 0));

        //Функция запуска слайдера
        function slider() {

            //Ширина элементов для переключения
            let width = document.querySelector("#slider .slide").offsetWidth + 20;

            //Количество элементов для переключения
            let count = document.querySelectorAll("#slider .slide").length;
            count = 3;

            //Проверка на текущий элемент
            if (n >= count) n = 0;
            else if (n < 0) n = count - 1;
            
            //Смещение блока
            document.querySelector("#slider .slides").style.left = `-${
                width * n
            }px`;

            //Очистка таймера
            clearTimeout(timer);

            timer = setTimeout(() => slider(++n), 3000);
        }

    </script>

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

        <!--меню сайта-->
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
            <!--Заголовок -->
            <div class="head">Слайдер</div>
            <!--Слайдер-->
            <div id="slider">
                <div class="slides">
                    <div class="slide col">
                        <img src="images/cvety1.jpg" alt="">
                        <h2>Красные цветы</h2>
                    </div>
                    <div class="slide col">
                        <img src="images/cvetok-babochka2.jpg" alt="">
                        <h2>Цветок бабочка</h2>
                    </div>
                    <div class="slide col">
                        <img src="images/vaza1.jpg" alt="">
                        <h2>Стеклянная ваза</h2>
                    </div>
                    <div class="slide col">
                        <img src="images/vaza2.jpg" alt="">
                        <h2>Стеклянная ваза</h2>
                    </div>
                    <div class="slide col">
                        <img src="images/wallpaper1.jpg" alt="">
                        <h2>Обои на стену</h2>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>