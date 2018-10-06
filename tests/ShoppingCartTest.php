<?php

use PHPUnit\Framework\TestCase;

class ShoppingCartTest extends TestCase
{
    public function testCase1()
    {
        $user = new User('John Doe', 'john.doe@example.com');
        $shoppingCart = new ShoppingCart($user);

        $apple = new Product('Apple', 4.95);
        $shoppingCart->addProduct($apple);
        $shoppingCart->addProduct($apple);

        $orange = new Product('Orange', 3.99);
        $shoppingCart->addProduct($orange);

        $this->assertEquals(4.95*2 + 3.99, $shoppingCart->getTotalPrice());
    }

    public function testCase2()
    {
        $user = new User('John Doe', 'john.doe@example.com');
        $shoppingCart = new ShoppingCart($user);

        $apple = new Product('Apple', 4.95);
        $shoppingCart->addProduct($apple);
        $shoppingCart->addProduct($apple);
        $shoppingCart->addProduct($apple);

        $shoppingCart->removeProduct('Apple');

        $this->assertEquals(4.95*2, $shoppingCart->getTotalPrice());
    }
}
