<?php

class Cart
{
    private $products = [];

    public function add(...$_products)
    {
        array_push($this->products, ...$_products);
    }

    public function remove($product)
    {
    }

    public function getTotal($discount = 0)
    {
        $total = 0;

        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }

        return $total;
    }

    public function getProducts()
    {
        return $this->products;
    }
}
