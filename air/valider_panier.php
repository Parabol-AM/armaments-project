<?php
session_start();

// sa fonctione normalement mais j'ai pas fait de db car j'avais la flm
//faut remplir les bailles en dessous
$host = 'localhost';
$dbname = '';
$username = '';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $articles = $_POST['articles'] ?? [];
    $prix = $_POST['prix'] ?? [];
//si tu fais une db faut que t'appelle bien la table panier et les collones nom_article et prix ou change le code 
    for ($i = 0; $i < count($articles); $i++) {
        $stmt = $pdo->prepare("INSERT INTO panier (nom_article, prix) VALUES (?, ?)");
        $stmt->execute([$articles[$i], $prix[$i]]);
    }

    echo "Votre devis a été accepté, vous serez contacté sous peu";

   
    unset($_SESSION['cart']);

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>