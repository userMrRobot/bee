<?php

//use classes\TimeGame;
//
//$timeGame = new TimeGame();
//$med_all = $timeGame->lastUpdate()->getMedAll();



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
        <div class="main-header">
            <h3>Пасека - показ пчел</h3>
        </div>
        <div class="cart-info">
            <div class="col-lg-5 cart-if">
                <div class="cart-info-text">
                    <p>Псевдоним</p>

                    <p><?= getRecordInSession('user')['nikname']?></p>
                </div>
                
                <div class="cart-info-text">
                    <p>Куплено пчел</p>
                    <p><?php $bee =  getRecordInSession('userInfo')['bee1'] + getRecordInSession('userInfo')['bee2']+ getRecordInSession('userInfo')['bee3'];
                        echo $bee?></p>
                </div>
            </div>
            <div class="col-lg-5 cart-if">
                <div class="cart-info-text">
                    <p>Для покупок</p>
                    <p>СЕРЕБРА: <?= getRecordInSession('userInfo')['silver']?></p>
                </div>
                <div class="cart-info-text">
                    <p>Кол-во на складе</p>

                    <p>МЕДА: <?= getRecordInSession('userInfo')['medAll']?></p>
                </div>
                
            </div>
        </div>
        <div class="main-header">
            <h3 style="margin-bottom: 30px;">Ваши пчелы</h3>
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