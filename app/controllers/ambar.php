<?php
if(!isset($_SESSION['user'])){
    header("location: /register");
}
global $db;
$title = 'Пасека';

//game_time($db);

dump($_SESSION);



require ALL . '/ambar.view.php';



?>
