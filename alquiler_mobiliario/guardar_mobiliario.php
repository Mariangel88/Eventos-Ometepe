<?php
require_once 'config/Database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ESTO ES PARA EL ENTREGABLE 1: Demostrar el puente activo
    echo "<h3>Datos recibidos correctamente (Prueba de POST):</h3>";
    echo "<pre>"; print_r($_POST); echo "</pre>";

    $database = new Database();
    $db = $database->getConnection();

    // Captura de datos
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock  = $_POST['stock'];
    $cat    = $_POST['id_categoria'];
    $fecha  = $_POST['fecha'];

    try {
        $query = "INSERT INTO mobiliario (nombre, precio_alquiler, stock, fecha_registro, id_categoria) VALUES (?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        
        if($stmt->execute([$nombre, $precio, $stock, $fecha, $cat])) {
            echo "<p style='color:green;'>✅ Registro guardado en alquiler_db exitosamente.</p>";
            echo "<a href='ver_mobiliario.php'>Ver Inventario</a>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>