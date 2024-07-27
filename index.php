<?php
 require "autoload.php";


 //A class for working with a product
class Product {
    public function get($name) {
        /////////////
    }
    public function set($name, $value) {
        /////////////
    }
    public function save() {
        //////////////
    }
    public function update() {
        /////////////
    }
    public function delete() {
        ////////////////
    }
}

//Class for processing the product
class ProductProcessor {
    protected $product;

    public function __construct(Product $product) {
        $this->product = $product;
    }

    public function process() {
        ///////////
    }
}

//Class for outputting the product
class ProductRenderer {
    protected $product;

    public function __construct(Product $product) {
        $this->product = $product;
    }

    public function show() {
            ///////////
    }
    public function prints() {
        ///////////
    }
}



