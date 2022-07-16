<?php

class CreditCard
{
    private $type;
    private $number;
    private $cvv;
    private $expiration;

    public static $MASTER_CARD = "mastercard";
    public static $VISA = "visa";
    public static $AMERICAN_EXPRESS = "american express";

    function __construct($_type, $_number, $_cvv, $_expiration)
    {
        $this->setType($_type);
        $this->setNumber($_number);
        $this->setCvv($_cvv);
        $this->setExpiration($_expiration);
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getNumber()
    {
        return $this->number;
    }

    
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    
    public function getCvv()
    {
        return $this->cvv;
    }

    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    public function getExpiration()
    {
        return $this->expiration;
    }

    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    public function checkexpDate()
    {
        $expiration = DateTime::createFromFormat("m/y", $this->expiration);
        $now = new DateTime("now");

        return $expiration > $now;
    }
}
