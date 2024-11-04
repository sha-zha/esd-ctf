<?php
session_start(); // Démarre la session

// Vérifie si l'utilisateur est connecté
if (isset($_SESSION['logged_in'])) {
    // Détruit toutes les données de session
    $_SESSION = []; // Réinitialise le tableau de session
    session_unset(); // Supprime toutes les variables de session
    session_destroy(); // Détruit la session

    // Redirige vers la page de connexion ou une autre page
    header("Location: ../login.php"); // Changez l'URL pour votre page de destination
    exit();
} else {
     // Redirige vers la page de connexion ou une autre page
     header("Location: ../login.php");
}