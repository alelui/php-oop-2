<?php

   require_once __DIR__ . '/User.php';

   class PrimeUser extends User {

    function __construct($_name, $_sur)
    {
        $this->name = $_name;
        $this->sur = $_sur;
    }

    public function getDiscountedP() {
        $NativePrice = $this->item->getPrice();
        $discountedPrice = $NativePrice - ($NativePrice * 0.15);
        return $discountedPrice;
    }

   }