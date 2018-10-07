<?php

use PHPUnit\Framework\TestCase;
use Blue\User;
use Blue\ShoppingCart;
use Blue\Product;

class ShoppingCartTest extends TestCase
{
    private $shoppingCart;

    public function setUp()
    {
        $user = new User('John Doe', 'john.doe@example.com');
        $this->shoppingCart = new ShoppingCart($user);
    }

    public function tearDown()
    {
    }

    public function testCase1()
    {
        $shoppingCart = $this->shoppingCart;

        $apple = new Product('Apple', 4.95);
        $shoppingCart->addProduct($apple);
        $shoppingCart->addProduct($apple);

        $orange = new Product('Orange', 3.99);
        $shoppingCart->addProduct($orange);

        $this->assertEquals(4.95*2 + 3.99, $shoppingCart->getTotalPrice());
    }

    public function testCase2()
    {
        $shoppingCart = $this->shoppingCart;

        $apple = new Product('Apple', 4.95);
        $shoppingCart->addProduct($apple);
        $shoppingCart->addProduct($apple);
        $shoppingCart->addProduct($apple);

        $shoppingCart->removeProduct('Apple');

        $this->assertEquals(4.95*2, $shoppingCart->getTotalPrice());
    }
}
