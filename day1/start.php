<?php 
// task1
$name="fatma";
echo "hello",$name,"<br>";


// task2
$num1=10;
$num2=5;
$num3=4;
$num4=3;


echo "$num1+$num2=".$num1+$num2,"<br>";
echo "$num1*$num2=".$num1*$num2,"<br>";
echo "$num1**$num2=".$num1**$num2,"<br>";
echo "$num1-$num2=".$num1-$num2,"<br>";


// task3
echo "($num1*$num2)-($num3*$num4)=".($num1*$num2)-($num3*$num4),"<br>";

// tak4

$num5=55;
$num6=22;
echo "5+2=".($num5 % 10)+($num6 % 10),"<br>";

// task5
$num7=2435;
$num8=2000;
if($num7 /2==0){
    echo " $num7 even number","<br>";
}
else{
    echo " $num7 odd","<br>";

}

// task6
$number = 3569; 
$firstDigit = (int)strval($number)[0]; 

if ($firstDigit % 2 !== 0) {
    echo " $number is odd ","<br>";
} else {
    echo " $number even","<br>";
}


// task7
$a = 15;
$b = 7;
$c = 3;

if ($a % $c == 0 && $b % $c == 0) {
    echo "Both","<br>";
} elseif ($a % $c == 0) {
    echo "Memo","<br>";
} elseif ($b % $c == 0) {
    echo "Momo","<br>";
} 

?>