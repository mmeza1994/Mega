<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $sql = "INSERT INTO periodistas (nombre, email) VALUES ('$nombre', '$email')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Configuración de PHPTAL
$template = new PHPTAL($templateDir . '/new_journalist.xhtml');

try {
    echo $template->execute();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

$conn->close();
?>
