<?php
include 'config.php';

header("Content-Type: application/json");

try {
    // Crear la consulta SQL para obtener los datos
    $sql = "SELECT * FROM events";

    // Ejecutar la consulta
    $result = mysqli_query($con, $sql);

    // Verificar si la consulta fue exitosa
    if ($result) {
        // Convertir los resultados a un array asociativo
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        // Verificar si hay resultados
        if (!empty($data)) {
            // Devolver los datos en formato JSON
            echo json_encode($data);
        } else {
            // No se encontraron datos
            echo json_encode([
                "success" => false,
                "message" => "No se encontraron datos."
            ]);
        }
    } else {
        // Error en la consulta
        echo json_encode([
            "success" => false,
            "message" => "Error en la consulta: " . mysqli_error($con)
        ]);
    }
} catch (Exception $e) {
    // Manejo de errores genéricos
    echo json_encode(["error" => $e->getMessage()]);
    exit;
}