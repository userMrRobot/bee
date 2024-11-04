<?php

session_start();
require INCS . '/header.tpl.php';

dump($_SESSION);

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
                <h3 class="mt-3">Название проекта: «Пчелиная империя»</h3>
                <h4>Описание сайта: </h4>
                <p>«Пчелиная империя» — это мини-игра, созданная для образовательных целей, в которой пользователи могут погрузиться в виртуальный мир пчеловодства. Игрокам предлагается покупать виртуальных пчёл, собирать мёд и обменивать его на внутриигровую валюту
                </p>
                <h4> Цели проекта: </h4>
                <p> Сайт создан в учебных целях и предназначен для демонстрации навыков веб-разработки и программирования. Он не несёт ответственности и не предполагает никаких реальных денежных операций.
                </p>


            </div>

        </div>
    </div>
</main>

<?php

//footer
require INCS .  '/footer.tpl.php';

?>
