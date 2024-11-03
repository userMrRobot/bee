<?php
/**
 *
 * @var $router
 */
//маршруты для обработки постов
$router->get('', 'index.php');
//$router->post('', 'login.php');
$router->get('login', 'login.php')->only('guest');
$router->post('login', 'login.post.php');
$router->get('register', 'register.php')->only('guest');
$router->post('register', 'register.post.php');
$router->post('logout', 'logout.php')->only('user');
$router->get('lk', 'lk.php')->only('user');
$router->get('setings', 'setings.php')->only('user');
$router->post('setings', 'setings.post.php')->only('user');
$router->get('logout', 'logout.php')->only('user');
$router->get('pay', 'pay.php')->only('user');
$router->post('pay', 'pay.post.php')->only('user');
$router->post('pay.bee', 'pay.bee.php')->only('user');
//$router->get('pay.bee', 'pay.bee.php')->only('user');
$router->get('vivod', 'vivod.php')->only('user');
$router->get('obmen', 'obmen.php')->only('user');
$router->post('obmen', 'obmen.post.php')->only('user');
$router->get('shop', 'shop.php')->only('user');
$router->get('ambar', 'ambar.php')->only('user');
$router->get('sell', 'sell.php')->only('user');
$router->post('sell', 'sell.med.php')->only('user');


//кредит и бонусы
$router->get('credit', 'credit.php')->only('user');
$router->post('credit', 'credit.post.php')->only('user');
$router->get('daybonus', 'daybonus.php')->only('user');
$router->get('weekbonus', 'weekbonus.php')->only('user');

//О САЙТЕ И ПРАВИЛА

$router->get('infa', 'infa.php');
$router->get('rules', 'rules.php');




