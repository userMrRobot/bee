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

        <div class="col-xs-4   col-sm-6 col-md-7 col-lg-8">
            <div class="main-header pay-header">
                <h3>Обмен внутри-игровой валюты</h3>
                <p>обмен серебра на золото в одностороннем порядке</p>
            </div>
            
            <div class="row">
                <div class="col-lg-6 offset-lg-1 col-sm-12">
                    <div class="info">
                        <div class="info-1">
                            
                            <p>Количество серебра:  <strong> <?= getRecordInSession('userInfo')['silver']?> </strong> </p>
                            <p>Количество золота:  <strong> <?= getRecordInSession('userInfo')['gold']?> </strong> </p>
                            <p>Максимальное количество золота на покупку:  <strong> <?= getRecordInSession('userInfo')['gold_max']?> </strong> </p>

                        </div>
                    </div>
                    <form action="" method="post">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Введите кол-во золота,которое покупаем: </label>
                          <input type="number" name="moneyObmen" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="<?php ?>">
                          
                        </div>
                        <button type="submit" class="btn btn-success">Обменять</button>
                      </form>
                      <div id="emailHelp" class="form-text">! КУРС  1000 серебра =  1 золото</div>
                </div>       
            </div>
    
            
            
            
           
            
    
            
        </div>
        
    </div>

    </div>
</div>
</main>

    <!-- footer -->
<?php
require INCS .  '/footer.tpl.php';
?>