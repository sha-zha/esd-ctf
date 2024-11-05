<?php
session_start();

include("./bdd.php");

// Gestion de l'authentification
if (isset($_POST['lastname']) && isset($_POST['password'])) {
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];

    $check = $pdo->prepare('SELECT * FROM users WHERE lastname = :lastname AND password = :password');
    $check->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $check->bindParam(':password', $password, PDO::PARAM_STR);
    $check->execute();
    // Récupérer tous les résultats sous forme de tableau associatif
    $users = $check->fetchAll(PDO::FETCH_ASSOC);

    if (isset($users[0]) && $users[0]["password"] === $password && $users[0]['lastname'] === $lastname) {
        $_SESSION['logged_in'] = true;
        $_SESSION['lastname'] = $lastname;
        header("Location: ./../upload.php");
        exit();

    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
        header("Location: ./../login.php");
        exit();
    }
}