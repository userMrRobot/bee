<?php

?>

<div class="col-lg-4">
    <div class="left-bar">

        <div class="navigation">
            <div class="header-form"><h4 style="color: #000306;"><?= $_SESSION['user']['nikname']?></h4></div>

            <div class="side-bar-navigation">
                <a class="left-info btn btn-success2" href="/lk">Профиль</a>
            </div>
            <div class="side-bar-navigation">
                <a class="left-info btn btn-success2" href="/setings">Настройки</a>
            </div>
            <div class="side-bar-navigation">
                <a class="left-info btn btn-success2" href="/logout">Выход</a>
            </div>
            <div class="side-bar-navigation">

                <a class="left-info btn btn-success2" href="/shop">Для покупок <span style="color: green;">
                              <?= getRecordInSession("userInfo")['silver'] ?></span></a>

            </div>
            <div class="side-bar-navigation">
                <a class="left-info btn btn-success2" href="/vivod">Для вывода <span style="color: green;">
                    <?= getRecordInSession("userInfo")['gold'] ?></span></a>

            </div>
            <div class="side-bar-navigation">
                <a class="left-info btn btn-success2" href="/obmen">Обменник</a>
            </div>
        </div>
        <div class="navigation">


            <div class="side-bar-navigation">
                <a class="left-info btn btn-success2" href="/shop">Купить пчел</a>
            </div>
            <div class="side-bar-navigation">
                <a class="left-info btn btn-success2" href="/ambar">Пасека</a>
            </div>
            <div class="side-bar-navigation">
                <a class="left-info btn btn-success2" href="/sell">Продажа меда</a>
            </div>
            <div class="side-bar-navigation">
                <a class="left-info btn btn-success2" href="/pay">Пополнить баланс</a>

            </div>
            <div class="side-bar-navigation">
                <a class="left-info btn btn-success2" href="/credit">Играть в кредит</a>

            </div>
        </div>
        <div class="navigation">


            <div class="side-bar-navigation">
                <a class="left-info btn btn-success2" href="/daybonus">Дневной бонус</a>
            </div>

        </div>
    </div>
</div>
