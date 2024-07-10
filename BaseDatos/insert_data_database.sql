-- Script para llenar la base de datos con datos iniciales

USE mega;

-- Insertar datos en la tabla de periodistas
INSERT INTO periodistas (nombre, email) VALUES
('Miguel Meza', 'mmeza@example.com'),
('Pedro Rojas', 'projas@example.com'),
('Juan Perez', 'jperez@example.com');

-- Insertar datos en la tabla de artículos
INSERT INTO articulos (titulo, contenido, periodista_id, fecha_publicacion) VALUES
('Renuncia', 'Debido a los abusos', 1, NOW()),
('Futbol', 'Gole que generan felicidad', 2, NOW()),
('Respetuoso', 'El trato correcto de las personas', 1, NOW());
