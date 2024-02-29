<?php

use PHPUnit\Framework\TestCase;
use App\Product;

class ProductTest extends TestCase {

    protected Product $product;
    
    public function setUp(): void {
        $this->product = new Product('Laptop', 800.0, 2);
    }

    public function testGetName() {
        $this->assertSame('Laptop', $this->product->getName());
    }

    public function testGetTotalPrice() {
        $this->assertSame(1600.0, $this->product->getTotalPrice());
    }
}