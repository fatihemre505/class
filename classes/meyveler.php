<?php 


class Meyve{
 
    function __construct()
    {
        echo "<p style='color:green'> Hello Im  __construct </p>";
    }  

    function __destruct()
    {
        echo "<p style='color:red'>Good Bye ım __destruct </p>";
    }

    public $ad;
    public $renk;

    public function setName($name){
        $this->ad = $name;
    }

    public function getName(){
        return $this->ad;
    }

    public  function setColor($color){
        $this->renk = $color;
    }

    public function getColor(){
        return $this->renk;
    }

}

?>