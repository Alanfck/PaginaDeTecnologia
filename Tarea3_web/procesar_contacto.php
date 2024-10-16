<?php

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Conexión a la base de datos
    $conexion = new mysqli('localhost', 'root', '', 'tienda_tecnologia');

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Verificar si se ha enviado la acción y asignarla
    if(isset($_POST['accion'])) {
        $accion = $_POST['accion'];

        // Ejecutar la acción correspondiente
        switch ($accion) {
            case 'actualizarCorreo':
                $idCliente = $_POST['idCliente'];
                $nuevoCorreo = $_POST['nuevoCorreo'];

                // Preparar la consulta SQL para actualizar el correo electrónico
                $sql = "UPDATE clientes SET email='$nuevoCorreo' WHERE id=$idCliente";

                if ($conexion->query($sql) === TRUE) {
                    echo "Correo electrónico actualizado correctamente";
                } else {
                    echo "Error al actualizar el correo electrónico: " . $conexion->error;
                }
                break;

            case 'insertar':
                $nombre = $_POST['nombre'];
                $email = $_POST['email'];
                $comentarios = $_POST['comentarios'];

                // Preparar la consulta SQL para insertar los datos en la tabla
                $sql = "INSERT INTO clientes (nombre, email, comentarios) VALUES ('$nombre', '$email', '$comentarios')";

                // Ejecutar la consulta
                if ($conexion->query($sql) === TRUE) {
                    echo "Los datos fueron guardados";
                } else {
                    echo "Error al insertar los datos en la base de datos: " . $conexion->error;
                }
                break;

            case 'eliminarContacto':
                $idCliente = $_POST['idCliente'];

                // Preparar la consulta SQL para eliminar el contacto
                $sql = "DELETE FROM clientes WHERE id=$idCliente";

                // Ejecutar la consulta
                if ($conexion->query($sql) === TRUE) {
                    echo "Contacto eliminado correctamente";
                } else {
                    echo "Error al eliminar el contacto: " . $conexion->error;
                }
                break;

            case 'eliminarPorNombre':
                $nombreEliminar = $_POST['nombreEliminar'];

                $sql = "DELETE FROM clientes WHERE nombre='$nombreEliminar'";

                if ($conexion->query($sql) === TRUE) {
                    echo "Contacto eliminado correctamente";
                } else {
                    echo "Error al eliminar el contacto: " . $conexion->error;
                }
                break;

            case 'actualizarPorNombre':
                $nombreActualizar = $_POST['nombreActualizar'];
                $nuevoCorreoActualizar = $_POST['nuevoCorreoActualizar'];

                $sql = "UPDATE clientes SET email='$nuevoCorreoActualizar' WHERE nombre='$nombreActualizar'";

                if ($conexion->query($sql) === TRUE) {
                    echo "Correo electrónico actualizado correctamente";
                } else {
                    echo "Error al actualizar el correo electrónico: " . $conexion->error;
                }
                break;

            default:
                echo "Acción no válida";
                break;
        }
    } else {
        echo "No se ha especificado una acción";
    }

    $conexion->close();
}

?>
