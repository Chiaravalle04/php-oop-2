<?php 

    require_once __DIR__ . '/Product.php';

    class Food extends Product {

        public $size;
        public $productionDate;

        function __construct (string $_name, string $_description, float $_price, string $_category, string $_size, int $_productionDate) {
            
            parent::__construct($_name, $_description, $_price, $_category);

            $this->size = $_size;
            $this->productionDate = $_productionDate;

        }

    }

?>