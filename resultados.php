<?php 
session_start();

// Verificar si se ha seleccionado una figura
if (!isset($_SESSION['figura'])) {
    header('Location: index.php');
    exit();
}

// Verificar si lado1 está definido antes de usarlo (lado1 es obligatorio en todo)
$lado1 = $_SESSION['lado1'] ?? null; // Usar null si no está definido, si no peta al hacerlo en el mismo php
$lado2 = $_SESSION['lado2'] ?? null; 
$lado3 = $_SESSION['lado3'] ?? null; 
$figura = $_SESSION['figura'];

// Requerir las clases correspondientes
require_once 'clases/Cuadrado.php';
require_once 'clases/Rectangulo.php';
require_once 'clases/Triangulo.php';
require_once 'clases/Circulo.php';

switch ($figura) {
    // en el caso que los ladoss que piden esten vacio los llevamos al index.php (validación por si se intenta colar)
    case 'cuadrado':
        if ($lado1 === null) {
            header('Location: index.php');
        }
        $figuraObj = new Cuadrado($lado1);
        break;
    case 'rectangulo':
        if ($lado1 === null || $lado2 === null) {
            header('Location: index.php');
        }
        $figuraObj = new Rectangulo($lado1, $lado2);
        break;
    case 'triangulo':
        if ($lado1 === null || $lado2 === null || $lado3 === null) {
            header('Location: index.php');
        }
        $figuraObj = new Triangulo($lado1, $lado2, $lado3);
        break;
    case 'circulo':
        if ($lado1 === null) {
            header('Location: index.php');
        }
        $figuraObj = new Circulo($lado1);
        break;
}

$area = $figuraObj->calcularArea();
$perimetro = $figuraObj->calcularPerimetro();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="css/resultado.css"> 
</head>
<body>
    <h1>Resultados</h1>
    <div class="resultado">
        <p><?php echo $figuraObj; ?></p>
        <p>Área: <?php echo $area; ?></p>
        <p>Perímetro: <?php echo $perimetro; ?></p>
        <a href="index.php" class="button">VOLVER</a>
    </div>
</body>
</html>
