<?php
echo "Hello From Learn PHP" . '<br>'; 

$welcome_text = 'Hello Text';
echo $welcome_text . '<br>';
$welcome_text = 'Hello Text Reassign';
echo $welcome_text . '<br>';

define('PI', 3.1416);
echo PI . '<br>';

$number1 = 100;
$number2 = 5;

echo $number1 + $number2 . '<br>';
echo $number1 - $number2 . '<br>';
echo $number1 * $number2 . '<br>';
echo $number1 / $number2 . '<br>';
echo $number1 % $number2 . '<br>';
echo $number1 ** $number2 . '<br>';  // 100*100*100*100*100


function hello_text($value){
    
    echo 'Hello World call from function' .'<br>';
    for($i = 0; $i <= $value; $i++){
        echo $i+2 .'<br>';
    }
   
}


hello_text(10);
