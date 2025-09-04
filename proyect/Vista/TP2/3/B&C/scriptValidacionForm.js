document.getElementById("loginForm").addEventListener("submit", function(event) {
    const usuario = document.getElementById("usuario").value.trim();
    const password = document.getElementById("password").value.trim();
    const errorDivUsuario = document.getElementById("usserError");
    const errorDiv = document.getElementById("passwordError");
    let valido = true;

    // Validaciones
    if (usuario.length < 3){
        document.getElementById("usuario").style.border = "solid 1px red";
        document.getElementById("usuario").classList.add("is-invalid");
        errorDivUsuario.textContent = "El nombre de usuario debe tener al menos 3 letras.";
    } else {
        document.getElementById("usuario").style.border = "solid 1px green";
        document.getElementById("usuario").classList.remove("is-invalid");
    }
    if (password.length < 8) {
        errorDiv.textContent = "La contraseña debe tener al menos 8 caracteres.";
        // document.getElementById("password").style.border = "solid red";
        valido = false;
    } else if (password === usuario) {
        errorDiv.textContent = "La contraseña no puede ser igual al nombre de usuario.";
        valido = false;
    } else if (!/[A-Za-z]/.test(password) || !/[0-9]/.test(password)) {
        errorDiv.textContent = "La contraseña debe contener letras y números.";
        valido = false;
    }

    if (!valido) {
        document.getElementById("password").style.border = "solid 1px red";
        event.preventDefault(); // evita que se envíe el formulario
        document.getElementById("password").classList.add("is-invalid");
    } else {
        document.getElementById("password").style.border = "solid 1px green";
        document.getElementById("password").classList.remove("is-invalid");
    }
});