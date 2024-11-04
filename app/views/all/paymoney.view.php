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
            <h3>Пополнение серебра</h3>
            <?php if(!empty($_SESSION['payEror'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?= getRecordInSession('payEror')?>
                    <?php delMess('payEror'); ?>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="row">
            <div class="col-lg-6 offset-lg-1 col-sm-12">
                <div class="info">
                    <div class="info-1">
                        <p>Количество золота:  <strong> <?= getRecordInSession('userInfo')['gold']?> </strong> </p>
                    </div>
                </div>
                <form action="/pay" method="get">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Введите сумму для пополнения</label>
                      <input type="number" name="moneyZachislen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      
                    </div>
                    <button type="submit" class="btn btn-success">Пополнить</button>
                  </form>
                  <div id="emailHelp" class="form-text">! КУРС 1 руб. = 10 золота</div>
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