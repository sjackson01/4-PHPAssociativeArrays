<?php

/* 
   !Array Associative!
   Seperate blocks of code.
   Move comment arrows
   in order review by section.  
*/


/*<------
------>*/
//Associative Array   
$iceCream = array( 
    'Alena' => 'Black Cherry',//Alena is the key and Black Cherry is the values
    'Treasure' => 'Chocolate',
    'Dave' => 'Cookies and Cream',
    'Rialla' => 'Strawberry'
);
$iceCream["Alena"] = "Orange"; //Update associative array
echo $iceCream['Alena'];//Echo by key
$iceCream[] = 'Vanilla';//Mix int and string keys
var_dump($iceCream);

//Trick Question
$myArray = array( //What is the KEY of the fourth element? Answer: '0'
    "January" => "Winter",
    "February" => "Winter",
    "March" => "Spring",
    "April", //April is not a key it is a value (no April =>)
    "May" => "Spring",
    "June" => "Summer",
    "July" => "Summer",
    "August" => "Summer",
    "September" => "Fall",
    "October" => "Fall",
    "November" => "Fall",
    "December" => "Winter"
    );

//Key cast and trunc
$keys = array( 
    1 => 'a',//Key int
    '1' => 'b',//Key cast to int 1
    1.5 => 'c', //Key truncated to int 1
    true => 'd' //Key cast to 1 for true
);
var_dump($keys);


?>