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
        <div class="main-header">
            <h3>Настройки</h3>
        </div>

        <div class="col-lg-4 offset-lg-4">

            <!--      сообщение об успешном измененнии пароля           -->
            <?php if(!empty($_SESSION['setings_done'])): ?>
                <div class="alert alert-success" role="alert">
                    <?= getRecordInSession('setings_done')?>

                    <?php delMess('setings_done'); ?>
                </div>
            <?php endif; ?>

            <!--      сообщение об ошибке          -->
            <?php if(!empty($_SESSION['setings_eror'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?= getRecordInSession('setings_eror')?>

                    <?php delMess('setings_eror'); ?>
                </div>
            <?php endif; ?>

            <div class="form-register">
                <div class="header-form"><h4 style="color: #000306; margin-top: 30px;">Смена существующего пароля на новый</h4></div>
                
                <form action="#" method="post" class="forma-osn forma-cahnge-psw">
                    <div class="form-group">
                      <label class="label-form" for="exampleInputEmail1">Введите старый пароль</label>
                      <input type="password" name="pass1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    </div>
                    <div class="form-group">
                      <label class="label-form" for="exampleInputPassword1">Введите новый пароль</label>
                      <input type="password" name="pass2" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label class="label-form" for="exampleInputEmail1">Введите новый пароль повторно</label>
                        <input type="password" name="pass3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                      </div>
                    <div class="button-link button-reg">
                      <button type="submit" class="btn btn-success btn-reg btn-reg">Изменить пароль</button>
                      
                    </div>
                    
                    </form>
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