document.getElementById("nombreForm").addEventListener("submit", function(e) {
  e.preventDefault(); // Evita que el form se mande de inmediato

  const nombre = document.getElementById("nombre").value.trim();
  const errorDiv = document.getElementById("errorDiv");
  const okDiv = document.getElementById("okDiv");

  // Regex: solo letras (mayúsculas/minúsculas), tildes y espacios
  const soloLetras = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;

  if (nombre === "" || !soloLetras.test(nombre)) {
    // Nombre inválido
    errorDiv.classList.remove("d-none");
    okDiv.classList.add("d-none");
  } else {
    // Nombre válido
    errorDiv.classList.add("d-none");
    okDiv.classList.remove("d-none");

    // Esperar 3 segundos y enviar el formulario
    setTimeout(() => {
      document.getElementById("nombreForm").submit();
    }, 3000);
  }
});
