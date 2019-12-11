





<?php

echo "Prime number between 1 to 100.<br>";

    $n=100;
    
    for($i=2; $i<=$n; $i++)
    {
        for($x=2; $x<=$n; $x++)
        {
            if ($i % $x ==0) {
                break;
            }
        }
        if ($i == $x) {
            echo $i."<br>";
            
        }
    }

?>
