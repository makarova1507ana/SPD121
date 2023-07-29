<?php
require_once 'C:\ospanel\domains\SPD121\config.php';
$sqlrequest = $pdo->prepare("SELECT *  FROM `users` WHERE `username` = :username") ;
$sqlrequest->execute(['username'=>$_POST ['username']]);
if (!($sqlrequest->rowCount())){
    echo "username is not found ";
    die;
}
$user = $sqlrequest->fetch(PDO::FETCH_ASSOC);

if (password_verify($_POST['password'], $user['password'])){
    $_SESSION['user_id']=$user['id'];
    header('Location: ../../index.php');
    die;
}
echo 'password or username is not match';
die;

?>