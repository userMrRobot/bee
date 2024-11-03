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

            <?php if(!empty($_SESSION['eror_med'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?= getRecordInSession('eror_med')?>

                    <?php delMess('eror_med'); ?>
                </div>
            <?php endif; ?>

            <?php if(!empty($_SESSION['erorDayCredit'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?= getRecordInSession('erorDayCredit')?>

                    <?php delMess('erorDayCredit'); ?>
                </div>
            <?php endif; ?>

            <div class="main-header pay-header">
                <h3>Обмен внутри-игровой валюты</h3>
                <p>обмен меда на серебро в одностороннем порядке</p>
            </div>
            
            <div class="row">
                <div class="col-lg-6 offset-lg-1 col-sm-12">
                    <div class="info">
                        <div class="info-1">
                            
                            <p>Количество меда:  <strong><?= getRecordInSession('userInfo')['medAll']?> кг</strong> </p>
                            <p>Количество серебра:  <strong><?= getRecordInSession('userInfo')['silver']?></strong> </p>
                            
                        </div>
                    </div>
                    <form action="sell" method="post">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Введите кол-во меда на обмен: </label>
                          <input type="number" name="medObmen" class="form-control" id="exampleInputEmail1"
                                 placeholder="Не более <?= getRecordInSession('userInfo')['medAll']?>" aria-describedby="emailHelp">
                          
                        </div>
                        <button type="submit" class="btn btn-success">Обменять</button>
                      </form>
                      <div id="emailHelp" class="form-text">! КУРС  10 кг меда =  1 серебро</div>
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