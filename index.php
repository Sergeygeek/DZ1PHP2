<?php

class Good{

    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setDesc($description);
    }


    protected function setName($name)
    {
        $this->name = $name;
    }

    protected function setPrice($price)
    {
        $this->price = $price;
    }

    protected function setDesc($description)
    {
        $this->description = $description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDesc()
    {
        return $this->description;
    }

    public function info()
    {
        echo $this->getName() . "Цена: " . $this->getPrice() . "</br>"
            . "Описание: " . $this->getDesc();
    }
}

class DryGood extends Good {

    private $weight;

    public function __construct($name, $price, $description, $weight)
    {
        parent::__construct($name, $price, $description);
        $this->setWeight($weight);

    }

    protected function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getTotalPrice()
    {
        return $this->getPrice() * $this->getWeight();
    }

    public function info()
    {
        echo $this->getName() . "Цена за килограмм: " . $this->getPrice() . "</br>"
            . "Общая стоимость: " . $this->getTotalPrice()
            . "Описание: " . $this->getDesc();
    }
}

class PieceGood extends Good {

    private $pieces;

    public function __construct($name, $price, $description, $pieces)
    {
        parent::__construct($name, $price, $description);
        $this->setPieces($pieces);
    }

    protected function setPieces($pieces)
    {
        $this->pieces = $pieces;
    }

    public function getPieces()
    {
        return $this->pieces;
    }

    public function getTotalPrice()
    {
        return $this->getPrice() * $this->getPieces();
    }
    public function info()
    {
        echo $this->getName() . "Цена за штуку: " . $this->getPrice() . "</br>"
            . "Общая стоимость: " . $this->getTotalPrice()
            . "Описание: " . $this->getDesc();
    }
}