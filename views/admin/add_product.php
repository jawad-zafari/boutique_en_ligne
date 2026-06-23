<form action="save_product.php" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl mb-4 font-bold">Ajouter un produit</h2>
    
    <input type="text" name="name" placeholder="Nom du produit" class="w-full border p-2 mb-4" required>
    <input type="number" step="0.01" name="price" placeholder="Prix" class="w-full border p-2 mb-4" required>
    <textarea name="description" placeholder="Description" class="w-full border p-2 mb-4"></textarea>
    <input type="text" name="image_url" placeholder="URL de l'image" class="w-full border p-2 mb-4">
    
    <button type="submit" class="bg-green-500 text-white w-full py-2 rounded">Enregistrer</button>
</form>