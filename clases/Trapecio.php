<?php
require_once 'Figura.php';

class Trapecio extends Figura {
    public $lado2;
    public $lado3;

    public function __construct($lado1, $lado2, $lado3) {
        parent::__construct("Trapecio", $lado1);
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

    // 

    public function calcularArea() {
        $area = (($this->lado1 + $this->lado2)/2)*$this->lado3;
        return $area;
    }

    public function calcularPerimetro() {
        return ($this->lado1 + $this->lado2) * $this->lado3;
    }

    public function __toString() {
        return "Tipo de figura: $this->tipoFigura, Lados: $this->lado1, $this->lado2, $this->lado3";
    }

    public function __destruct() {
    }
}
?>
