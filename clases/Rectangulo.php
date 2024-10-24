<?php
require_once 'Figura.php';

class Rectangulo extends Figura {
    public $lado2;

    public function __construct($lado1, $lado2) {
        parent::__construct("Rectángulo", $lado1);
        $this->lado2 = $lado2;
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function calcularArea() {
        return $this->lado1 * $this->lado2;
    }

    public function calcularPerimetro() {
        return 2 * ($this->lado1 + $this->lado2);
    }

    public function __toString() {
        return "Tipo de figura: $this->tipoFigura, Lados: $this->lado1, $this->lado2";
    }

    public function __destruct() {
    }
}
?>
