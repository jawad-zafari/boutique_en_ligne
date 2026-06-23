<?php
// Configuration de la connexion à la base de données
$host = 'localhost';
$db   = 'boutique_en_ligne';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// Création du DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    // Initialisation de la connexion PDO
    $pdo = new PDO($dsn, $user, $pass);
    
    // Configuration des erreurs pour le mode exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Configuration pour récupérer les données sous forme de tableau associatif
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    die("Erreur de connexion : " . $e->getMessage());
}
?>