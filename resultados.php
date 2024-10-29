<?php 
session_start();


// Guardar lados en la sesión desde el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['lado1'] = $_POST['lado1'] ?? null;
    $_SESSION['lado2'] = $_POST['lado2'] ?? null;
    $_SESSION['lado3'] = $_POST['lado3'] ?? null;

}

// Verificar si lado1 está definido y los demás
$lado1 = $_SESSION['lado1'] ?? null; 
$lado2 = $_SESSION['lado2'] ?? null; 
$lado3 = $_SESSION['lado3'] ?? null; 
$figura = $_SESSION['figura'];

if (!isset($_SESSION['lado1'])) {
    // Si no hay lado1 seleccionada, redirigir al usuario a la página principal
    header('Location: index.php');
    exit();
}

require_once 'clases/Cuadrado.php';
require_once 'clases/Rectangulo.php';
require_once 'clases/Triangulo.php';
require_once 'clases/Circulo.php';
require_once 'clases/Trapecio.php';

switch ($figura) {
    case 'cuadrado':
        if ($lado1 === null) {
            header('Location: index.php');
            exit();
        }
        $figuraObj = new Cuadrado($lado1);
        break;
    case 'rectangulo':
        if ($lado1 === null || $lado2 === null) {
            header('Location: index.php');
            exit();
        }
        $figuraObj = new Rectangulo($lado1, $lado2);
        break;
    case 'triangulo':
        if ($lado1 === null || $lado2 === null || $lado3 === null) {
            header('Location: index.php');
            exit();
        }
        $figuraObj = new Triangulo($lado1, $lado2, $lado3);
        break;
    case 'circulo':
        if ($lado1 === null) {
            header('Location: index.php');
            exit();
        }
        $figuraObj = new Circulo($lado1);
        break;
        case 'trapecio':
            if ($lado1 === null || $lado2 === null || $lado3 === null) {
                header('Location: index.php');
                exit();
            }
            $figuraObj = new Trapecio($lado1,$lado2,$lado3);
            break;
}

// Calcular área y perímetro
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
        <p><?php echo get_class($figuraObj); ?></p> <!-- Aquí se muestra la clase de la figura -->
        <p>Área: <?php echo $area; ?></p>
        <p>Perímetro: <?php echo $perimetro; ?></p>
        <a href="index.php" class="button">VOLVER</a>
    </div>
</body>
</html>
