<?php

//ПЛАН
// подключить бд
// есть ли пользователь в бд?
// validation
// создаем пользователя

require_once __DIR__.'/config.php';

$sqlrequest = $pdo->prepare("SELECT *  FROM `users` WHERE `username` = :username") ;
$sqlrequest->execute(['username'=>$_POST ['username']]);
if ($sqlrequest->rowCount() > 0){
    echo "username has already used";

}
else{
    $sqlrequest = $pdo->prepare("INSERT INTO `users`(`username`,`password`,`avatar_img`) VALUES(:username, :password, :avatar_img)") ;
    $sqlrequest->execute([
        'username'=>$_POST['username'],
        'password'=>password_hash($_POST['password'],PASSWORD_DEFAULT),//password -  хеширование
        'avatar_img'=>$_POST['avatar_img'],// file
    ]);
header('Location: login.php');
}