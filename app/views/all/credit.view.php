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
                <h3>Кредит для игры</h3>
                <p>возьми серебро в кредит и уже сейчас покупай своих первых пчел</p>
            </div>
            
            <div class="row">
                <div class="col-lg-6 offset-lg-1 col-sm-12">
                    <div class="info">
<?php if(!empty($_SESSION['kredit-eror'])): ?>
    <div class="alert alert-danger" role="alert">
    <?= getRecordInSession('kredit-eror') ?>
    <?php delMess('kredit-eror'); ?>
    </div>
<?php endif; ?>
                        <div class="info-1">
                            
                            <p>Текущий полученный кредит:  <strong><?php echo getRecordInSession('userInfo')['credit_silver'] ?? '0'?> руб.</strong> </p>
                            <p>К выплате кредита:  <strong><?php echo getRecordInSession('userInfo')['credit_silver_all'] ?? '0'?> руб.</strong> </p>

                        <?php if(!empty($_SESSION['userInfo']['credit_silver'])):?>
                            <p>Дата получения кредита:  <strong><?php echo getRecordInSession('inforeg')['data_reg_credit'] ?? '0'?></strong> </p>
                            <p>Дней до погашения кредита:  <strong><?php echo 7 - getRecordInSession('inforeg')['day_for_credit'] ?? '0'?></strong> </p>
                        <?php endif;?>

                            
                        </div>
                    </div>
                    <form action="/credit" method="post">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Введите кол-во серебра в кредит: <br> от 0 до 10 000 </label>
                          <input type="number" name="moneyObmen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          
                        </div>
                        <button type="submit" class="btn btn-success">Обменять</button>
                      </form>
                      <div id="emailHelp" class="form-text">! Кредит на 7 дней. возврат 110 % от суммы</div>
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