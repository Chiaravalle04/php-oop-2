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
            echo '<p><b>€' . $this->price . '</b></p>';
            echo '<p><b>Categoria:</b>'. ' ' . $this->category . '</p>';
            echo '<p><b>Tipo:</b>'. ' '  . Game::$type . '</p>';
            echo '<p><b>Materiale:</b>'. ' ' . $this->material . '</p>';
            echo '<p><b>Resistenza:</b>'. ' ' . $this->strength . '</p>';
            
        }

    }

?>