<?php
    $number = 60;

    switch($number){
        case ($number>=80  && $number<=100):
            echo "<h3> You got A+ (5.00)</h3>";
            break;
        case ($number>=70  && $number<=79):
            echo "<h3> You got A (4.00)</h3>";
            break;
        case ($number>=60  && $number<=69):
            echo "<h3> You got A- (3.50)</h3>";
            break;
        case ($number>=50  && $number<=59):
            echo "<h3> You got B (3.00)</h3>";
            break;
        case ($number>=40  && $number<=49):
            echo "<h3> You got C (2.00)</h3>";
            break;
        case ($number>=0  && $number<=40):
            echo "<h3> You got F (0.00)</h3>";
            break;
        default:
            echo 'Invalid';
            break;
    }
?>