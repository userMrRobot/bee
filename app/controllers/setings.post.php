<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    header("location: /setings");
}
global $db;
$user_id = $_SESSION['userInfo']['user_id'];
$pass = $_POST["pass1"];
$pass_new = $_POST["pass2"];
$pass_new_return = $_POST["pass3"];

//SELECT * FROM `login` WHERE id = 50;
$result = $db->query("SELECT password FROM login WHERE id  = :id ",
    [':id' => $user_id]);
if (!password_verify($pass, $result[0]['password'])){
    if($pass_new === $pass_new_return){
        $db->query("UPDATE login SET password = :pass WHERE id = :id ",
            [':pass' => password_hash($pass_new, PASSWORD_DEFAULT),':id'=> $user_id]);
        addMess('setings_done', 'Пароль успешно изменен');
        header("location: /setings");
    }
    else{
        addMess('setings_eror', 'Пароли не совпадают');
        header("location: /setings");
    }

}
else{
    addMess('setings_eror', 'Пароль не верный');
    header("location: /setings");
}
