# Documentación ABM Persona

## Descripción
¿Qué es un ABM?

Un ABM es un conjunto de operaciones estándar que toda aplicación con base de datos suele necesitar:

Alta → Insertar un nuevo registro.

Baja → Eliminar un registro existente.

Modificación → Actualizar datos de un registro.

(Buscar/Listar) → Recuperar registros según criterios.

Este abmPersona actúa como una capa intermedia entre tu aplicación y el modelo Persona.
👉 El modelo Persona sabe cómo hablar con la base de datos (insertar, modificar, eliminar, etc.).
👉 El abmPersona se encarga de recibir datos externos (arreglos asociativos con parámetros) y traducirlos a objetos Persona.

## Métodos

### buscar($param)
- Construye una cláusula WHERE en SQL en base a los parámetros recibidos.

### cargarObjeto($param)
- Recibe un array asociativo (ej: ["NroDni"=>123 "Apellido"=>"Perez", ...]).
- Verifica que estén todos los campos requeridos.
    - Si están, construye un objeto Persona y lo inicializa con setear(...).
👉 Esto se usa cuando querés crear o modificar un registro completo.

### seteadosCamposClaves($param)
- Verifica si en $param está presente la clave primaria (NroDni).
- Sirve para asegurarse de que se puede identificar un registro.

### cargarObjetoConClave($param)
- Similar al anterior, pero solo setea el atributo clave (NroDni) Lo demás se deja null.
👉 Esto es útil en bajas o búsquedas por clave, donde solo hace falta el identificador.

### modificacion($param)
- Primero busca si existe la persona con ese NroDni.
- Si existe:
    - Crea un objeto Persona.
    - Le carga todos los datos nuevos (setear(...)).
    - Llama a $objPersona->modificar() para que se actualice en la BD.
    - Devuelve true/false según si se pudo modificar.

### baja($param)
- Verifica que se haya pasado un NroDni.
- Crea un objeto Persona con solo ese DNI (cargarObjetoConClave).
- Llama a $objPersona->eliminar() para borrarlo de la BD.

### alta($param)
- Antes de insertar, se fija si ya existe alguien con ese mismo NroDni.
- Si no existe:
    - Crea el objeto Persona con todos los datos (cargarObjeto).
    - Llama a insertar() en la BD.
    - Devuelve true/false según si se pudo insertar.


