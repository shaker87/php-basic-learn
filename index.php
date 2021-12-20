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
    for($i = 1; $i <= $value; $i++){
        echo $value ,' x ', $i ,' = ', $value * $i  .'<br>';
        // if($i % 2 == 0){
        //     echo 'This is even', + $i . '<br>';
        // }else{
        //     echo 'This is odd number', + $i .'<br>';
        // }
    }
   
}


hello_text(10);

$array = ['shaker', 'tarek', 'atik'];

echo $array[0] .'<br>';

for($i = 0; $i < count($array); $i++) {
    // do something with $array[$i]
    echo $array[$i] .'<br>';
}



// associative array


$vehicle = [
    'brand'=> [
        'toyota' => [
            'model'=> ['allion', 'premio', 'ex-corolla'],
        ]
        
     
    ],
    'tesla' => 'tesla',
    
];


// echo $vehicle["brand"]["toyota"]["model"][0];

echo $vehicle["tesla"];