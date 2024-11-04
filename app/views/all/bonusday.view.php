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
                <h3>Ежедневный бонус</h3>
                <p>жми на кнопку и получили бонус от 10 до 100 серебра</p>
                <?php if(!empty($_SESSION['dayBonusEror'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= getRecordInSession('dayBonusEror')?>
                        <?php delMess('dayBonusEror'); ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="row">
                <div class="col-lg-6 offset-lg-1 col-sm-12">
                    <div class="info">
                        <div class="info-1">
                            
                            <p>Последний бонус: (время)  <strong>3 часа</strong> </p>
                           
                            
                        </div>
                    </div>
                    <form action="" method="get">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"></label>
                          <input type="hidden" name="moneybonus" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          
                        </div>
                        <button type="submit" class="btn btn-success">Играть</button>
                      </form>
                      <div id="emailHelp" class="form-text">! Бонус - серебро от 10 до 100 каждый день</div>
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