<?php 

    require_once __DIR__ . '/Product.php';

    class Game extends Product {

        public $material;
        public $strength;

        function __construct (string $_name, string $_description, float $_price, string $_category, string $_material, int $_strength) {
            
            parent::__construct($_name, $_description, $_price, $_category);

            $this->material = $_material;
            $this->strength = $_strength;

        }

    }

?>