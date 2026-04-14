<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://db.onlinewebfonts.com/c/43c793eb9fcfce5efd986389cceb93d0?family=DIN" rel="stylesheet">
    <link rel="stylesheet" href="boat.css">
    <title>Classe La Fayette</title>
</head>
<body>
    <div class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Classe La Fayette<span class="registered-symbol">®</span></h1>
            <p class="hero-subtitle">Country France</p>
        </div>
    </div>

    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-number">20</div>
            <div class="stat-label">Years Saving Lives</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">25kt</div>
            <div class="stat-label">speed</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">2500t</div>
            <div class="stat-label">weight</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">20</div>
            <div class="stat-label">Frégate</div>
        </div>
    </div>

    <div class="product-container">
        <div class="product-content">
            <h2 class="product-title">Classe La Fayette </h2>
            <img src="images.jpeg" alt="Description de l'image" class="product-image">
            <p class="product-description">
                La classe La Fayette (ou FLF pour Frégate Légère Furtive) est un type de frégates légères furtives construites en France et en service dans la Marine nationale.
            </p>
            <form action="../client/add_to_cart.php" method="post">
                <input type="hidden" name="product_id" value="3">
                <input type="hidden" name="product_name" value="Classe La Fayette">
                <input type="hidden" name="product_price" value="999.99">
                <button type="submit" class="add-to-cart-button">Ajouter au panier</button>
            </form>
        </div>
    </div>
</body>
</html>
