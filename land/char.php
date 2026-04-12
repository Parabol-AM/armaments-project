<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://db.onlinewebfonts.com/c/43c793eb9fcfce5efd986389cceb93d0?family=DIN" rel="stylesheet">
    <link rel="stylesheet" href="char.css">
    <title>LEOPARD 2 A7V</title>
</head>
<body>
    <div class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">LEOPARD 2 A7V<span class="registered-symbol">®</span></h1>
            <p class="hero-subtitle">Country Germany</p>
        </div>
    </div>

    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-number">13</div>
            <div class="stat-label">Years Saving Lives</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">70 km/h</div>
            <div class="stat-label">speed</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">69t</div>
            <div class="stat-label">weight</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">5,000+</div>
            <div class="stat-label">Interceptions</div>
        </div>
    </div>

    <div class="product-container">
        <div class="product-content">
            <h2 class="product-title">LEOPARD 2 A7V </h2>
            <img src="images.jpeg" alt="Description de l'image" class="product-image">
            <p class="product-description">
                Le M51 est un missile à trois étages, d'une hauteur de 12 mètres, d'une masse totale supérieure à 50 tonnes (54 maximum, contre 36 tonnes pour le missile M45) qui a été conçu afin de pouvoir être lancé depuis un sous-marin en plongée. Éjecté par un système de chasse à poudre, le missile jaillit de l’eau puis allume son moteur à quelques dizaines de mètres de la surface
            </p>
            <form action="../client/add_to_cart.php" method="post">
                <input type="hidden" name="product_id" value="2">
                <input type="hidden" name="product_name" value="Leopard 2 A7V">
                <input type="hidden" name="product_price" value="999.99">
                <button type="submit" class="add-to-cart-button">Ajouter au panier</button>
            </form>
        </div>
    </div>
</body>
</html>