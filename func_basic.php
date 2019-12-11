<?php
// function rahat(){
//     echo "RAHAT";
// }
// rahat();
// rahat();
// rahat();




// function rahat($a,$b){
//     echo $a+$b;
// }
// rahat(20,30);





// -----------------------------PHP te j count() builtin function ase..same akta function nijera banano--------------




function counter($arr)
{
    $a = 0;
    foreach ($arr as $value) 
    {
        $a++;
    }
    echo $a;
}

$my_arr = array(1,2,3,20,5,4,1,2,6,10);
// $my_arr1 = array(1,2,3,20,5,4,1,2);

counter($my_arr);  // custom function

echo "<br>";
// counter($my_arr1);

echo count($my_arr); // php ar builtin function




?>