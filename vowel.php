<?php  
    $v_Count = 0;  
    $c_Count = 0;  
    $t_Count = 0;
      
    $str = "a b c d e f g h i j k l m n o p q r s t u v w x y z";  
          
    for($i = 0; $i < strlen($str); $i++) 
    {        
        if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u')
        {  
            $v_Count++;  
        }     
        else if($str[$i] >= 'a' && $str[$i] <= 'z') 
        {  
            $c_Count++;  
        }  
        $t_Count = $v_Count + $c_Count;
    }  
    echo "Total Number of character : " . $t_Count . "<br>" ;
    echo "Number of vowels : " . $v_Count . "<br>" ;  
    echo "Number of consonants : " . $c_Count . "<br>" ;  

   
?>  
