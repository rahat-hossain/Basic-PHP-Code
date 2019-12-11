<!DOCTYPE html>
<html>
    <head> <title>Grading system</title> </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td> Enter your number : </td>
                    <td> <input type="number" name="total_num"><br> </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input type="submit" value="result" name="result"> </td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
    if(isset($_POST['result'])){
            $total = $_POST['total_num'];
            
            if(empty($total)){
                echo " <span style = 'color:#FF0000;'> Field must not be empty </span> ";
                }
            else{    
                    echo 'your number was : ' . $total . '<br>';
                    
                    if($total>=80  && $total<=100){
                        echo "<h3> You got A+ (5.00)</h3>";
                    }
                    elseif($total>=70  && $total<=79){
                        echo "<h3> You got A (4.00)</h3>";
                    }
                    elseif($total>=60  && $total<=69){
                        echo "<h3> You got A- (3.50)</h3>";
                    }
                    elseif($total>=50  && $total<=59){
                        echo "<h3> You got B (3.00)</h3>";
                    }
                    elseif($total>=40  && $total<=49){
                        echo "<h3> You got C (2.00)</h3>";
                    }
                    elseif($total>=33  && $total<=39){
                        echo "<h3> You got D (1.00)</h3>";
                    }
                    elseif($total>=0  && $total<=32){
                        echo "<h3> You got F (0.00)</h3>";
                    }
                    else{
                        echo "please enter the number betweeen 1-100";
                    }
                }
        }
?>