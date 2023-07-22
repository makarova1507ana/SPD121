<?php
require_once 'C:\ospanel\domains\SPD121\config.php';
$sqlrequest = $pdo->prepare("SELECT *  FROM `users` WHERE `username` = :username") ;
$sqlrequest->execute(['username'=>$_POST ['username']]);
if (!($sqlrequest->rowCount())){
    echo "username is not found ";
    die;
}
$user = $sqlrequest->fetch(PDO::FETCH_ASSOC);
echo $_POST['password'];
$p = 'p' ;
$hash = password_hash('p', PASSWORD_DEFAULT);
if (password_verify($p,$hash)){//$_POST['password'], $user['password'])){
    echo 'ok';

}
if (password_verify($_POST['password'], $user['password'])){
    $_SESSION['user_id']=$user['id'];
    header('Location: ../../index.php');
    die;
}
echo 'password or username is not match';
die;

?>