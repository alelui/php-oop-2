<?php

class User{
    private $name;
    private $sur;
    private $item;
    private $creditCard;
    protected $discount;


//constructor
    function __construct($_name, $_sur)
    {
        $this->name = $_name;
        $this->sur = $_sur;
    }

//constructor-end

//set properties
    public function setName($_name) 
    {
        $this->name = $_name;
    }
    public function setSur($_sur) 
    {
        $this->sur = $_sur;
    }
    public function gotItem($_item) 
    {
        $this->item = $_item;
    }
    public function setCreditCard($_creditCard) 
    {
        $this->creditCard = $_creditCard;
    }
    public function setDiscount($_discount) 
    {
        $this->discount = $_discount;
    }
//set properties end

//get properties 
    public function getName() 
    {
        return $this->name;
    }
    public function getSur()
    {
        return $this->sur;
    }
    public function getDiscount() 
    {
        return $this->discount;
    }
    public function getCreditCard() 
    {
        return $this->creditCard;
    }

    public function getDiscountedP() {
        $NativePrice = $this->item->getPrice();
        $discountedPrice = $NativePrice - ($NativePrice * 0.1);
        return $discountedPrice;
    }

//get properties end

}
?>