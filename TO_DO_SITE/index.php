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
    if (htmlspecialchars($_COOKIE["action"]) == 'registration_succesful'){// проверку хеша
        header('Location: login.php');   
    }
    else{
        header('Location: registration.php');

    }
    ?>
</body>
</html>