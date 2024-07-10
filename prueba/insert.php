<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $periodista_id = $_POST['periodista'];
    $fecha_publicacion = date('Y-m-d H:i:s');

    $sql = "INSERT INTO articulos (titulo, contenido, periodista_id, fecha_publicacion)
    VALUES ('$titulo', '$contenido', '$periodista_id', '$fecha_publicacion')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $sql = "SELECT id, nombre FROM periodistas";
    $result = $conn->query($sql);

    $periodistas = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $periodistas[] = $row;
        }
    }
}

// Configuración de PHPTAL
$template = new PHPTAL($templateDir . '/insert.xhtml');
$template->periodistas = $periodistas;

try {
    echo $template->execute();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

$conn->close();
?>
