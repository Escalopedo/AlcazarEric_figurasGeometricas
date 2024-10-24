<?php
require_once 'Figura.php';

class Triangulo extends Figura {
    public $lado2;
    public $lado3;

    public function __construct($lado1, $lado2, $lado3) {
        parent::__construct("Triángulo", $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function getLado3() {
        return $this->lado3;
    }

    public function setLado3($lado3) {
        $this->lado3 = $lado3;
    }

    public function calcularArea() {
        $area = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
        return sqrt($area * ($area - $this->lado1) * ($area - $this->lado2) * ($area - $this->lado3));
    }

    public function calcularPerimetro() {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

    public function __toString() {
        return "Tipo de figura: $this->tipoFigura, Lados: $this->lado1, $this->lado2, $this->lado3";
    }

    public function __destruct() {
    }
}
?>
