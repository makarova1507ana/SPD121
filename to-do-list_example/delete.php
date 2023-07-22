<?php
    //логика удаления задачи
    //перенапрелние обратно на главную страницу
    $id = $_GET['id'];
    
    require 'config.php';
    $request = $pdo->prepare('DELETE FROM tasks WHERE `id`=:id');
    $request->execute(['id'=>$id]);
header("Location:/")
    ?>