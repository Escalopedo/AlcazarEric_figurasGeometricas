// Función para validar cada campo de entrada
function validarCampo(id) {
    const input = document.getElementById(id);
    const errorDiv = document.getElementById(`error-${id}`);
    const value = input.value.trim();  // Elimina espacios en blanco

    // Limpiar el mensaje de error y restaurar el borde
    errorDiv.innerHTML = '';
    input.style.borderColor = 'white'; // Volver al borde original

    // Validación: el campo está vacío
    if (value === '') {
        errorDiv.innerHTML = 'El campo no puede estar vacío';
        errorDiv.style.color = 'red';
        input.style.borderColor = 'red';
        return false; // Indica que el campo no es válido
    }

    // Validación: el valor es menor a 0
    if (value < 0) {
        errorDiv.innerHTML = 'El valor no puede ser negativo';
        errorDiv.style.color = 'red';
        input.style.borderColor = 'red';
        return false; // Indica que el campo no es válido
    }

    // Validación: si el valor contiene letras o caracteres no numéricos
    if (isNaN(value)) {
        errorDiv.innerHTML = 'El valor debe ser numérico';
        errorDiv.style.color = 'red';
        input.style.borderColor = 'red';
        return false; // Indica que el campo no es válido
    }
    
    return true; // Todo está bien
}

// Función para validar antes de enviar el formulario
function validarAntesDeEnviar(event) {
    const inputs = document.querySelectorAll('input[type="number"]');
    let hayErrores = false;

    inputs.forEach(input => {
        if (!validarCampo(input.id)) {
            hayErrores = true; // Si hay algún error, marca como verdadero
        }
    });

    // Si hay errores, evitar el envío del formulario
    if (hayErrores) {
        event.preventDefault(); // Previene el envío del formulario
    }
}
