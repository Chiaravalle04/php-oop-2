<?php 

    require_once __DIR__ . '/Product.php';

    class Kennel extends Product {

        public static $type = 'Cuccia';
        public $material;
        public $size;

        function __construct (string $_image, string $_name, string $_description, float $_price, string $_category, string $_material, string $_size) {
            
            parent::__construct($_image, $_name, $_description, $_price, $_category);

            $this->material = $_material;
            $this->size = $_size;

        }

        public function printImgProduct() {

            echo '<img src="' . $this->image . '" alt="' . $this->name . '">';

        }

        public function printDetailsProduct() {

            echo '<h2>' . $this->name . '</h2>';
            echo '<p>' . $this->description . '</p>';
            echo '<p>€' . $this->price . '</p>';
            echo '<p>Categoria:'. ' ' . $this->category . '</p>';
            echo '<p>Tipo:'. ' '  . Kennel::$type . '</p>';
            echo '<p>Materiale:'. ' ' . $this->material . '</p>';
            echo '<p>Dimensioni:'. ' ' . $this->size . '</p>';
            
        }

    }

?>