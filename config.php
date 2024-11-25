<?php
// Configuración de la conexión a la base de datos utilizando mysqli
$host = '192.254.233.75';
$userName = 'residssv_arc';
$passWord = 'HU1!hoI#cW3T';
$dbName = 'residssv_eventos_sismicos';

// Crear conexión
$con = mysqli_connect($host, $userName, $passWord, $dbName);

// Verificar conexión
if (!$con) {
    die("Falla en la conexión con la base de datos: " . mysqli_connect_error());
}
?>