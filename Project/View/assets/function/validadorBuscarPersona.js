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
const divNroDniDuenio = document.getElementById("validacionNroDniDuenio");
const nroDniDuenioInvalido = document.getElementById("nroDniDuenioInvalid");
const nroDniDuenioValido = document.getElementById("nroDniDuenioValid");

// Mensaje generico para el input vacio
const mensajeInvalidoVacio = "Este campo no puede estar vacio.";
// Mensaje generico para el input ok
const mensajeValido = "Informacion valida.";

// Regex para nroDni (8 numeros)
const regexDNI = /^\d{8}$/;

// Eventos en tiempo real
divNroDniDuenio.addEventListener("input", () =>
  validarCampo(divNroDniDuenio, nroDniDuenioInvalido, nroDniDuenioValido, regexDNI,
    "Ingrese un numero de DNI valido.", mensajeInvalidoVacio, mensajeValido)
);

// Evento al enviar formulario
document.getElementById("loginForm").addEventListener("submit", function (event) {
    const nroDniDuenioOK = validarCampo(divNroDniDuenio, nroDniDuenioInvalido, nroDniDuenioValido, regexDNI, "Ingrese un numero de DNI valido.", mensajeInvalidoVacio, mensajeValido);

    if (!nroDniDuenioOK) {
        event.preventDefault(); // Evita envío si algún campo está mal
    }
});
