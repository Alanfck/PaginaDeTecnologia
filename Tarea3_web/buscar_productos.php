<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
// Verificar si se ha enviado una consulta de búsqueda
if (isset($_GET['q'])) {
    // Recoger la consulta de búsqueda
    $busqueda = $_GET['q']; //q es lo que se busca

    // Conexión a la base de datos
    $conexion = new mysqli('localhost', 'root', '', 'tienda_tecnologia');

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Preparar la consulta SQL para buscar productos
    $sql = "SELECT * FROM productos WHERE nombre LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%'";

    // Ejecutar la consulta
    $resultados = $conexion->query($sql);

    // Mostrar los resultados de la búsqueda
    echo "<h2>Resultados de la búsqueda:</h2>";

    if ($resultados->num_rows > 0) {
        while ($fila = $resultados->fetch_assoc()) {
            echo "<div class='producto'>";
            echo "<h3>" . $fila['nombre'] . "</h3>";
            echo "<img src='" . $fila['imagen'] . "' alt='" . $fila['nombre'] . "'>";
            echo "<p>" . $fila['descripcion'] . "</p>";
            echo "<p>Especificaciones técnicas: " . $fila['especificaciones'] . "</p>";
            echo "<p>Precio: $" . $fila['precio'] . "</p>";
            echo "</div>";
        }
    } else {
        // Mostrar un mensaje si no se encontraron productos
        echo "<p>No se encontraron productos que coincidan con tu búsqueda.</p>";
    }

    // Cerrar la conexión
    $conexion->close();
}
?>
