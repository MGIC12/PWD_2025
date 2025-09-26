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
const divPatente = document.getElementById("validacionPatente");
const patenteInvalido = document.getElementById("patenteInvalid");
const patenteValido = document.getElementById("patenteValid");

const divMarca = document.getElementById("validacionMarca");
const marcaInvalido = document.getElementById("marcaInvalid");
const marcaValido = document.getElementById("marcaValid");

const divModelo = document.getElementById("validacionModelo");
const modeloInvalido = document.getElementById("modeloInvalid");
const modeloValido = document.getElementById("modeloValid");

const divNroDniDuenio = document.getElementById("validacionNroDniDuenio");
const nroDniDuenioInvalido = document.getElementById("nroDniDuenioInvalid");
const nroDniDuenioValido = document.getElementById("nroDniDuenioValid");

// Mensaje generico para el input vacio
const mensajeInvalidoVacio = "Este campo no puede estar vacio.";
// Mensaje generico para el input ok
const mensajeValido = "Informacion valida.";

// Regex para patente valida: 3 letras mayusculas, guion -, 3 numeros
const regexPatente = /^[A-Z]{3}-\d{3}$/;
// Regex para marca valida: permite letras,espacios y numeros
const regexMarca = /^[A-Za-z0-9 ]+$/;
// Regex para modelo valido: permite un numero de 4 digitos (anio fabricacion)
const regexModelo = /^\d{4}$/;
// Regex para nroDni (8 numeros)
const regexDNI = /^\d{8}$/;

// Eventos en tiempo real
divPatente.addEventListener("input", () =>
  validarCampo(divPatente, patenteInvalido, patenteValido, regexPatente,
    "Ingrese una patente valida (AAA-123).", mensajeInvalidoVacio, mensajeValido)
);
divMarca.addEventListener("input", () =>
  validarCampo(divMarca, marcaInvalido, marcaValido, regexMarca,
    "Ingrese una marca valida.", mensajeInvalidoVacio, mensajeValido)
);
divModelo.addEventListener("input", () =>
  validarCampo(divModelo, modeloInvalido, modeloValido, regexModelo,
    "Ingrese un modelo valido.", mensajeInvalidoVacio, mensajeValido)
);
divNroDniDuenio.addEventListener("input", () =>
  validarCampo(divNroDniDuenio, nroDniDuenioInvalido, nroDniDuenioValido, regexDNI,
    "Ingrese un numero de DNI valido.", mensajeInvalidoVacio, mensajeValido)
);

// Evento al enviar formulario
document.getElementById("loginForm").addEventListener("submit", function (event) {
    const patenteOK = validarCampo(divPatente, patenteInvalido, patenteValido, regexPatente,"Ingrese una patente valida (AAA-123).", mensajeInvalidoVacio, mensajeValido);

    const marcaOK = validarCampo(divMarca, marcaInvalido, marcaValido, regexMarca,"Ingrese una marca valida.", mensajeInvalidoVacio, mensajeValido);

    const modeloOK = validarCampo(divModelo, modeloInvalido, modeloValido, regexModelo,"Ingrese un modelo valido.", mensajeInvalidoVacio, mensajeValido);

    const nroDniDuenioOK = validarCampo(divNroDniDuenio, nroDniDuenioInvalido, nroDniDuenioValido, regexDNI, "Ingrese un numero de DNI valido.", mensajeInvalidoVacio, mensajeValido);

    if (!patenteOK || !marcaOK || !modeloOK || !nroDniDuenioOK) {
        event.preventDefault(); // Evita envío si algún campo está mal
    }
});
