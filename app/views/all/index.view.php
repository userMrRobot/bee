<?php

session_start();
require TPL . '/header.tpl.php';


?>
    <!-- main -->
<main>
    <div class="container">


        <div class="row">
            <!-- секция с видео -->
            <div class="col-12 osnov_img">
                <div >
                    <div style="padding:50px 10px; font-size:30px; text-align:center; color: #000306">
                        <img src="img/pexels-chuanyu2015-209658-2231469.jpg" width="auto" height="500px" alt="">
                    </div>
                </div>
            </div>
            <?php if(!empty($_SESSION['warn']) and $_SESSION['warn'] == 'success'): ?>
                <div class="alert alert-<?php echo $_SESSION['warn']?> " role="alert">
                    Регистрация прошла успешно
                    <?php unset($_SESSION['warn']); ?>
                </div>
            <?php endif; ?>
            <!-- секция с формой статическая-->
            <div class="col-lg-3">
                <div class="left-bar">
                    <div class="form-osnova">
                        <div class="header-form"><h4 style="color: #000306;">Вход в акаунт</h4></div>

                        <form action="/app/controllers/login.php" method="post" class="forma-osn">
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
                                <a type="submit" href="register.view.php" class="btn btn-success btn-a btn-reg">Регестрируй</a>
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
                        <div class="  col-md-4 col-sm-12 cart">
                            <div class="cart-img">
                                <img src="img\bdla2.png"  alt="купи пчел">

                            </div>
                            <div class="cart-p"><p>Купите пчел они будут <br> собирать вам пыльцу</p></div>


                        </div>
                        <div class="col-md-4 col-sm-12 cart">
                            <div class="cart-img">
                                <img src="img\bjolamed.png"  alt="купи пчел">

                            </div>
                            <div class="cart-p"><p>Пыльца со временем <br>станет медом</p></div>


                        </div>
                        <div class="col-md-4 col-sm-12 cart">
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
                        <a type="submit" href="register.view.php" class="btn btn-success btn-a btn-reg">Создать акаунт</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<?php

//footer
require TPL .  '/footer.tpl.php';

?>