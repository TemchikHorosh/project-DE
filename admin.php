<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Заказы</title>
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
            <!--Заголовок-->
            <div class="head">Категории</div>
            <!--Добавление/удаление категории-->
            <p style="max-width: 20%"><input type="text" placeholder="Название категории"> </p>
            <p style="max-width:20%"> <select name="" id="">
                <option value disabled selected>Выберите категорию</option>
                <option value="Цветок">Цветы</option>
                <option value="Горшок">Горшки</option>
                <option value="Ваза">Вазы</option>
            </select></p>
            <p style="max-width: 20%;"><button>Добавить</button></p>
            <p style="max-width: 20%;"><button>Удалить</button></p>

            <!--Заголовок-->
            <div class="head">Заказы</div>
            
            <!--Карточки заказов-->
            <div class="row">
                <!--Карточка заказа-->
                <div class="col">
                    <h2>Заказ 35422</h2>
                    <p class="text-left">Заказчик: <b>Котенев Дмитрий</b></p>
                    <p class="text-left">Статус заказа: новый</p>
                    <p class="text-left">Коилчество товаров: <b>3</b></p>
                    <button> Добавить заказ</button>
                    <h3>Отменить заказ</h3>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Причина отмены заказа"></textarea>
                    <button>Отменить заказ</button>
                    <p class="text-right"><a href="" class="text-small">Удалить заказ</a></p>
                </div>

                <!--Карточка заказа-->
                <div class="col">
                    <h2>Заказ 13245</h2>
                    <p class="text-left">Заказчик: <b>Иванов Иван</b></p>
                    <p class="text-left">Статус заказа: <b>Отменённый</b></p>
                    <p class="text-left">Количество товаров<b> 15</b></p>
                    <h3>Причина отклонения: </h3>
                    <p class="text-left"> Заказ товара который закончился на складе</p>
                </div>

                <!--Карточка заказа-->
                <div class="col">
                    <h2>Заказ 24134</h2>
                    <p class="text-left">Заказчик: <b>Петров Сергей</b></p>
                    <p class="text-left">Статус заказа: <b>Подтверждённый</b></p>
                    <p class="text-left">Количество товаров<b> 6</b></p>
                </div>

            </div>

            <!--Карточка заказа-->
            <div class="row">
                <div class="col">
                    <h2>Заказ 24134</h2>
                    <p class="text-left">Заказчик: <b>Парасухин Даниил</b></p>
                    <p class="text-left">Статус заказа: <b>Подтверждённый</b></p>
                    <p class="text-left">Количество товаров<b> 3</b></p>
                </div>

                <!--Карточка заказа-->
                <div class="col">
                    <h2>Заказ 35422</h2>
                    <p class="text-left">Заказчик: <b>Максим Васин</b></p>
                    <p class="text-left">Статус заказа: новый</p>
                    <p class="text-left">Коилчество товаров: <b>1</b></p>
                    <button> Добавить заказ</button>
                    <h3>Отменить заказ</h3>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Причина отмены заказа"></textarea>
                    <button>Отменить заказ</button>
                    <p class="text-right"><a href="" class="text-small">Удалить заказ</a></p>
                </div>
                <!--Карточка заказа-->
                <div class="col">
                    <h2>Заказ 13245</h2>
                    <p class="text-left">Заказчик: <b>Иванов Иван</b></p>
                    <p class="text-left">Статус заказа: <b>Отменённый</b></p>
                    <p class="text-left">Количество товаров<b> 15</b></p>
                    <h3>Причина отклонения: </h3>
                    <p class="text-left"> Много количества товаров в заказе</p>
                </div>
            </div>
            <!--Карточки заказов-->
            <div class="row">
                <!--Карточка заказа-->
                <div class="col">
                    <h2>Заказ 13245</h2>
                    <p class="text-left">Заказчик: <b>Сергеев Александр</b></p>
                    <p class="text-left">Статус заказа: <b>Отменённый</b></p>
                    <p class="text-left">Количество товаров<b> 20</b></p>
                    <h3>Причина отклонения: </h3>
                    <p class="text-left"> Много количества товаров в заказе, которые кончились на складе</p>
                </div>
                <!--Карточка заказа-->
                <div class="col">
                    <h2>Заказ 24134</h2>
                    <p class="text-left">Заказчик: <b>Александр Шилов</b></p>
                    <p class="text-left">Статус заказа: <b>Подтверждённый</b></p>
                    <p class="text-left">Количество товаров<b>2</b></p>
                </div>
                <!--Карточка заказа-->
                <div class="col">
                    <h2>Заказ 35422</h2>
                    <p class="text-left">Заказчик: <b>Кудрявцев Дмитирй</b></p>
                    <p class="text-left">Статус заказа: новый</p>
                    <p class="text-left">Коилчество товаров: <b>7</b></p>
                    <button> Добавить заказ</button>
                    <h3>Отменить заказ</h3>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Причина отмены заказа"></textarea>
                    <button>Отменить заказ</button>
                    <p class="text-right"><a href="" class="text-small">Удалить заказ</a></p>
                </div>
            </div>

        </div>



    </main>

</body>
</html>