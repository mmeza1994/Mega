<?php
require 'vendor/autoload.php';

use PHPTAL\PHPTAL;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mega";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Configuración de PHPTAL
$templateDir = 'templates';
?>
