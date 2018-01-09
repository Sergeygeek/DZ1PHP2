<?php

class Good{
    
    private $name;
    private $price;
    private $description;
    
    function __construct($name, $price, $description){
        $this->setName();
        $this->setPrice();
        $this->setDesc();
        $this->info();
    }
    
    
    protected function setName($name) {
        $this->name = $name;
        return $name;
    }
    
    protected function setPrice($price) {
        $this->price = $price;
        return $price;
    }
    
    protected function setDesc($description) {
        $this->description = $description;
        return $description;
    }
    
    public function getName($name){
        return $this->setName();
    }
    
    public function getPrice($price){
        return $this->setPrice();
    }
    
    public function getDesc($description){
        return $this->setDesc();
    }
    
    public function info($name, $price, $description){
        echo $this->setName() . "стоит " . $this->setPrice() . "</br>"
            . "Описание: " . $this->setDesc();
    }
}

?>