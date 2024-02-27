<?php

namespace App;

class Cart {
    private array $products = [];

    public function addProduct(Product $product): void 
    {
        $this->products[] = $product;
    }

    public function removeProduct(string $productName): void 
    {
        foreach($this->products as $key => $product) {
            if($product->getName() === $productName) {
                unset($this->products[$key]);
                $this->products = array_values($this->products);
                break;
            }
        }
    }

    public function reset(): void 
    {
        $this->products = [];
    }

    public function total(): float
    {
        $total = 0;
        foreach($this->products as $product) {
            $total += $product->getTotalPrice();
        }
        return $total;
    }
}

class Product {
    public function __construct(private string $name, private float $price, private int $quantity) {}
    
    public function getName(): string
    {
        return $this->name;
    }

    public function getTotalPrice(): float 
    {
        return $this->price * $this->quantity;
    }
}