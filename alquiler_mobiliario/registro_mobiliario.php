<?php include 'includes/header.php'; ?>
<div class="container" style="max-width: 500px; margin: 20px auto; background: white; padding: 20px; border-radius: 8px; border-top: 5px solid #2d6a4f;">
    <h2 style="color: #0077b6; text-align: center;">🛋️ Nuevo Mobiliario</h2>
    <form action="guardar_mobiliario.php" method="POST">
        <label style="display:block; margin-top:10px;">Nombre del Artículo:</label>
        <input type="text" name="nombre" style="width:100%; padding:8px;" required>

        <label style="display:block; margin-top:10px;">Categoría:</label>
        <select name="id_categoria" style="width:100%; padding:8px;" required>
            <option value="1">Sillas</option>
            <option value="2">Mesas</option>
            <option value="3">Mantelería</option>
            <option value="4">Decoración</option>
        </select>

        <label style="display:block; margin-top:10px;">Precio Alquiler (C$):</label>
        <input type="number" name="precio" step="0.01" style="width:100%; padding:8px;" required>

        <label style="display:block; margin-top:10px;">Stock inicial:</label>
        <input type="number" name="stock" style="width:100%; padding:8px;" required>

        <label style="display:block; margin-top:10px;">Fecha de Ingreso:</label>
        <input type="date" name="fecha" value="<?php echo date('Y-m-d'); ?>" style="width:100%; padding:8px;">

        <button type="submit" style="width:100%; background:#2d6a4f; color:white; border:none; padding:10px; margin-top:20px; cursor:pointer;">Guardar Registro</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>