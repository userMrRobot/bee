<?php
session_start();
require 'function.php';
var_dump($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Личный кабинет</title>
</head>
<body data-vide-bg="video\6872489-hd_1920_1080_25fps.mp4 ">
<!-- header -->
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Логотип</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">О сайте</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Правила</a>
                    </li>
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown me">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Меню
                        </a>

                        <ul class="dropdown-menu">
                            <!-- здесь нужно условие рнр -->
                            <li><a class="dropdown-item"  href="logout.php">Выйти из акаунта</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>


<!-- main -->
<main>
    <div class="container">


        <div class="row">

            <!-- секция с формой статическая-->
            <div class="col-lg-4">
                <div class="left-bar">

                    <div class="navigation">
                        <div class="header-form"><h4 style="color: #000306;">Никнейм игрока</h4></div>

                        <div class="side-bar-navigation">
                            <a class="left-info btn btn-success2" href="lk.php">Профиль</a>
                        </div>
                        <div class="side-bar-navigation">
                            <a class="left-info btn btn-success2" href="config.html">Настройки</a>
                        </div>
                        <div class="side-bar-navigation">
                            <a class="left-info btn btn-success2" href="logout.php">Выход</a>
                        </div>
                        <div class="side-bar-navigation">
                            <a class="left-info btn btn-success2" href="#">Для покупок 1000</a>

                        </div>
                        <div class="side-bar-navigation">
                            <a class="left-info btn btn-success2" href="vivod.html">Для вывода 5000</a>

                        </div>
                        <div class="side-bar-navigation">
                            <a class="left-info btn btn-success2" href="#">Обменник</a>
                        </div>
                    </div>
                    <div class="navigation">


                        <div class="side-bar-navigation">
                            <a class="left-info btn btn-success2" href="shop.html">Купить пчел</a>
                        </div>
                        <div class="side-bar-navigation">
                            <a class="left-info btn btn-success2" href="#">Пасека</a>
                        </div>
                        <div class="side-bar-navigation">
                            <a class="left-info btn btn-success2" href="#">Продажа меда</a>
                        </div>
                        <div class="side-bar-navigation">
                            <a class="left-info btn btn-success2" href="#">Пополнить баланс</a>

                        </div>
                        <div class="side-bar-navigation">
                            <a class="left-info btn btn-success2" href="#">Играть в кредит</a>

                        </div>
                    </div>
                    <div class="navigation">


                        <div class="side-bar-navigation">
                            <a class="left-info btn btn-success2" href="#">Дневной бонус</a>
                        </div>
                        <div class="side-bar-navigation">
                            <a class="left-info btn btn-success2" href="#">Недельный бонус</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- главная секция изменяемая-->

            <div class="col-lg-8">
                <div class="main-header">
                    <h3>Профиль</h3>
                </div>
                <div class="cart-info">
                    <div class="col-lg-5 cart-if">
                        <div class="cart-info-text">
                            <p>Псевдоним</p>
                            <p>marikkomarik78</p>
                        </div>
                        <div class="cart-info-text">
                            <p>Дата рег.</p>
                            <p>07.09.2024</p>
                        </div>
                        <div class="cart-info-text">
                            <p>Куплено пчел</p>
                            <p>50</p>
                        </div>
                    </div>
                    <div class="col-lg-5 cart-if">
                        <div class="cart-info-text">
                            <p>Для покупок</p>
                            <p>25 серебра</p>
                        </div>
                        <div class="cart-info-text">
                            <p>Для вывода</p>
                            <p>25 серебра</p>
                        </div>
                        <div class="cart-info-text">
                            <p>Пополнено на </p>
                            <p>250 руб</p>
                        </div>
                    </div>
                </div>
                <div class="main-header">
                    <h3>Ваши пчелы</h3>
                </div>
                <div class="carts-bdj">
                    <div class="cart-bdj">
                        <div class="cart-bdj-img">
                            <img src="img/cart1.png" alt="пчела-рабочая">
                        </div>
                        <div class="cart-bdj-p">
                            <p>пчела-рабочая </p>
                            <p>9шт</p>
                        </div>

                    </div>


                    <div class="cart-bdj">
                        <div class="cart-bdj-img">
                            <img src="img/cart1.png" alt="пчела трутень">
                        </div>
                        <div class="cart-bdj-p">
                            <p>пчела трутень</p>
                            <p> 0 шт</p>
                        </div>

                    </div>




                    <div class="cart-bdj">
                        <div class="cart-bdj-img">
                            <img src="img/cart1.png" alt="матка">
                        </div>
                        <div class="cart-bdj-p">
                            <p>пчела матка</p>
                            <p> 0 шт</p>
                        </div>
                    </div>

                </div>



            </div>

        </div>
    </div>
</main>

<!-- footer -->
<footer>



</footer>

<script src="http://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="http://atuin.ru/demo/vide/jquery.vide.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>