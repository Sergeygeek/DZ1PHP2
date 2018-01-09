<?php

    require_once "good.php";

    class DryGood extends Good {
        
        private $weight;
        
        protected function setWeight($weight) {
            $this->weight = $weight;
            return $weight;
        }
        
        protected function setPrice($name, $price, $description, setWeight()) {
            parent::__construct($name, $price, $description);
            $this->price = $price * $this->setWeight();
            return $price;
        }
        
    }

?>