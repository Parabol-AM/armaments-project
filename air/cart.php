<?php
session_start();
ini_set('display_errors', 1); // Pour le debug
?>
<html>
    <head>
        <title>Mon Panier</title>
    </head>
    <body>
        <!-- pour afficher le panier -->
        <h1>Mon Panier</h1>
        <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
            <form action="valider_panier.php" method="post">
                <ul>
                    <?php foreach ($_SESSION['cart'] as $item): ?>
                        <li>
                            <input type="hidden" name="articles[]" value="<?php echo htmlspecialchars($item['name']); ?>">
                            <input type="hidden" name="prix[]" value="<?php echo $item['price']; ?>">
                            <?php echo htmlspecialchars($item['name']); ?> - <?php echo $item['price']; ?> €
                        </li>
                    <?php endforeach; ?>
                </ul>
                <button type="submit">Effectuer un devis</button>
            </form>
        <?php else: ?>
            <p>Votre panier est vide.</p>
        <?php endif; ?>
    </body>
</html>