
<?php
session_start();
var_dump($_SESSION);
//require '../function.php';
//require '../config/config.php';

require INCS . '/header.tpl.php';

?>




<!-- main -->
<main>
    <div class="container">


        <div class="row">
            <!-- секция с видео -->
            <?php require INCS . '/fon.tpl.php'; ?>
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
                <div class="col-lg-4 offset-lg-4">
                    <div class="form-register">
                        <div class="header-form"><h4 style="color: #000306;">Регистрация нового пользователя</h4></div>


<!--                Сообщение о логровании-->

                        <?php if(!empty($_SESSION['login_eror'])): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= getRecordInSession('login_eror')?>
                                <?php delMess('login_eror'); ?>
                            </div>
                        <?php endif; ?>
<!-- Сообщение Логин занят-->
                        <?php if(!empty($_SESSION['login_busy'])): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= getRecordInSession('login_busy')?>
                            <?php delMess('login_busy'); ?>
                        </div>
                        <?php endif; ?>
<!-- Сообщение Ошибка регистрации-->
                        <?php if (!empty($_SESSION['register_eror'])): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo getRecordInSession('register_eror')?>
                                <?php delMess('register_eror'); ?>
                            </div>
                        <?php endif; ?>

<!-- Сообщение Ошибка Валидации данных-->
                        <?php if (!empty($_SESSION['login_eror_validate'])): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo getRecordInSession('login_eror_validate')?>
                                <?php delMess('login_eror_validate'); ?>
                            </div>
                        <?php endif; ?>

                        <form action="/register" method="post" class="forma-osn">
                            <div class="form-group">
                                <label class="label-form" for="exampleInputEmail1">Введите логин</label>
                                <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                            </div>
                            <div class="form-group">
                                <label class="label-form" for="exampleInputPassword1">Введите пароль</label>
                                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
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

<?php
//footer
require INCS .  '/footer.tpl.php';
?>
