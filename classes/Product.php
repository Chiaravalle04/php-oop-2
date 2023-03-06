<?php

    class Product {

        public $image;
        public $name;
        public $description;
        public $price;
        public $category;

        function __construct (string $_image, string $_name, string $_description, float $_price, string $_category) {
        
            $this->image = $_image;
            $this->name = $_name;
            $this->description = $_description;
            $this->price = $_price;
            $this->category = $_category;

        }


    }

?>