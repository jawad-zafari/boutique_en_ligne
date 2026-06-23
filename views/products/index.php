<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <h1 class="text-3xl font-bold mb-8 text-center">Nos produits</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php foreach ($products as $product): ?>
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="Image du produit" class="w-full h-48 object-cover mb-4">
                <h2 class="text-xl font-semibold"><?= htmlspecialchars($product['name']) ?></h2>
                <p class="text-gray-600"><?= htmlspecialchars($product['description']) ?></p>
                <p class="text-blue-600 font-bold mt-2"><?= $product['price'] ?> €</p>
                <button class="bg-blue-500 text-white px-4 py-2 mt-4 rounded">Ajouter au panier</button>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>