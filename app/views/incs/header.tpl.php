<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">



    <title><?=$title ?? 'Главная'?></title>
    <link rel=”icon” href=”/img/pchela.ico” >
</head>
<body >
<!-- header -->
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="/img/icons8.png" width="30px" height="30px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="font-size: 17px;" aria-current="page" href="/infa">О сайте</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 17px;" href="/rules">Правила</a>
                    </li>
                    <?php if(isset($_SESSION['user']) and $_SESSION['user']['role']==='admin'):?>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 17px;" href="/admin">Админ Панель</a>
                        </li>
                    <?php endif;?>
                </ul>
                <?php if(isset($_SESSION['user'])):?>
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown me">
                        <a class="nav-link active" style="font-size: 17px;" aria-current="page" href="/"><?=$_SESSION['user']['nikname']?></a>
                    </li>
                    <li class="nav-item dropdown me">
                        <a class="nav-link active" style="font-size: 17px;" aria-current="page" href="logout">Выйти</a>
                    </li>
                 </ul>
                <?php endif;?>

            </div>
        </div>
    </nav>
</header>
