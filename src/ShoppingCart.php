<?php

namespace Blue;

class ShoppingCart
{
    private $user;

    private $products = array();

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function removeProduct($name)
    {
        foreach ($this->products as $key => $value) {
            if ($name == $value->getName()) {
                unset($this->products[$key]);
                return;
            }
        }
    }

    public function getTotalPrice()
    {
        $result = 0;

        foreach ($this->products as $value) {
            $result += $value->getPrice();
        }

        return $result;
    }
}