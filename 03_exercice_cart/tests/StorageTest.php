<?php

use PHPUnit\Framework\TestCase;
use App\Storage;
use App\Product;

class StorageTest extends TestCase {
    public function testAdd() {
        $product = new Product('Phone', 800.0, 1);
        $storage = new Storage;

        $storage->add($product);

        $this->assertContains($product, $storage->getProducts());
    }
}