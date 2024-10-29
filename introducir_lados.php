<?php
session_start();

// Verificar si se ha seleccionado una figura en la sesión
if (!isset($_SESSION['figura'])) {
    // Si no hay figura seleccionada, redirigir al usuario a la página principal
    header('Location: index.php');
    exit();
}

$figura = $_SESSION['figura'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['lado1'] = $_POST['lado1'];
    header('Location: resultados.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducir Lados</title>
    <link rel="stylesheet" href="css/lados.css">
    <script src="js/validacion.js" ></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <h1>Introducir lados:</h1>
    <form id="formulario" action="resultados.php" method="post">
        
        <!-- Caso para Cuadrado -->
        <?php if ($figura == 'cuadrado') { ?>
            <label for="lado1">Introduce el lado del cuadrado:</label><br><br>
            <input type="number" name="lado1" id="lado1" onblur="validarCampo('lado1')">
            <div id="error-lado1" class="error-message"></div> 
        <?php } ?>
        
        <!-- Caso para Círculo -->
        <?php if ($figura == 'circulo') { ?>
            <label for="lado1">Introduce el radio del círculo:</label><br><br>
            <input type="number" name="lado1" id="lado1" onblur="validarCampo('lado1')">
            <div id="error-lado1" class="error-message"></div> 
        <?php } ?>

        <!-- Caso para Rectángulo -->
        <?php if ($figura == 'rectangulo') { ?>
            <label for="lado1">Introduce el lado 1 del rectángulo:</label><br><br>
            <input type="number" name="lado1" id="lado1" onblur="validarCampo('lado1')">
            <div id="error-lado1" class="error-message"></div> 
            <br><br>
            <label for="lado2">Introduce el lado 2 del rectángulo:</label><br><br>
            <input type="number" name="lado2" id="lado2" onblur="validarCampo('lado2')">
            <div id="error-lado2" class="error-message"></div> 
        <?php } ?>

        <!-- Caso para Triángulo -->
        <?php if ($figura == 'triangulo') { ?>
            <label for="lado1">Introduce el lado 1 del triángulo:</label><br><br>
            <input type="number" name="lado1" id="lado1" onblur="validarCampo('lado1')">
            <div id="error-lado1" class="error-message"></div> 
            <br><br>
            <label for="lado2">Introduce el lado 2 del triángulo:</label><br><br>
            <input type="number" name="lado2" id="lado2" onblur="validarCampo('lado2')">
            <div id="error-lado2" class="error-message"></div> 
            <br><br>
            <label for="lado3">Introduce el lado 3 del triángulo:</label><br><br>
            <input type="number" name="lado3" id="lado3" onblur="validarCampo('lado3')">
            <div id="error-lado3" class="error-message"></div> 
        <?php } ?>

        <br><br>

        <!-- Caso para Trapecio -->
        <?php if ($figura == 'trapecio') { ?>
            <label for="lado1">Introduce el largo menor :</label><br><br>
            <input type="number" name="lado1" id="lado1" onblur="validarCampo('lado1')">
            <div id="error-lado1" class="error-message"></div> 
            <br><br>
            <label for="lado2">Introduce el largo mayor:</label><br><br>
            <input type="number" name="lado2" id="lado2" onblur="validarCampo('lado2')">
            <div id="error-lado2" class="error-message"></div> 
            <br><br>
            <label for="lado3">Introduce la altura:</label><br><br>
            <input type="number" name="lado3" id="lado3" onblur="validarCampo('lado3')">
            <div id="error-lado3" class="error-message"></div> 
        <?php } ?>

        <br><br>

        <input type="submit" value="Calcular" onclick="validarAntesDeEnviar(event)">
    </form>
</body>
</html>
