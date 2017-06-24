<?php
//Задание номер 8
//for ($i=-38;$i<=102;$i=($i+3)) {
//
//    if($i>1 & $i%2!=0 && $i%3!=0 && $i%5!=0 && $i%49!=0 && $i%91!=0){
//        ++$kp;
//    }
//    if ($i % 2 == 0) {
//        ++$koll;
//        $sum_n += $i;}
//    if ($i % 2 !== 0) {
//        $summ += $i;}
//}
//$sred=$sum_n/$koll;
//printf('количество четных элементов равно '.$koll.' в интервале (от -38 до 102)');
//printf('сумма нечетных элементов равна'.$summ.' в нашем диапазоне (от -38 до 102)');
//printf('среднее значение элементов кратных двум равно '.$sred);
//printf('количество простых чисел в вашем диапазоне равно '.$kp);

//Задание номер 9
//-создать функцию, которая принимает фаше имя и выводит его посимвольно( каждый символ на новой строке)
function names($name)
{
$arr=str_split($name);
    print_r($arr);
}
//names('pasha');
//-создать функцию которая принимает размерность массива и значание, которым надо заполнить массив
function mass($array,$size){}

//-создать функцию вывода массива, которая будет принимать переменную(массив)
// и выводить все его элементы на экран. Каждый элемент с новой строки. Должна
// быть проверка, если текущий элемент вляется массивом, то надо вызвать функцию
// вывода массива для этого элемента.Бонусный вариант 3 функции должен включать в
// себя взможность передачи символа отступа при вызове функции вывода массива
function hophejlalalej($arr, $otstyp=false){
    foreach ($arr as $element) {
        if (is_array($element)) hophejlalalej($element, $otstyp);
        else {
            if ($otstyp) echo $element.$otstyp;
            else echo $element . '<br>';
        }
    }
}
$at=array(5,6);
$att=array(1,2,4,$at);
echo hophejlalalej($att);

//Задание номер 10
//-создать функцию, которая принимает название месяца и выводит на экран количество дней в нем
function manses(String $mans)
{
    switch ($mans) {
        case 'January':
            echo '31';
            break;
        case 'February':
            echo '28';
            break;
        case 'March':
            echo '31';
            break;
        case 'April':
            echo '30';
            break;
        case 'May':
            echo '31';
            break;
        case 'June':
            echo '30';
            break;
        case 'July':
            echo '31';
            break;
        case 'August':
            echo '31';
            break;
        case 'September':
            echo '30';
            break;
        case 'October':
            echo '31';
            break;
        case 'November':
            echo '30';
            break;
        case 'December':
            echo '31';
            break;

        default: echo 'no correct';break;
    }
}
//manses(June);

//-создать функцию, котрая принимает текст, считает количтво гласных в нем в возвращает
// массив в формате глассные буквы - ключи и их количество в тексте) текст передаем на английском
function glascol(String $text){
    $position = array();
    $incriment = 0;

    for($i=0; $i<strlen($text); $i++)
        if(preg_match('/[aeiouy]/', $text[$i]))
            $position[$text[$i]] = $i;
    return $position;
}
$result = glascol("mother");
//print_r($result);
//echo 'Number of vowels: '.count($result);

//-содать функцию, которая выводит позиции всех символов a в переданном тестке в обратном порядке.
function perevert($simvol)
{
    $arr = str_split($simvol);
    $arv=str_split(strrev($simvol));
    print_r($arr);
    print_r($arv);
    return $arv;
}
//$resv=perevert('shalash')


?>