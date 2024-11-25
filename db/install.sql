-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS events_database;

-- Usar la base de datos
USE events_database;

-- Crear la tabla `events`
CREATE TABLE events (
    id INT(11) NOT NULL AUTO_INCREMENT, -- Columna ID con AUTO_INCREMENT
    sensor_value INT(11) NOT NULL DEFAULT 1, -- Valor del sensor con un valor predeterminado de 1
    date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, -- Fecha con valor predeterminado de la hora actual
    PRIMARY KEY (id) -- Establecer la clave primaria en la columna ID
);