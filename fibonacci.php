<?php

echo "<h3> fibonacci series: </h3>";
$num_1 = 0;    
$num_2 = 1; 

echo $num_1 . "<br>" . $num_2 . "<br>";

for($i=0; $i<=15; $i++)    
{    
    $x = $num_1 + $num_2;    
    echo $x . "<br>";         
    $num_1 = $num_2;       
    $num_2 = $x; 
      
}   

?>