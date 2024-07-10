


-- Script para crear la estructura de la base de datos
CREATE DATABASE IF NOT EXISTS mega;

USE mega;

-- Crear tabla para los periodistas
CREATE TABLE IF NOT EXISTS periodistas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

-- Crear tabla para los artículos
CREATE TABLE IF NOT EXISTS articulos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    contenido TEXT NOT NULL,
    periodista_id INT NOT NULL,
    fecha_publicacion DATETIME NOT NULL,
    FOREIGN KEY (periodista_id) REFERENCES periodistas(id) ON DELETE CASCADE
);
