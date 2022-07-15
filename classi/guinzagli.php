<?php
require_once 'Product.php';

class Guinzagli extends Product {
    private $lunghezza;
    private $brand;

    public function __construct($_name, $_price, $_brand){
        parent::__construct($_name, $_price);
        $this->setbrand($_brand);
    }

    public function getlunghezza()
    {
        return $this->lunghezza;
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