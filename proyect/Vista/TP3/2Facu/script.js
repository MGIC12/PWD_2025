document.getElementById('fileForm').addEventListener('submit', function(e) {
            const inputArchivo = document.getElementById('archivo');

            // Limpio clases previas
            inputArchivo.classList.remove('is-invalid', 'is-valid');

            // Validación
            if (inputArchivo.files.length === 0) {
                e.preventDefault();
                inputArchivo.classList.add('is-invalid');
            } else {
                const file = inputArchivo.files[0];
                const allowedExtensions = ["txt"];
                const extension = file.name.split(".").pop().toLowerCase();

                if (!allowedExtensions.includes(extension)) {
                    e.preventDefault();
                    inputArchivo.classList.add('is-invalid');
                } else {
                    inputArchivo.classList.add('is-valid');
                }
            }
        });