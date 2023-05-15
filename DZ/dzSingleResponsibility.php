<?php
class Product {
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description) {
      $this->name = $name;
      $this->price = $price;
      $this->description = $description;
    }

    public function get($name) {
      return $this->$name;
    }

    public function set($name, $value) {
      $this->$name = $value;
    }
  }

  class ProductHandler {
    public function save(Product $product) {
    }

    public function update(Product $product) {
    }

    public function delete(Product $product) {
    }
  }

  class ProductOutput {
    public function show(Product $product) {
    }

    public function print(Product $product) {
    }
  }
