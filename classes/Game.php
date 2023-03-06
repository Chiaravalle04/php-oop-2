<?php 

    require_once __DIR__ . '/Product.php';

    class Game extends Product {

        public static $type = 'Gioco';
        public $material;
        public $strength;

        function __construct (string $_image, string $_name, string $_description, float $_price, string $_category, string $_material, int $_strength) {
            
            parent::__construct($_image, $_name, $_description, $_price, $_category);

            $this->material = $_material;
            $this->strength = $_strength;

        }

        public function printImgProduct() {

            echo '<img src="' . $this->image . '" alt="' . $this->name . '">';

        }

        public function printDetailsProduct() {

            echo '<h2>' . $this->name . '</h2>';
            echo '<p>' . $this->description . '</p>';
            echo '<p>€' . $this->price . '</p>';
            echo '<p>Categoria:'. ' ' . $this->category . '</p>';
            echo '<p>Tipo:'. ' '  . Game::$type . '</p>';
            echo '<p>Materiale:'. ' ' . $this->material . '</p>';
            echo '<p>Resistenza:'. ' ' . $this->strength . '</p>';
            
        }

    }

?>