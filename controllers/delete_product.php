<?php
require_once '../config/database.php';

// Vérifier si un ID est présent dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Préparer la requête de suppression
    $query = "DELETE FROM products WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);

    // Rediriger vers la page principale après la suppression
    header("Location: ../views/products/index.php");
    exit();
}
?>