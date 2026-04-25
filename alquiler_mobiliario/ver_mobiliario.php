<?php 
require_once 'config/Database.php';
include 'includes/header.php'; 

// 1. Inicializar conexión correctamente para evitar el error de variable indefinida
$database = new Database();
$db = $database->getConnection();
?>

<div class="container" style="max-width: 1000px; margin: 20px auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
    <h2 style="text-align:center; color: #0077b6;">📊 Gestión de Inventario - Eventos Ometepe</h2>
    
    <table style="width:100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr style="background: #0077b6; color: white;">
                <th style="padding:12px; border:1px solid #ddd;">ID</th>
                <th style="padding:12px; border:1px solid #ddd;">Producto</th>
                <th style="padding:12px; border:1px solid #ddd;">Precio</th>
                <th style="padding:12px; border:1px solid #ddd;">Stock</th>
                <th style="padding:12px; border:1px solid #ddd;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Consulta para traer los datos
            $stmt = $db->query("SELECT * FROM mobiliario");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr style='text-align:center;'>";
                echo "<td style='padding:10px; border:1px solid #ddd;'>{$row['id_producto']}</td>";
                echo "<td style='padding:10px; border:1px solid #ddd;'>{$row['nombre']}</td>";
                echo "<td style='padding:10px; border:1px solid #ddd;'>C$ ".number_format($row['precio_alquiler'], 2)."</td>";
                echo "<td style='padding:10px; border:1px solid #ddd;'>{$row['stock']}</td>";
                echo "<td style='padding:10px; border:1px solid #ddd;'>
                        <a href='editar_producto.php?id={$row['id_producto']}' style='color: #efae06; text-decoration:none; margin-right:10px;'>✏️ Editar</a>
                        <a href='eliminar_logica.php?id={$row['id_producto']}' onclick='return confirm(\"¿Estás segura de eliminar este producto?\")' style='color: #d90429; text-decoration:none;'>🗑️ Eliminar</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php include 'includes/footer.php'; ?>