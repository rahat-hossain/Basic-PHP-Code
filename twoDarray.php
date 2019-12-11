<?php

// $arr_new = array(

//     array(25,45,"rahat"),
//     array(4,3),
//     array(96,105),

// );

//  foreach($arr_new as $index_a => $a)
//  {
//     foreach($a as $index_b =>$b)
//     {
//         echo "[" . $index_a . "]" . "[" . $index_b . "]" . " => " . $b . "<br>";
    
//     }
//  }






// $arr_new = array(

//     array(25,45,"rahat"),
//     array(4,3),
//     array(96,105),

// );
// foreach ($arr_new as $key => $value) {
//     echo "<pre>";
//     print_r($arr_new);
// }







$main_array = array(
    array(20, 50, "rahat"),
    100,
    array(150, 30, "x"),
    array(650, 500, "rip"),
    66
);

foreach ($main_array as $value) {
    if (is_array($value)) {
        foreach ($value as $value_1) {
            echo $value_1. "<br>";
        }
    }
    else {
        echo $value."<br>";
    }
}



















?>