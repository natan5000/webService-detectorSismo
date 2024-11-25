<?php
include 'config.php';

if ($con) {
    echo "Conexión con base de datos exitosa! ";
    
    if (isset($_POST['sensor_value'])) {
        $sensor_value = mysqli_real_escape_string($con, $_POST['sensor_value']);
        echo " Sensor: " . $sensor_value;
        
        $consulta = "INSERT INTO events(sensor_value) VALUES ('$sensor_value')";
        $resultado = mysqli_query($con, $consulta);
        
        if ($resultado) {
            echo " Registro en base de datos OK! ";
        } else {
            echo " Falla! Registro BD: " . mysqli_error($con);
        }
    } else {
        echo "No se recibió valor del sensor.";
    }
} else {
    echo "Falla! conexión con Base de datos: " . mysqli_connect_error();   
}
?>