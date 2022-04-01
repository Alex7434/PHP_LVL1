<?php 
##1
$i = 0;
while ($i <= 100) {
    if ($i % 3 == 0)
    echo "$i - делится на 3". "<br>";
    $i++;
}

##2
$n = 0;
do {
if ($n == 0){
    echo "$n - ноль". "<br>";
    $n++;
}
elseif ($n % 2 == 0){
    echo "$n - четное число". "<br>";
    $n++;
}
else {
    echo "$n - нечетное число". "<br>";
    $n++;
}
} while ($n <= 10);

##3

$city = [
    "Московская область:" => ["Москва" , "Зеленоград" , "Клин"],
    "Ленинградская область:" => ["Санкт-Петербург" , "Всеволожск" , "Павловск" , "Кронштадт"],
    "Рязанская область:" => ["Новомичуринск" , "Сапожок" , "Шилово"]
];

function cityArea($arr) {
    foreach ($arr as $key => $val) {
        echo $key . "<br>";
        for ($i=0; $i < $arrLength = count($arr[$key]); $i++) { 
            if ($i == $arrLength - 1) {
                echo $arr[$key][$i] . '.' . '<br>';
            } else {
                echo $arr[$key][$i] . ', ';
            }
        }
    }
}

cityArea($city);

##4
$addr = array("а" => "a", "б" => "b", "в" => "v", "о" => "o");

echo strtr("абоба" ,$addr). "<br>";

## №5
$blaBlaBla = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, quaerat?<br>";
function switchSpase($blaBlaBla){
echo str_replace(" ", "_", $blaBlaBla); 
}
switchSpase($blaBlaBla);

##7

 for($z = 0; $z <= 9; print $z++){
 };
