<?php
//$hour = date('H');
//$minutes = date('i');
//$sec = date('s');
//
//echo $hour . ' - ' . $minutes . ' - ' . $sec. PHP_EOL;
//
//if ($hour % 2 === 0) {
//    if ($minutes % 2 === 0) {
//        if ($sec % 2 === 0) {
//            echo 'Все парне';
//        } else {
//            echo 'парні години, хвилини, секунди непарні';
//        }
//    } else {
//        if ($sec % 2 === 0) {
//            echo 'парні години, непарні хвилини і парні секунди';
//        } else {
//            echo 'парні години, непарні хвилини і секунди';
//        }
//    }
//} else {
//    if ($minutes % 2 === 0) {
//        if ($sec % 2 === 0) {
//            echo 'непарні години, парні хвилини і секунди';
//        } else {
//            echo 'непарні години, парні хвилини і непарні секунди';
//        }
//    } else {
//        if ($sec % 2 === 0) {
//            echo 'непарні години і хвилини але парні секунди';
//        } else {
//            echo 'все непарне';
//        }
//    }
//}


//if ($hour % 2 === 0 && $minutes % 2 === 0 && $sec % 2 === 0) {
//    echo 'Все парне';
//} elseif ($hour % 2 === 0 && $minutes % 2 === 0 && $sec % 2 !== 0) {
//    echo 'парні години, хвилини, секунди непарні';
//} elseif ($hour % 2 === 0 && $minutes % 2 !== 0 && $sec % 2 === 0) {
//    echo 'парні години, непарні хвилини і парні секунди';
//} elseif ($hour % 2 === 0 && $minutes % 2 !== 0 && $sec % 2 !== 0) {
//    echo 'парні години, непарні хвилини і секунди';
//} elseif ($hour % 2 !== 0 && $minutes % 2 === 0 && $sec % 2 === 0) {
//    echo 'непарні години, парні хвилини і секунди';
//} elseif ($hour % 2 !== 0 && $minutes % 2 === 0 && $sec % 2 !== 0) {
//    echo 'непарні години, парні хвилини і непарні секунди';
//} elseif ($hour % 2 !== 0 && $minutes % 2 !== 0 && $sec % 2 === 0) {
//    echo 'непарні години і хвилини але парні секунди';
//} else {
//    echo 'все непарне';
//}


//в тебе є масив ролей користувача
// Приклад ролі користувача, може бути 'admin', 'editor', 'author', 'registered', 'guest'

//потрібно рандомно вибрати якийсь 1 з них
//і потім видати 'hello' .  $role
//
//$roles = ['admin', 'editor', 'author', 'registered', 'guest'];
//$role = array_rand($roles);
//
//switch ($roles[$role]) {
//    case 'admin' :
//        echo 'duh';
//        break;
//    case 'editor':
//        echo 'lgk';
//        break;
//    case 'author':
//        echo ';dfogup0';
//        break;
//    case 'registered':
//        echo 'psrig';
//        break;
//    case 'guest':
//        echo 'g;odls';
//        break;
//}

//знайти суму ключів в масиві
//$values = [15,26,33,42,54,23];
//$sum = 0;
//
//foreach ($values as $key => $value){
//    if ($key % 2 !== 0){
//        $sum += $key;
//    }
//}
//echo $sum;


//Вивести 15 чисел фібоначі (два попередні знеачення сумуються)
//
//1, 2, 3, 5, 8, 13, 21, 34,
//
//$preValue = 1;
//$secondValue = 0;
//
//
//for ($i = 1; $i <= 15; $i++){
//    $sum = $preValue + $secondValue;
//    echo $sum . PHP_EOL;
//    $secondValue = $preValue;
//    $preValue = $sum;
//
//}
//
////
////Знайти максимальне число в масиві (аналог функції php max())
//$values = [1,2,3,4,5,null,'Lizaa', '123', 54, []];

do {
    $number = rand(1, 100);
    echo $number . PHP_EOL;
}while ($number > 20);

