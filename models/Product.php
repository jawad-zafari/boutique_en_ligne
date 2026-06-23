<?php
// Inclure la configuration de la base de données
require_once '../config/database.php';

// Fonction simple pour récupérer tous les produits
function getAllProducts($pdo) {
    // Préparer la requête SQL
    $query = "SELECT * FROM products";
    $stmt = $pdo->query($query);
    
    // Retourner les résultats
    return $stmt->fetchAll();
}
?>