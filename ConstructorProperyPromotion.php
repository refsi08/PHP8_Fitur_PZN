<?php
class Product
{
    // langsung membuat properti di constructor nya
    public function __construct(
        public string $id,
        public string $name,
        public int $price = 0,
        public int $quantity = 5,
        private bool $expensive = false
    ) {
    }
}

$product = new Product(id: "1", name: "Mie Ayam", price: 1500000);
var_dump($product);
