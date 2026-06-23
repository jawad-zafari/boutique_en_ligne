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
    
   
    
} catch () {
    
}
?>