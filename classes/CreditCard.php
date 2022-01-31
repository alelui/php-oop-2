<?php
class CreditCard{
    private $cardNumber;
    private $cvv;
    private $exYear;
    private $exMonth;

//constructor
    function __construct($_cardNumber, $_cvv, $_exYear, $_exMonth)
    {
        $this->cardNumber = $_cardNumber;
        $this->cvv = $_cvv;
        $this->exYear = $_exYear;
        $this->exMonth = $_exMonth;    
    }
//constructor end

//set properties
    public function setCardNumber($_cardNumber) 
    {
        $this->cardNumber = $_cardNumber;
    }
    public function setCvv($_cvv) {
        $this->cvv = $_cvv;
    }
    public function setExYear($_exYear) 
    {
        $this->exYear = $_exYear;
    }
    public function setExMonth($_exMonth) 
    {
        $this->exMonth = $_exMonth;
    }

//set properties end

//get properties 
    public function getCardNumber()
    {
        return $this->cardNumber;
    }
    public function getCvv() 
    {
        return $this->cvv;
    }
    public function getExYear() 
    {
        return $this->exYear;
    }
    public function getExMonth() 
    {
        return $this->exMonth;
    }

//get properties end

}
?>