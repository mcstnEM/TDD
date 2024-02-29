<?php

use PHPUnit\Framework\TestCase;
use App\Cart;
use App\Storage;
use App\Product;

class CartTest extends TestCase {
    protected Cart $cart;
    protected Product $product;

    public function setUp(): void
    {
        $storage = new Storage;
        $this->cart = new Cart($storage);
        $this->product = new Product('Laptop', 1800.0, '2');
    }

    public function testAddProduct(): void 
    {
        $this->cart->addProduct($this->product);
        $this->assertContains($this->product, $this->cart->getProducts());
    }

    public function testRemoveProduct(): void 
    {
        $this->cart->removeProduct($this->product->getName());
        $this->assertNotContains($this->product, $this->cart->getProducts());
    }

    public function testReset(): void 
    {
        $product0 = $this->product;
        $product1 = new Product('Phone', 800.0, '1');

        $cart = $this->cart;

        $cart->addProduct($product0);
        $cart->addProduct($product1);

        $cart->reset();

        $this->assertEmpty($cart->getProducts());
    }

    public function testTotal(): void
    {
        $product0 = $this->product;
        $product1 = new Product('Phone', 800.0, '1');

        $cart = $this->cart;

        $cart->addProduct($product0);
        $cart->addProduct($product1);

        $total = $cart->total();

        $this->assertSame(4400.0, $total);
    }
}