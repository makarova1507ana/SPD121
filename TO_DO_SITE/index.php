<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO SITE</title>
</head>
<body>
    <!--какую страницу авторизацию, или регистрации,  или личный кабинет -->
    <?php 
require_once 'C:\ospanel\domains\SPD121\config.php';

    if (!!($_SESSION['user_id']??false)) {?>
<!-- отображать личный кабинет-->
<h1>Welcome back</h1>
<?php   }

    else if (htmlspecialchars($_COOKIE["action"]) == 'registration_succesful'){// проверку хеша
        header('Location:pages/auth/login.php');   
    }else{
    header('Location: pages/registration/registration.php');}

    ?>
</body>
</html>