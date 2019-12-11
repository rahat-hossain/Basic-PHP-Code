<?php
class person{
    public $name="Rahat Hossain";
    public $age;
    
    public function name(){
     echo 'My name is: ' . $this->name . "<br>";
    }
    public function age($a){
        echo 'Age is:' .$this->age=$a;   
    }
}
$personss = new person;
$personss->name();
$personss->age(20);
?>