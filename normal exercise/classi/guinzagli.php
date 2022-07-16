<?php
require_once 'product.php';

class Guinzagli extends Product {
    private $lunghezza;
    private $brand;

    public function __construct( $_lunghezza, $_brand, $_name, $_price){
        parent::__construct($_name, $_price);
        $this->setlunghezza($_lunghezza);
        $this->setbrand($_brand);
    }

    public function getlunghezza()
    {
        return $this->lunghezza;
    }

    public function setLunghezza($lunghezza)
    {
        $this->lunghezza = $lunghezza;

        return $this;
    }

    public function getbrand()
    {
        return $this->brand;
    }

    public function setbrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }
}

?>