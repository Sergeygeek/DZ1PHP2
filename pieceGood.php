<?php

require_once "good.php";

class PieceGood extends Good {
        
    private $pieces;
        
    protected function setPieces($pieces) {
        $this->pieces = $pieces;
        return $pieces;
    }
        
    protected function setPrice($name, $price, $description, setPieces()) {
        parent::__construct($name, $price, $description);
        $this->price = $price * $this->setPieces();
        return $price;
    }
        
}

?>