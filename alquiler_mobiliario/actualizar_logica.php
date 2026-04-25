<?php
require_once 'config/Database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = (new Database())->getConnection();
    $sql = "UPDATE mobiliario SET nombre=?, precio_alquiler=?, stock=? WHERE id_producto=?";
    $stmt = $db->prepare($sql);
    if($stmt->execute([$_POST['nombre'], $_POST['precio'], $_POST['stock'], $_POST['id']])) {
        header("Location: ver_mobiliario.php");
    }
}
?>