<?php 
## №1

$a = -7;
$b = 42; 

if ($a >=0  && $b >=0 ) {
    echo $a - $b;
} elseif ($a < 0 && $b <0 ) {
    echo $a * $b;
} else {
    echo $a + $b;
}

## №2

$a = rand(0,15);

switch ($a) {
    case 1:
        echo "<br> 1";     
    case 2:
        echo "<br> 2";  
    case 3:
        echo "<br> 3";    
    case 4:
        echo "<br> 4";
    case 5:
        echo "<br> 5";     
    case 6:
        echo "<br> 6";  
    case 7:
        echo "<br> 7";    
    case 8:
        echo "<br> 8";
    case 9:
        echo "<br> 9";     
    case 10:
        echo "<br> 10";  
    case 11:
        echo "<br> 11";    
    case 12:
        echo "<br> 12";
    case 13:
        echo "<br> 13";     
    case 14:
        echo "<br> 14";    
    case 15:
        echo "<br> 15 <br>";
    }

## №3

function additions($a, $b){
    return $a + $b;
}  

function subtraction($a, $b){
    return $a - $b;
}

function multiplication($a, $b){
    return $a * $b;
}

function division($a, $b){
   if($b === 0) 
    {   return "делить на 0 нельзя";}
## return ($b === 0) ? "делить на 0 нельзя" : $a / $b;    
    return $a / $b;
}

## №4

function mathOperation($arg1, $arg2, $operation){  
      switch ($operation) {
        case "add":
            return additions($arg1, $arg2);      
        case "sub":
            return subtraction($arg1, $arg2);
        case "multi":
            return multiplication($arg1, $arg2);           
        case "div":
            return division($arg1, $arg2);
        default:
            return "unknown operation";
        }    
    }

echo mathOperation(10, 7, "add")."<br>";

## №5

// date('Y'); - функция которая выведет текущий год 

## №6

function power($val,$pow)
{
	if ($pow != 0)
	{
		return $val * power ($val, $pow - 1);
	}
    else if ($val == 1){
        return 0;
    }   
		return 1;
}
echo power(4, 3);

// function power($val, $pow) {
//     if ($pow == 0 )
//     return 1;
//     else if ($val == 1)
//     return 0;
//     else if ($pow < 0)
//     return power(1/$val, -$pow);
//     else 
//     return $val * power($val, $pow - 1);
// }

// echo power(2,3);
// данное решение нашел в интернете, но оно больше и чуть сложнее