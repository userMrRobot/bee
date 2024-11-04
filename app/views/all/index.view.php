<?php

session_start();
require INCS . '/header.tpl.php';

//dump($_SESSION);

?>
    <!-- main -->
<main>
    <div class="container">


        <div class="row">
            <!-- секция с видео -->
           <?php require INCS . '/fon.tpl.php'; ?>
            <?php // незабудь убрать из главной страницы?>
<!--     сообщение об успешной регистрации           -->
                            <?php if(!empty($_SESSION['register_done'])): ?>
                                <div class="alert alert-success" role="alert">
                                    <?= getRecordInSession('register_done')?>
                                    <?php delMess('register_done');?>
                                </div>
                            <?php endif; ?>
<!--  сообщение неизвестная Ошибка Логирования              -->
                            <?php if(!empty($_SESSION['avtor-danger'])): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= getRecordInSession('avtor-danger');?>
                                    <?php delMess('avtor-danger');?>
                                </div>
                            <?php endif; ?>
<!--     Ошибка логин/пароль           -->
                            <?php if(!empty($_SESSION['danger-login'])): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= getRecordInSession('danger-login');?>
                                    <?php delMess('danger-login');?>
                                </div>
                            <?php endif; ?>
<!--                -->


            <!-- секция с формой статическая-->
            <div class="col-lg-3">
                <div class="left-bar">
                    <div class="form-osnova">
                        <div class="header-form"><h4 style="color: #000306;">Вход в акаунт</h4></div>

                        <form action="/login" method="POST" class="forma-osn">
                            <div class="form-group">
                                <label class="label-form" for="exampleInputEmail1">Введите логин</label>
                                <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                            </div>
                            <div class="form-group">
                                <label class="label-form" for="exampleInputPassword1">Введите пароль</label>
                                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="button-link">
                                <button type="submit" class="btn btn-success btn-reg">Войти</button>
                                <a type="submit" href="/register" class="btn btn-success btn-a btn-reg">Регестрируй</a>
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

                <div class="carts">
                    <div class="row">
                        <div class="  col-md-4 col-xs-12 cart">
                            <div class="cart-img">
                                <img src="img\bdla2.png"  alt="купи пчел">

                            </div>
                            <div class="cart-p"><p>Купите пчел они будут <br> собирать вам пыльцу</p></div>


                        </div>
                        <div class="col-md-4 col-xs-12 cart">
                            <div class="cart-img">
                                <img src="img\bjolamed.png"  alt="купи пчел">

                            </div>
                            <div class="cart-p"><p>Пыльца со временем <br>станет медом</p></div>


                        </div>
                        <div class="col-md-4 col-xs-12 cart">
                            <div class="cart-img">
                                <img class="img3" src="img\money.png"  alt="купи пчел">

                            </div>
                            <div class="cart-p"><p>Обменивайте мед на серебро <br> и покупайте новых пчел</p></div>


                        </div>
                    </div>
                </div>
                <div class="main-footer">
                    <h2 class="main-footer-h2">Начните прямо сейчас</h2>
                </div>
                <div class="main-footer-p-batton">
                    <div class="main-footer-p">
                        <p>Не жди завтрашнего дня,<br>
                            регистрируйся уже сегодня!</p>
                    </div>
                    <div class="main-footer-batton">
                        <a type="submit" href="/register" class="btn btn-success btn-a btn-reg">Создать акаунт</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<?php

//footer
require INCS .  '/footer.tpl.php';

?>