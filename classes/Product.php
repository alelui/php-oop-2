<?php
class Product {
    private $kind;
    private $description;
    private $price;

//constructor
    function __construct($_kind, $_price) 
    {
        $this->kind = $_kind;
        $this->price = $_price;
    }
//constructor end

//set properties
    public function setkind($_kind)
    {
        $this->kind = $_kind;
    }
     public function setDescription($_description) 
    {
        $this->description = $_description;
    }
     public function setPrice($_price) 
    {
        $this->price = $_price;
    }
//set properties end

//get properties 
     public function getKind() 
    {
        return $this->kind;
    }
     public function getDescription() 
    {
        return $this->description;
    }
     public function getPrice() 
    {
        return $this->price;
    }
    
//get properties end

}  
?>