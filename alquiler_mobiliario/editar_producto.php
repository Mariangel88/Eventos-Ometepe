<?php
require_once 'config/Database.php';
include 'includes/header.php';

$database = new Database();
$db = $database->getConnection();

// Recuperar el producto actual
$id = $_GET['id'];
$stmt = $db->prepare("SELECT * FROM mobiliario WHERE id_producto = ?");
$stmt->execute([$id]);
$p = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="container" style="max-width: 450px; margin: 30px auto; background: white; padding: 25px; border-radius: 8px; border-left: 6px solid #efae06;">
    <h2 style="color: #efae06;">✏️ Editar Producto</h2>
    <form action="actualizar_logica.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $p['id_producto']; ?>">
        
        <label>Nombre del Mobiliario:</label>
        <input type="text" name="nombre" value="<?php echo $p['nombre']; ?>" style="width:100%; padding:10px; margin:10px 0;" required>
        
        <label>Precio (C$):</label>
        <input type="number" name="precio" value="<?php echo $p['precio_alquiler']; ?>" style="width:100%; padding:10px; margin:10px 0;" required>
        
        <label>Cantidad en Stock:</label>
        <input type="number" name="stock" value="<?php echo $p['stock']; ?>" style="width:100%; padding:10px; margin:10px 0;" required>
        
        <button type="submit" style="width:100%; background:#efae06; color:white; border:none; padding:12px; cursor:pointer; font-weight:bold;">GUARDAR CAMBIOS</button>
        <p style="text-align:center;"><a href="ver_mobiliario.php">Cancelar</a></p>
    </form>
</div>