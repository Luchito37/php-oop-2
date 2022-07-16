<?php
require_once 'product.php';

class Giochi extends Product {
    private $productType;
    private $material;

    public function __construct( $_material, $_productType, $_name, $_price){
        parent::__construct($_name, $_price);
        $this->setmaterial($_material);
        $this->setProductType($_productType);
    }

    public function getProductType()
    {
        return $this->productType;
    }

    public function setProductType($productType)
    {
        $this->productType = $productType;

        return $this;
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