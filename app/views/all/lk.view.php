<?php

require INCS . '/header.tpl.php';
?>





<!-- main -->
<main>
    <div class="container">


        <div class="row">
            <?php require INCS . '/fon.tpl.php'; ?>

            <!-- секция с формой статическая-->
            <?php require  INCS . '/leftBar.tpl.php';?>
            <!-- главная секция изменяемая-->

            <div class="col-lg-8">

<!--                -->
                <?php if(!empty($_SESSION['login_busy'])): ?>
                    <div class="alert alert-<?= getRecordInSession('warn')?> " role="alert">
                        Регистрация прошла успешно
                        <?php delMess('warn'); ?>
                    </div>
                <?php endif; ?>
<!--      сообщение об успешной авторизации           -->
                <?php if(!empty($_SESSION['avtor'])): ?>
                    <div class="alert alert-success" role="alert">
                        <?= getRecordInSession('avtor')?>
                        <?php delMess('avtor'); ?>
                    </div>
                <?php endif; ?>

<!--      сообщение об успешной продаже меда          -->
                <?php if(!empty($_SESSION['obmen_done'])): ?>
                    <div class="alert alert-success" role="alert">
                        <?= getRecordInSession('obmen_done')?>
                        <?php delMess('obmen_done'); ?>
                    </div>
                <?php endif; ?>
<!--      сообщение об успешном получении кредита         -->
                <?php if(!empty($_SESSION['kredit-success'])): ?>
                    <div class="alert alert-success" role="alert">
                        <?= getRecordInSession('kredit-success') ?>
                        <?php delMess('kredit-success'); ?>
                    </div>
                <?php endif; ?>




                <div class="main-header">
                    <h3>Профиль</h3>
                </div>
                <div class="cart-info">
                    <div class="col-lg-5 col-6 cart-if">
                        <div class="cart-info-text">
                            <p>Куплено пчел</p>
                            <p><?php $bee =  getRecordInSession('userInfo')['bee1'] + getRecordInSession('userInfo')['bee2']+
                                    getRecordInSession('userInfo')['bee3'];
                                    echo $bee?></p>
                        </div>
                        <div class="cart-info-text">
                            <p>Производство меда </p>
                            <p><?= getRecordInSession('userInfo')['med']?>кг / час</p>
                        </div>
                        <div class="cart-info-text">
                            <p>Получено меда всего  </p>
                            <p><?= getRecordInSession('userInfo')['medAll']?> кг</p>
                        </div>
                        <div class="cart-info-text">
                            <p>Для покупок</p>
                            <p><?= getRecordInSession('userInfo')['silver']?> серебра</p>
                        </div>
                        <div class="cart-info-text">
                            <p>Для покупок</p>
                            <p><?= getRecordInSession('userInfo')['gold']?> Золота</p>
                        </div>

                    </div>
                    <div class="col-lg-5 col-6 cart-if">
                        <div class="cart-info-text">
                            <p>Размер кредита </p>
                            <p><?php echo getRecordInSession('userInfo')['credit_silver'] ?? '0'?> серебра</p>
                        </div>
                        <div class="cart-info-text">
                            <p>Сумма выплаты </p>
                            <p><?php echo getRecordInSession('userInfo')['credit_silver_all'] ?? '0'?> серебра</p>
                        </div>
                        <div class="cart-info-text">
                            <p>Кредит получен </p>
                            <p><?php echo getRecordInSession('inforeg')['data_reg_credit'] ?? '0'?> </p>
                        </div>
                        <div class="cart-info-text">
                            <p>До выплаты кредита  </p>
                            <p><?php echo 7 - getRecordInSession('inforeg')['day_for_credit'] ?? '0'?> дней </p>
                        </div>
                    </div>
                </div>
                <div class="main-header">
                    <h3>Ваши пчелы</h3>
                </div>


                <div class="row">
                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="card mb-3" style="width: 12rem;text-align: center;">
                            <img src="/img/cart1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">пчела-рабочая</h5>
                                <p class="card-text">Куплено:<span style="color: green;">
                              <?= getRecordInSession('userInfo')['bee1']?></span> шт</p>
                                <p class="card-text">приносит меда </br>1 кг/час</p>


                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="card mb-3" style="width: 12rem;text-align: center;">
                            <img src="/img/cart1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">пчела трутень</h5>
                                <p class="card-text">Куплено: <span style="color: green;">
                              <?= getRecordInSession('userInfo')['bee2']?></span> шт</p>
                                <p class="card-text">приносит меда </br> 10 кг/час</p>


                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="card mb-3" style="width: 12rem;text-align: center;">
                            <img src="/img/cart1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">пчела матка</h5>
                                <p class="card-text">Куплено:<span style="color: green;">
                              <?= getRecordInSession('userInfo')['bee3']?></span> шт</p>
                                <p class="card-text">приносит меда </br>50 кг/час</p>


                            </div>
                        </div>
                    </div>
                    <p>ОБЩИЙ объем производимого меда <span style="color: green;">
                    <?= getRecordInSession('userInfo')['med']?></span>  кг/час</p>
                </div>



            </div>

        </div>
    </div>
</main>

<!-- footer -->
<?php
require INCS .  '/footer.tpl.php';
?>
