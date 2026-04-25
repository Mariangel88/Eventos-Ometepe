<?php
require_once 'config/Database.php';
if (isset($_GET['id'])) {
    $db = (new Database())->getConnection();
    $stmt = $db->prepare("DELETE FROM mobiliario WHERE id_producto = ?");
    if($stmt->execute([$_GET['id']])) {
        header("Location: ver_mobiliario.php");
    }
}
?>