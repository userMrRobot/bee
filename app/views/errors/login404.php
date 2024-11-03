<?php
echo ' тут мы в системе';
require INCS . '/header.tpl.php';

?>

<main>
    <div class="container">


        <div class="row">
            <?php require INCS . '/fon.tpl.php'; ?>

            <!-- секция с формой статическая-->
            <?php require  INCS . '/leftBar.tpl.php';?>
            <!-- главная секция изменяемая-->

            <div class="col-lg-8">

                <!--                -->

                    <div class="alert alert-dark " role="alert">
                        Такой страницы не существует

                    </div>
















            </div>

        </div>
    </div>
</main>

<!-- footer -->
<?php
require INCS .  '/footer.tpl.php';
?>

