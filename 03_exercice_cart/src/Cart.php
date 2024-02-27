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

    public function getProducts(): array
    {
        return $this->products;
    }
}