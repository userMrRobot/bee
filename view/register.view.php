<?php


?>

<?php
session_start();
var_dump($_SESSION);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Регистрация</title>
</head>
<body >
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
                            <li><a class="dropdown-item" href="../view/register.view.php">Регистрация</a></li>
                            <li><a class="dropdown-item" href="../index.php">Войти</a></li>

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
            <!-- секция с видео -->
            <div class="col-md-12">
                <div style="padding:10px; font-size:30px; text-align:center; color: #000306">
                    <img src="../img/pexels-chuanyu2015-209658-2231469.jpg" width="auto" height="500px" alt="">
                </div>
            </div>
            <!-- секция с формой статическая-->
            <div class="col-lg-3">
                <div class="left-bar">
                    <div class="form-osnova">
                        <div class="header-form"><h4 style="color: #000306;">Вход в акаунт</h4></div>

                        <form action="../forma.php" method="post" class="forma-osn">
                            <div class="form-group">
                                <label class="label-form" for="exampleInputEmail1">Введите логин</label>
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                            </div>
                            <div class="form-group">
                                <label class="label-form" for="exampleInputPassword1">Введите пароль</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="button-link">
                                <button type="submit" class="btn btn-success btn-reg">Войти</button>
                                <a type="submit" href="../register.php" class="btn btn-success btn-a btn-reg">Регестрируй</a>
                            </div>
                            <div class="reg">
                                <p>нет акаунта?скорее </p>
                            </div>
                        </form>
                    </div>
                    <div class="stata">
                        <div class="header-form"><h4 style="color: #000306;">Статистика</h4></div>
                        <div class="side-bar-stata">
                            <div class="side-bar-text">
                                Всего участников:
                            </div>
                            <div class="side-bar-stata">
                                2144389
                            </div>
                        </div>
                        <div class="side-bar-stata">
                            <div class="side-bar-text">
                                Новых за 24 часа:
                            </div>
                            <div class="side-bar-stata">
                                389
                            </div>
                        </div>
                        <div class="side-bar-stata">
                            <div class="side-bar-text">
                                Выплачено всего:
                            </div>
                            <div class="side-bar-stata">
                                5000
                            </div>
                        </div>
                        <div class="side-bar-stata">
                            <div class="side-bar-text">
                                Резерв проекта:

                            </div>
                            <div class="side-bar-stata">
                                5000
                            </div>
                        </div>
                        <div class="side-bar-stata">
                            <div class="side-bar-text">
                                Проекту пошел:
                            </div>
                            <div class="side-bar-stata">
                                3984 - й день
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- главная секция изменяемая-->

            <div class="col-lg-9">
                <div class="main-header">
                    <h1>построй свой улей играя</h1>
                </div>
                <div class="col-lg-4 offset-lg-4">
                    <div class="form-register">
                        <div class="header-form"><h4 style="color: #000306;">Регистрация нового пользователя</h4></div>
                        <!--                Уведомление-->
                        <?php if(!empty($_SESSION['warn']) and $_SESSION['warn'] == 'danger'): ?>
                        <div class="alert alert-<?php echo $_SESSION['warn']?> " role="alert">
                            Этот логин уже занят
                            <?php unset($_SESSION['warn']) ?>
                        </div>
                        <?php elseif (!empty($_SESSION['warn']) and $_SESSION['warn'] == 'warning'): ?>
                            <div class="alert alert-<?php echo $_SESSION['warn']?> " role="alert">
                                Другая ошибка
                                <?php unset($_SESSION['warn']) ?>
                            </div>
                        <?php endif; ?>
                        <form action="../register.php" method="post" class="forma-osn">
                            <div class="form-group">
                                <label class="label-form" for="exampleInputEmail1">Введите логин</label>
                                <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                            </div>
                            <div class="form-group">
                                <label class="label-form" for="exampleInputPassword1">Введите пароль</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label class="label-form" for="exampleInputEmail1">Введите НикНейм</label>
                                <input type="text" name="nameNik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                            </div>
                            <div class="button-link button-reg">
                                <button type="submit" class="btn btn-success btn-reg">Зарегестрировать акаунт</button>

                            </div>

                        </form>
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
