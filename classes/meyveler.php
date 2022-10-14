<?php 


class Meyve{
 
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