<?php
require_once 'Product.php';

class Giochi extends Product {
    private $productType;
    private $material;

    public function __construct($_name, $price, $_material){
        parent::__construct($_name, $price);
        $this->setmaterial($_material);
    }

    public function getProductType()
    {
        return $this->productType;
    }

    public function getmaterial()
    {
        return $this->material;
    }

    public function setmaterial($material)
    {
        $this->material = $material;

        return $this;
    }
}

?>