 <?php
//  $number = 2;//это комментарий
//  $num1 = 3; $num2 = 4;
// echo "<strong>this is number</strong> = $number <br>"; // print
// print  ("$num1 + $num2 = ");
// echo  $num1 + $num2;
// // типы данных string integer double boolean NULL array object resourse
// //echo sqrt($num1);
// echo "<br>";
// echo gettype("gf");

// /*----------------------Условия---------------------------- */
// $num1 = 4; $num2 = 4;

// if ($num1 > $num2){
//     echo "это выражение";
//     echo "$num1 > $num2";
// }elseif ($num1 < $num2){
//     echo "$num1 < $num2";
// }else{
//     echo "$num1 = $num2";
// }


/*---------------------- Массивы ---------------------------- */
// $marks = array(3,2,5,3,4);
// echo $marks[0];

// $user = array(
//     "name" => "Ivan",
//     "age" => 23);
// echo $user['name'];

$student = array(
    0 => "id0",
    'user' => array(
        "name" => "Ivan",
        "age" => 23),
    "group" => 2223

);
// print_r($student['user']);
// echo "<br>";
// var_dump($student);
// echo "<br>";
// echo $student['user']["name"];

// $user2 = array(
//          "name" => "Ivan",
//         "age" => 23);
// // полезные функции для работы с массивами
// echo count($student);//вычисление кол-во элементов массива
// echo "<br>";
// print_r( array_flip($user2));
// echo "<br>";
// echo  implode(' | ',$user2);
// echo "<br>";
// echo "<br>";
/*---------------------- Циклы ---------------------------- */
/*-----------------------for--------------------------*/
// for ('начальное 1', 'начальное 2'    ;   'условие 1'     ;      'действие 1', 'действие 2')
// for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++, print "<br>");
// echo "<br>";


//while ничем не отличается от С++

//do while ничем не отличается от С++

// /*---------------------- foreach ---------------------------- */

// foreach ($student as $element => $value){
//     echo "<strong>$element</strong> => $value<br>";
// }
?>









<?php
/*------------------------------------Задачи---------------------------------------*/
// /*
// В этом упражнении PHP вы создадите массив, распечатаете его в браузере,
//  а затем попросите пользователя добавить к нему ещё несколько слов.

// Создайте массив видов транспорта, включая автомобиль, самолет, паром и метро. 
// Напечатайте в браузере следующее утверждение: «Путешествовать можно по городу, стране или миру. 
// Вот список некоторых распространенных видов транспорта:» Затем введите неупорядоченный список, 
// созданный путем повторения созданной вами переменной массива.
// */
// $transport = array(
//     "автомобиль",
//     "самолет",
//     "паром",
//     "метро"
// );
// echo  "<p>Путешествовать можно по городу, стране или миру. 
// Вот список некоторых распространенных видов транспорта:</p>"; 
// if (!($_POST['submit'] && $_POST['favoriteTransport']!='')){
//     echo "<ul>";
//     foreach ($transport as $type){
//         echo "<li>$type</li>";
//     }
//     echo "</ul>";
// }


// /*
// Затем предоставьте пользователю текстовое поле ввода и попросите пользователя добавить 
// в список другие виды транспорта, разделенные запятыми. Когда пользователь нажимает «Перейти», 
// обработайте ввод с помощью функций массива, чтобы отправить обратно исходный список с добавлением пользователя.
//  Добавьте еще одно текстовое поле с текстом «Добавить еще?» и еще одну кнопка отправки.
//   Когда пользователь нажимает эту кнопку, страница должна перезагрузиться с новыми дополнениями, 
//   добавленными к ранее расширенному списку. 
// Ваш код должен позволять пользователю добавлять элементы сколько угодно раз.
// */
?>
 <!-- <form method="post" action="index.php">
<label>Ваш любимый способ Путешествовать<input type='text' value='' name = 'favoriteTransport' size='40'></label>
<input type="submit" name = "submit" value='Перейти'></form> -->
<?php
// //блок с обработкой данных из input
// //если форма была отправлена
// if ($_POST['submit'] && $_POST['favoriteTransport']!=''){

//     $favoriteTransport = $_POST['favoriteTransport'] ;//запишет в виде строки
//     $favoriteTransport = explode(',', $favoriteTransport);//необходимо преобразовать к массиву
//     $transport = array_merge($transport, $favoriteTransport);
//     echo "<ul>";
//     foreach ($transport as $type){
//         echo "<li>$type</li>";
//     }
//     echo "</ul>";
//} 
?>





<!-- /*
Создать html-страницу с палитрой цветов и формой для добавления нового цвета. После заполнения формы новый цвет должен добавиться в палитру.
Добавить проверку введенного значения с помощью регулярного выражения или методами работы с строками после того, как пользователь сменил фокус.
Если значение введенное пользователя не существует числу от 0 до 255, добавить контейнер с надписью “значение должно быть от “0 до 255”.
*/ -->
<?php
$blocks = array();?>
<form method="post" action="index.php"><!--пернаправку на новую страницу-->
<label>R<input type='text' value='0' name = 'red' size='10'></label>
<label>G<input type='text' value='0' name = 'green' size='10'></label>
<label>B<input type='text' value='0' name = 'blue' size='10'></label>
<br>
<input type="submit" name = "submit" value='Перейти'></form>


<?php

    if ($_POST['submit']){
        foreach ($_POST as $key => $value){
            if ($value==''){
                $colors[$key] = '0';  
            }else{
                if($value!='Перейти'){
                $colors[$key] = $value;  }
            }
        }
        $color = implode(',', $colors);
        $block = explode("-","<div style=\"background: rgb($color); width:40px; height: 40px;\">");
        $blocks = array_merge($blocks,$block);
        //ВЕРНУТЬСЯ К ЭТМОМУ УЧАСТКУ
        foreach ($blocks as $key => $value){ 
            echo $value;
        };
        // print_r($colors);
    
    }