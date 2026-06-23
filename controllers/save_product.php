<?php
require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image_url = $_POST['image_url'];

   
}
?>