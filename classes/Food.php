<?php 

    require_once __DIR__ . '/Product.php';

    class Food extends Product {

        public static $type = 'Cibo';
        public $size;
        public $productionDate;

        function __construct (string $_image, string $_name, string $_description, float $_price, string $_category, string $_size, int $_productionDate) {
            
            parent::__construct($_image, $_name, $_description, $_price, $_category);

            $this->size = $_size;
            $this->productionDate = $_productionDate;

        }

        public function printImgProduct() {

            echo '<img src="' . $this->image . '" alt="' . $this->name . '">';

        }

        public function printDetailsProduct() {

            echo '<h2>' . $this->name . '</h2>';
            echo '<p>' . $this->description . '</p>';
            echo '<p>€' . $this->price . '</p>';
            echo '<p>Categoria:'. ' ' . $this->category . '</p>';
            echo '<p>Tipo:'. ' ' . Food::$type . '</p>';
            echo '<p>Dimensione:'. ' ' . $this->size . '</p>';
            echo '<p>Anno di produzione:'. ' ' . $this->productionDate . '</p>';
            
        }

    }

?>