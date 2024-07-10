<?php
require 'config.php';

// Obtener los artículos de la base de datos
$sql = "SELECT a.id, a.titulo, a.contenido, p.nombre AS periodista, a.fecha_publicacion 
        FROM articulos a 
        JOIN periodistas p ON a.periodista_id = p.id";
$result = $conn->query($sql);

$articulos = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $articulos[] = $row;
    }
}

// Configuración de PHPTAL
$template = new PHPTAL($templateDir . '/index.xhtml');
$template->articulos = $articulos;

try {
    echo $template->execute();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

$conn->close();
?>
