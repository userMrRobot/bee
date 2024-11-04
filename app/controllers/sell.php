<?php
if(!isset($_SESSION['user'])){
    header("location: /register");
}
global $db;

$title = 'Страница продажи меда';

dump($_SESSION);
require ALL . '/sellMed.view.php';

?>