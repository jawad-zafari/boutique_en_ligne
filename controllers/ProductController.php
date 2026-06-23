<?php
// Inclure le modèle (pour avoir accès à la fonction getAllProducts)
require_once '../models/Product.php';

// Appeler la fonction du modèle pour obtenir tous les produits
$products = getAllProducts($pdo);


?>