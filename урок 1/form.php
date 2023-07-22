<?php
if (!($_POST['submit'])){
    echo "f";
 }
 else{echo "a";
     $favoriteTransport = $_POST['favoriteTransport'] ;//запишет в виде строки
 
     $favoriteTransport = explode(',', $favoriteTransport);//необходимо преобразовать к массиву
     $transport = array_merge($transport, $favoriteTransport);
     echo "<ul>";
     foreach ($transport as $type){
         echo "<li>$type</li>";
     }
     echo "</ul>";}