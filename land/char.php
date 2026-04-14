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
            <div class="stat-number">40</div>
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
            <div class="stat-label">MBT</div>
        </div>
    </div>

    <div class="product-container">
        <div class="product-content">
            <h2 class="product-title">LEOPARD 2 A7V </h2>
            <img src="images.jpeg" alt="Description de l'image" class="product-image">
            <p class="product-description">
                Le Leopard 2a7v version modernisé du Leopard 2 est un char de combat principal utilisé a travers le monde entier, doté d'un cannon a âme lisse de 120mm, le cannon peut tirer tout type d'obus
            </p>
            <form action="../client/add_to_cart.php" method="post">
                <input type="hidden" name="product_id" value="2">
                <input type="hidden" name="product_name" value="Leopard 2 A7V">
                <input type="hidden" name="product_price" value="999.99">
                <button type="submit" class="add-to-cart-button">Ajouter au panier</button>
            </form>
        </div>
    </div>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://db.onlinewebfonts.com/c/43c793eb9fcfce5efd986389cceb93d0?family=DIN" rel="stylesheet">
    <link rel="stylesheet" href="missile.css">
    <title>M 51</title>
</head>
<body>
    <div class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">M 51<span class="registered-symbol">®</span></h1>
            <p class="hero-subtitle">Country France</p>
        </div>
    </div>

    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-number">13</div>
            <div class="stat-label">Years Saving Lives</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">360<sup>°</sup></div>
            <div class="stat-label">Hemispheric Coverage</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">&gt;90%</div>
            <div class="stat-label">Success Rate</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">5,000+</div>
            <div class="stat-label">SLBM</div>
        </div>
    </div>

    <div class="product-container">
        <div class="product-content">
            <h2 class="product-title">missile M51 </h2>
            <img src="m51_scanline_01.jpg" alt="Description de l'image" class="product-image">
            <p class="product-description">
                Le M51 est un missile à trois étages, d'une hauteur de 12 mètres, d'une masse totale supérieure à 50 tonnes (54 maximum, contre 36 tonnes pour le missile M45) qui a été conçu afin de pouvoir être lancé depuis un sous-marin en plongée. Éjecté par un système de chasse à poudre, le missile jaillit de l’eau puis allume son moteur à quelques dizaines de mètres de la surface
            </p>
            <form action="../client/add_to_cart.php" method="post">
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="M51">
                <input type="hidden" name="product_price" value="5.4 millions de dollars">
                <button type="submit" class="add-to-cart-button">Ajouter au panier</button>
            </form>
        </div>
    </div>
    <div id="map" style="height: 400px; margin: 20px 0;"></div>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    const map = L.map('map').setView([50.583225, 9.692516], 5);
    L.tileLayer('https://{s}.tile.openstreetmap.org/%7Bz%7D/%7Bx%7D/%7By%7D.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    L.marker([50.583225, 9.692516]).addTo(map)
        .bindPopup("Déploiement en Allemagne")
        .openPopup();
</script>
</body>
</html>
</body>
</html>
