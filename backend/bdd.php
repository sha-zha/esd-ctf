<?php
// Paramètres de connexion
$host = 'localhost';         // Adresse du serveur (localhost si la base est sur la même machine)
$dbname = 'esd';        // Nom de la base de données
$username = 'esd';   // Nom d'utilisateur MySQL
$password = 'esd974';  // Mot de passe de l'utilisateur

try {
    // Création de la connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Configuration des options PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Gestion des erreurs
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Mode de récupération par défaut
} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    echo "Erreur de connexion : " . $e->getMessage();
}