document.getElementById("loginForm").addEventListener("submit", function(event) {
// Validacion campo titulo 
    // Obtengo lo necesario para validar
    const divTitulo = document.getElementById("validacionTitulo");
    const titulo = divTitulo.value.trim();
    const errorDivTitulo = document.getElementById("tittleError");
    const aciertoDivTitulo = document.getElementById("tittleValido");
    // Reset previo: limpio estilos y mensajes de error de validaciones anteriores
    divTitulo.style.border = ""; // quito el borde rojo si lo tenía
    divTitulo.classList.remove("is-invalid"); // elimino clase de error de Bootstrap
    errorDivTitulo.textContent = ""; // borro mensaje de error
    divTitulo.classList.remove("is-valid"); // elimino clase de valido de Bootstrap
    aciertoDivTitulo.textContent = ""; // borro mensaje de valido
    // Validaciones de campo
    if (titulo === ""){
        event.preventDefault(); // 🔴 evita que se envíe el form
        //divTitulo.style.border = "2px solid red";
        divTitulo.classList.add("is-invalid");
        errorDivTitulo.textContent = "Este campo, no puede estar vacio.";
    } else if (titulo.length < 3) {
        event.preventDefault(); // 🔴 evita que se envíe el form
        //divTitulo.style.border = "2px solid red";
        divTitulo.classList.add("is-invalid");
        errorDivTitulo.textContent = "El nombre del título debe tener al menos 3 letras.";
    } else {
        // event.preventDefault(); // 🔴 evita que se envíe el form
        //divTitulo.style.border = "2px solid green";
        divTitulo.classList.add("is-valid");
        aciertoDivTitulo.textContent = "Ok.";
    }
// Fin validacion campo titulo
// ----------------- Espacio -----------------
// Validacion campo Actores
    // Obtengo lo necesario para validar
    const divActores = document.getElementById("validacionActores");
    const inputActores = divActores.value.trim();
    const errorDivActores = document.getElementById("actoresError");
    const aciertoDivActores = document.getElementById("actoresValido");
    // Reset previo
    divActores.style.border = ""; 
    divActores.classList.remove("is-invalid"); 
    errorDivActores.textContent = ""; 
    divActores.classList.remove("is-valid"); 
    aciertoDivActores.textContent = "";
    // Validaciones de campo
    if (inputActores === ""){
        event.preventDefault();
        divActores.classList.add("is-invalid");
        errorDivActores.textContent = "Este campo, no puede estar vacio";
    } else {
        // event.preventDefault();
        divActores.classList.add("is-valid");
        aciertoDivActores.textContent = "ok.";
    }
// Fin validacion campo Actores
// ----------------- Espacio -----------------
// Validacion campo Director
    // Obtengo lo necesario para validar
    const divDirector = document.getElementById("validacionDirector");
    const inputDirector = divDirector.value.trim();
    const errorDivDirector = document.getElementById("directorError");
    const aciertoDivDirector = document.getElementById("directorValido");
    // Reset previo
    divDirector.style.border = "";
    divDirector.classList.remove("is-invalid");
    errorDivDirector.textContent = "";
    divDirector.classList.remove("is-valid");
    aciertoDivDirector.textContent = "";
    // Validaciones
    if (inputDirector === ""){
        event.preventDefault();
        divDirector.classList.add("is-invalid");
        errorDivDirector.textContent = "Este campo no puede estar vacio";
    } else {
        divDirector.classList.add("is-valid");
        aciertoDivDirector.textContent = "Este campo esta ok.";
    }
// Fin validacion campo Director
// ----------------- Espacio -----------------
// Validacion campo guion
    // Obtengo lo necesario para validar
    const divGuion = document.getElementById("validacionGuion");
    const inputGuion = divGuion.value.trim();
    const errorDivGuion = document.getElementById("guionError");
    const aciertoDivGuion = document.getElementById("guionValido");
    // Reset previo
    divGuion.style.border = "";
    divGuion.classList.remove ("is-invalid");
    errorDivGuion.textContent = "";
    divGuion.classList.remove ("is-valid");
    aciertoDivGuion.textContent = "";
    // Validaciones
    if (inputGuion === ""){
        event.preventDefault();
        divGuion.classList.add("is-invalid");
        errorDivGuion.textContent = "Este campo no puede estar vacio";
    } else {
        divGuion.classList.add("is-valid");
        aciertoDivGuion.textContent = "Este campo esta ok";
    }
// Fin validacion campo guion
// ----------------- Espacio -----------------
// Validacion campo Produccion
    // Obtengo lo necesario para validar
    const divProduccion = document.getElementById("validacionProduccion");
    const inputProduccion = divProduccion.value.trim();
    const errorDivProduccion = document.getElementById("produccionError");
    const aciertoDivProduccion = document.getElementById("produccionValido");
    // Reset previo
    divProduccion.style.border = "";
    divProduccion.classList.remove ("is-invalid");
    errorDivProduccion.textContent = "";
    divProduccion.classList.remove ("is-valid");
    aciertoDivProduccion.textContent = "";
    // Validaciones
    if (inputProduccion === ""){
        event.preventDefault();
        divProduccion.classList.add("is-invalid");
        errorDivProduccion.textContent = "Este campo no puede estar vacio";
    } else {
        divProduccion.classList.add("is-valid");
        aciertoDivProduccion.textContent = "Este campo produccion esta ok.";
    }
// Fin validacion produccion
// ----------------- Espacio -----------------
// Validacion campo año
    // Obtengo lo necesario para validar
    const divAnio = document.getElementById("validacionAnio");
    const inputAnio = divAnio.value.trim();
    const errorDivAnio = document.getElementById("anioError");
    const aciertoDivAnio = document.getElementById("anioValido");
    // Reset previo
    divAnio.style.border = "";
    divAnio.classList.remove ("is-invalid");
    errorDivAnio.textContent = "";
    divAnio.classList.remove ("is-valid");
    aciertoDivAnio.textContent = "";
    // Validaciones 
    if (inputAnio === ""){
        event.preventDefault();
        divAnio.classList.add("is-invalid");
        errorDivAnio.textContent = "Este campo no puede estar vacio";
    } else if (inputAnio.length !== 4){
        event.preventDefault();
        divAnio.classList.add("is-invalid");
        errorDivAnio.textContent = "Este campo debe contener un año de 4 digitos";
    } else {
        divAnio.classList.add("is-valid");
        aciertoDivAnio.textContent = "Este campo año esta ok.";
    }
// Fin validacion anio
// ----------------- Espacio -----------------
// Validacion campo nacionalidad
    // Obtengo lo necesario para validar
    const divNacionalidad = document.getElementById("validacionNacionalidad");
    const inputNacionalidad = divNacionalidad.value.trim();
    const errorDivNacionalidad = document.getElementById("nacionalidadError");
    const aciertoDivNacionalidad = document.getElementById("nacionalidadValido");
    // Reset previo
    divNacionalidad.style.border = "";
    divNacionalidad.classList.remove ("is-invalid");
    errorDivNacionalidad.textContent = "";
    divNacionalidad.classList.remove ("is-valid");
    aciertoDivNacionalidad.textContent = "";
    // Validacion
    if (inputNacionalidad === ""){
        event.preventDefault();
        divNacionalidad.classList.add("is-invalid");
        errorDivNacionalidad.textContent = "Este campo no puede estar vacio";
    } else {
        divNacionalidad.classList.add("is-valid");
        aciertoDivNacionalidad.textContent = "Este campo Nacionalidad esta ok.";
    }
// Fin validacion nacionalidad
// ----------------- Espacio -----------------
// Validacion campo Genero
    // Obtengo lo necesario para validar
    const divGenero = document.getElementById("validacionGenero");
    const selectGenero = divGenero.value.trim();
    const errorDivGenero = document.getElementById("generoError");
    const aciertoDivGenero = document.getElementById("generoValido");
    // Reset Previo
    divGenero.style.border = "";
    divGenero.classList.remove ("is-invalid");
    errorDivGenero.textContent = "";
    divGenero.classList.remove ("is-valid");
    aciertoDivGenero.textContent = "";
    // Validacion
    if (selectGenero === ""){
        event.preventDefault();
        divGenero.classList.add("is-invalid");
        errorDivGenero.textContent = "Por favor seleccione una opcion";
    } else {
        divGenero.classList.add("is-valid");
        aciertoDivGenero.textContent = "Este campo genero esta ok";
    }
// Fin validacion genero
// ----------------- Espacio -----------------
// Validacion campo Duracion
    // Obtengo lo necesario para validar
    const divDuracion = document.getElementById("validacionDuracion");
    const inputDuracion = divDuracion.value.trim();
    const errorDivDuracion = document.getElementById("duraccionError");
    const aciertoDivDuracion = document.getElementById("duraccionValido");
    // Reset previo
    divDuracion.style.border = "";
    divDuracion.classList.remove ("is-invalid");
    errorDivDuracion.textContent = "";
    divDuracion.classList.remove ("is-valid");
    aciertoDivDuracion.textContent = "";
    // Validaciones
    if (inputDuracion === ""){
        event.preventDefault();
        divDuracion.classList.add("is-invalid");
        errorDivDuracion.textContent = "Este campo no puede quedar vacio";
    } else if (inputDuracion.length > 3){
        event.preventDefault();
        divDuracion.classList.add("is-invalid");
        errorDivDuracion.textContent = "Este campo admite 3 numeros";
    } else {
        divDuracion.classList.add("is-valid");
        aciertoDivDuracion.textContent = "Este campo duracion esta ok";
    }
// Fin validacion duracion
// ----------------- Espacio -----------------
// Validacion campo Restriccion Edad
    // Obtengo lo necesario para validar
    const radiosRestriccion = document.getElementsByName("restriccionEdad");
    const errorDivRestriccion = document.getElementById("restriccionEdadError");
    const aciertoDivRestriccion = document.getElementById("restriccionEdadValido");
    // Reset previo
    errorDivRestriccion.textContent = "";
    aciertoDivRestriccion.textContent = "";
    radiosRestriccion.forEach(radio => {
        radio.classList.remove("is-invalid", "is-valid");
    });
    // Validaciones
    let seleccionado = false;
    radiosRestriccion.forEach(radio => {
        if (radio.checked) {
            seleccionado = true;
        }
    });
    if (!seleccionado) {
        event.preventDefault();
        radiosRestriccion.forEach(radio => radio.classList.add("is-invalid"));
        errorDivRestriccion.textContent = "Debe seleccionar una restricción de edad.";
    } else {
        radiosRestriccion.forEach(radio => radio.classList.add("is-valid"));
        aciertoDivRestriccion.textContent = "Restricción de edad seleccionada correctamente.";
    }
//Fin validación restricción edad
// ----------------- Espacio -----------------
// Validacion campo sinopsis
    // Obtengo lo necesario para validar
    const divSinopsis = document.getElementById("sinopsis");
    const textAreaSinopsis = divSinopsis.value.trim();
    const errorDivSinopsis = document.getElementById("sinopsisError");
    const aciertoDivSinopsis = document.getElementById("sinopsisValido");
    // Reset previo
    divSinopsis.style.border = "";
    divSinopsis.classList.remove ("is-invalid");
    errorDivSinopsis.textContent = "";
    divSinopsis.classList.remove ("is-valid");
    aciertoDivSinopsis.textContent = "";
    // Validacion
    if (textAreaSinopsis === ""){
        event.preventDefault();
        divSinopsis.classList.add("is-invalid");
        errorDivSinopsis.textContent = "Agregue una sinopsis, por favor.";
    } else {
        divSinopsis.classList.add("is-valid");
        aciertoDivSinopsis.textContent = "Sinopsis valida.";
    }
// Fin validacion Sinopsis
});
