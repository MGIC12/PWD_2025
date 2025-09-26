// Función genérica
function validarCampo(inputDiv, divInvalid, divValido, regex, mensajeInvalido, mensajeInputVacio, mensajeValido) {
  let esValido = true;
  const valor = inputDiv.value.trim();

  // Reset previo
  inputDiv.classList.remove("is-invalid", "is-valid");
  divInvalid.textContent = "";
  divValido.textContent = "";

  if (valor === "") {
    inputDiv.classList.add("is-invalid");
    divInvalid.textContent = mensajeInputVacio;
    esValido = false;
  } else if (!regex.test(valor)) {
    inputDiv.classList.add("is-invalid");
    divInvalid.textContent = mensajeInvalido;
    esValido = false;
  } else {
    inputDiv.classList.add("is-valid");
    divValido.textContent = mensajeValido;
  }

  return esValido;
}

// Referencias a los elementos
const divNombre = document.getElementById("validacionNombre");
const nombreInvalido = document.getElementById("nombreInvalid");
const nombreValido = document.getElementById("nombreValid");

const divApellido = document.getElementById("validacionApellido");
const apellidoInvalido = document.getElementById("apellidoInvalid");
const apellidoValido = document.getElementById("apellidoValid");

const divNroDni = document.getElementById("validacionNroDni");
const nroDniInvalido = document.getElementById("nroDniInvalid");
const nroDniValido = document.getElementById("nroDniValid");

const divFechaNacimiento = document.getElementById("validacionFechaNacimiento");
const fechaNacimientoInvalido = document.getElementById("fechaNacimientoInvalid");
const fechaNacimientoValido = document.getElementById("fechaNacimientoValid");

const divNumTelefono = document.getElementById("validacionNumTelefono");
const numTelefonoInvalido = document.getElementById("numTelefonoInvalid");
const numTelefonoValido = document.getElementById("numTelefonoValid");

const divDomicilio = document.getElementById("validacionDomicilio");
const domicilioInvalido = document.getElementById("domicilioInvalid");
const domicilioValido = document.getElementById("domicilioValid");

// Mensaje generico para el input vacio
const mensajeInvalidoVacio = "Este campo no puede estar vacio.";
// Mensaje generico para el input ok
const mensajeValido = "Informacion valida.";

// Regex para nombre/apellido: solo letras y espacios
const regexTexto = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;
// Regex para nroDni (8 numeros)
const regexDNI = /^\d{8}$/;
// Regex para la fecha de nacimiento (AAAA-MM-DD)
const regexFechaNacimiento = /^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/;
//  Regex para el numero de telefono (012-3456789)
const regexNumTelefono = /^\d{3}-\d{7}$/;
//  Regex para el domicilio (calle numero)
const regexDomicilio = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+\s\d+$/;



// Eventos en tiempo real
divNombre.addEventListener("input", () =>
  validarCampo(divNombre, nombreInvalido, nombreValido, regexTexto,
    "Solo letras y espacios.", mensajeInvalidoVacio, mensajeValido)
);

divApellido.addEventListener("input", () =>
  validarCampo(divApellido, apellidoInvalido, apellidoValido, regexTexto,
    "Solo letras y espacios.", mensajeInvalidoVacio, mensajeValido)
);

divNroDni.addEventListener("input", () =>
  validarCampo(divNroDni, nroDniInvalido, nroDniValido, regexDNI,
    "Por favor ingrese un numero de 8 digitos.", mensajeInvalidoVacio, mensajeValido)
);

divFechaNacimiento.addEventListener("input", () =>
  validarCampo(divFechaNacimiento, fechaNacimientoInvalido, fechaNacimientoValido, regexFechaNacimiento,
    "Por favor ingrese una fecha valida (Ejemplo: 2003-03-11).", mensajeInvalidoVacio, mensajeValido)
);

divNumTelefono.addEventListener("input", () =>
  validarCampo(divNumTelefono, numTelefonoInvalido, numTelefonoValido, regexNumTelefono,
    "Por favor ingrese un numero de telefono valido (3 numeros, guion intermedio, 7 numeros).", mensajeInvalidoVacio, mensajeValido)
);

divDomicilio.addEventListener("input", () =>
  validarCampo(divDomicilio, domicilioInvalido, domicilioValido, regexDomicilio,
    "Por favor ingrese un domicilio valido (Ejemplo: Avenida la plata 1010).", mensajeInvalidoVacio, mensajeValido)
);

// Evento al enviar formulario
document.getElementById("loginForm").addEventListener("submit", function (event) {
  const nombreOK = validarCampo(divNombre, nombreInvalido, nombreValido, regexTexto,
    "Solo letras y espacios.", mensajeInvalidoVacio, mensajeValido);

  const apellidoOK = validarCampo(divApellido, apellidoInvalido, apellidoValido, regexTexto,
    "Solo letras y espacios.", mensajeInvalidoVacio, mensajeValido);

  const nroDniOk = validarCampo (divNroDni, nroDniInvalido, nroDniValido, regexDNI,
    "Por favor ingrese solo un numero de 8 digitos.", mensajeInvalidoVacio, mensajeValido);

  const fechaNacimientoOK = validarCampo (divFechaNacimiento, fechaNacimientoInvalido, fechaNacimientoValido, regexFechaNacimiento,
    "Por favor ingrese una fecha valida (Ejemplo: 2003-03-11).", mensajeInvalidoVacio, mensajeValido);

  const numTelefonoOk = validarCampo (divNumTelefono, numTelefonoInvalido, numTelefonoValido, regexNumTelefono,
    "Por favor ingrese un numero de telefono valido (3 numeros, guion intermedio, 7 numeros).", mensajeInvalidoVacio, mensajeValido);

  const domicilioOK = validarCampo (divDomicilio, domicilioInvalido, domicilioValido, regexDomicilio,
    "Por favor ingrese un domicilio valido (Ejemplo: Avenida la plata 1010).", mensajeInvalidoVacio, mensajeValido)

  if (!nombreOK || !apellidoOK || !nroDniOk || !fechaNacimientoOK || !numTelefonoOk || !domicilioOK) {
    event.preventDefault(); // Evita envío si algún campo está mal
  }
});
