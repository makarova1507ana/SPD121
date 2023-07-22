<?php
    //логика добавления задачи
    //перенапрелние обратно на главную страницу
    $task = $_POST['task'] ;//вытащить значение из поля input
    $regex = '/^$/';


    if (preg_match_all($regex, $task)){
        header("Location:/?error=empty_input");
    }
    else{
    require 'config.php';

    $request = $pdo->prepare('INSERT INTO tasks(task) VALUES (:task);');
    $request->execute(['task'=>$task]);
   header("Location:/");
    }
    ?>