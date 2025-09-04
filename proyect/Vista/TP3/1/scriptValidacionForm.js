document.getElementById("fileform").addEventListener("submit", function(event) {
    const inputArchivo = document.getElementById("archivo");
    const errorArchivo = document.getElementById("errorArchivo");
    const aciertoArchivo = document.getElementById("aciertoArchivo");

    // limpio mensajes y clases previas
    inputArchivo.classList.remove("is-invalid", "is-valid");
    errorArchivo.textContent = "";
    aciertoArchivo.textContent = "";

    // validaciones
    if (inputArchivo.files.length === 0) {
        event.preventDefault();
        inputArchivo.classList.add("is-invalid");
        errorArchivo.textContent = "Debes seleccionar un archivo.";
    } else {
        // Si hay un archivo, continúo con las demás validaciones
        const file = inputArchivo.files[0]; // tomo el primer archivo
        const maxSize = 2 * 1024 * 1024; // 2MB en bytes
        const allowedExtensions = ["pdf", "doc"];

        // 1️⃣ Validar extensión
        const extension = file.name.split(".").pop().toLowerCase();
        if (!allowedExtensions.includes(extension)) {
            event.preventDefault();
            inputArchivo.classList.add("is-invalid");
            errorArchivo.textContent = "Solo se aceptan archivos .doc o .pdf.";
        } // 2️⃣ Validar tamaño
        else if (file.size > maxSize) {
            event.preventDefault();
            inputArchivo.classList.add("is-invalid");
            errorArchivo.textContent = "El archivo no puede superar los 2MB.";
            return;
        } // Si pasa todas las validaciones
        else {
            
            inputArchivo.classList.add("is-valid");
            aciertoArchivo.textContent = "Archivo válido.";
        }
    }
});