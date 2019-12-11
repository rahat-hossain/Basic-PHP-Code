<?php


class person
{
    public $name;
    public $age;
    
    public function __construct ($na,$ag)
    {
        $this->name = $na;
        $this->age = $ag;
    }

    public function personDetails()
    {
        echo "person  name is: {$this->name} and person age is: ($this->age)";
    }
    
}
$personss = new person("Rahat Hossain","25");

$personss->personDetails();

?>