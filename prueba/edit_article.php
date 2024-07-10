<?php
require 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST['titulo'];
        $contenido = $_POST['contenido'];
        $periodista_id = $_POST['periodista'];

        $sql = "UPDATE articulos SET titulo='$titulo', contenido='$contenido', periodista_id='$periodista_id' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $sql = "SELECT * FROM articulos WHERE id='$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $articulo = $result->fetch_assoc();
        } else {
            echo "Artículo no encontrado.";
            exit();
        }

        $sql = "SELECT id, nombre FROM periodistas";
        $result = $conn->query($sql);

        $periodistas = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $periodistas[] = $row;
            }
        }
    }
} else {
    echo "ID de artículo no proporcionado.";
    exit();
}

// Configuración de PHPTAL
$template = new PHPTAL($templateDir . '/edit_article.xhtml');
$template->articulo = $articulo;
$template->periodistas = $periodistas;

try {
    echo $template->execute();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

$conn->close();
?>
