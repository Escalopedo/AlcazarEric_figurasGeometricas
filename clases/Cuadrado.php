<?php
require_once 'Figura.php';

class Cuadrado extends Figura {

    public function __construct($lado1) {
        parent::__construct("Cuadrado", $lado1);
    }

    public function calcularArea() {
        return $this->lado1 * $this->lado1;
    }

    public function calcularPerimetro() {
        return 4 * $this->lado1;
    }

    public function __toString() {
        return "Tipo de figura: $this->tipoFigura, Lado: $this->lado1";
    }

    public function __destruct() {
    }

}
?>
