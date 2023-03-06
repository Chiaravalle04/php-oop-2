<?php 

    require_once __DIR__ . '/Product.php';

    class Kennel extends Product {

        public $material;
        public $size;

        function __construct (string $_name, string $_description, float $_price, string $_category, string $_material, string $_size) {
            
            parent::__construct($_name, $_description, $_price, $_category);

            $this->material = $_material;
            $this->size = $_size;

        }

    }

?>