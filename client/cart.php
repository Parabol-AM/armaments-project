<?php
session_start();
ini_set('display_errors', 1); // Pour le debug
?>
<html>
    <html>
    <head>
        <title>Mon Panier</title>
        <style>
            /* Réinitialisation basique et police */
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                line-height: 1.6;
                color: antiquewhite;
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                background-color: #1a1a1a;;
            }

            h1 {
                color: antiquewhite;
                text-align: center;
                margin-bottom: 30px;
                font-size: 2em;
            }

            /* Style pour la liste du panier */
            ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
                background: #1a1a1a;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }

            li {
                padding: 12px 0;
                border-bottom: 1px solid #eee;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            li:last-child {
                border-bottom: none;
            }

            /* Style pour le bouton */
            button {
                background-color: transparent;
                color: antiquewhite;
                border: 2px solid #e8c84a;
                padding: 1rem 2rem;
                font-size: 1.1rem;
                font-family: "DIN", sans-serif;
                text-transform: uppercase;
                letter-spacing: 1px;
                cursor: pointer;
                transition: all 0.3s ease;
                width: fit-content;
            }

            button:hover {
                background-color: #e8c84a;
                color: #1a1a1a;
            }

            /* Style pour le message "panier vide" */
            p {
                text-align: center;
                font-style: italic;
                color: #7f8c8d;
                padding: 20px;
                background: white;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            /* Responsive */
            @media (max-width: 600px) {
                body {
                    padding: 10px;
                }
                li {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 5px;
                }
            }
        </style>

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