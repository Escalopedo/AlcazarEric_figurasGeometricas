<?php
require_once 'Figura.php';

class Circulo extends Figura {
    public function __construct($radio) {
        parent::__construct("Círculo", $radio);
    }

    public function calcularArea() {
        return pi() * pow($this->lado1, 2);
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->lado1;
    }

    public function __toString() {
        return "Tipo de figura: $this->tipoFigura, Radio: $this->lado1";
    }

    public function __destruct() {
    }
}
?>
