// Referencia a los elementos
const divNroDni = document.getElementById("validacionNroDni");
const nroDniInvalido = document.getElementById("nroDniInvalid");
const nroDniValido = document.getElementById("nroDniValid");

// Función para ejecutar la validación 
function validarNroDni() {
    // Inicializo mi bandera como true
    let esValido = true; 
    // Guardo el valor del input
    const nroDni = divNroDni.value.trim();
    // Reset previo
    divNroDni.classList.remove("is-invalid", "is-valid");
    nroDniInvalido.textContent = "";
    nroDniValido.textContent = "";

    // Validaciones
    if (nroDni === "") {
        divNroDni.classList.add("is-invalid");
        nroDniInvalido.textContent = "Este campo no puede estar vacío.";
        esValido = false;
    } else {
        // Regex para nroDni (8 numeros)
        const regexDNI = /^\d{8}$/;
        if (!regexDNI.test(nroDni)) {
            divNroDni.classList.add("is-invalid");
            nroDniInvalido.textContent = "Formato invalido, por favor ingrese un numero de 8 digitos.";
            esValido = false;
        } else {
            divNroDni.classList.add("is-valid");
            patenteValido.textContent = "Numero de DNI válido.";
        }
    }
    return esValido;
}

// Evento en tiempo real
divNroDni.addEventListener("input", validarNroDni);

// Evento al enviar formulario
document.getElementById("loginForm").addEventListener("submit", function (event) {
    if (!validarNroDni()) {
    event.preventDefault(); // Evita envío si está mal
    }
});
