<?php
session_start();

// Procesar la selección de figura
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['figura'] = $_POST['figura']; // Asumiendo que `figura` es el nombre del campo del formulario
    header('Location: introducir_lados.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Figura</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/validaciones.js"></script>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
    <div class="figure-select">
       
    <!-- Cuadrado -->
        <div class="figure-item">
            <form action="index.php" method="post">
                <input type="hidden" name="figura" value="cuadrado">
                <button type="submit">
                    <img src="img/cuadrado.png" alt="Cuadrado">
                </button>
            </form>
        </div>

        <!-- Círculo -->
        <div class="figure-item">
            <form action="index.php" method="post">
                <input type="hidden" name="figura" value="circulo">
                <button type="submit">
                    <img src="img/circulo.png" alt="Círculo">
                </button>
            </form>
        </div>

        <!-- Rectángulo -->
        <div class="figure-item">
            <form action="index.php" method="post">
                <input type="hidden" name="figura" value="rectangulo">
                <button type="submit">
                    <img src="img/rectangulo.webp" alt="Rectángulo">
                </button>
            </form>
        </div>

        <!-- Triángulo -->
        <div class="figure-item">
            <form action="index.php" method="post">
                <input type="hidden" name="figura" value="triangulo">
                <button type="submit">
                    <img src="img/triangulo.png" alt="Triángulo">
                </button>
            </form>
        </div>
    </div>
</body>
</html>
