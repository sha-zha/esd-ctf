<?php
session_start();

include("./bdd.php");

// Gestion de l'authentification
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = $pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
    $check->bindParam(':username', $username, PDO::PARAM_STR);
    $check->bindParam(':password', $password, PDO::PARAM_STR);
    $check->execute();
    // Récupérer tous les résultats sous forme de tableau associatif
    $users = $check->fetchAll(PDO::FETCH_ASSOC);

    var_dump($users);
    if (isset($users[0]) && $users[0]["password"] === $password && $users[0]['username'] === $username) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header("Location: ./../upload.php");
        exit();

    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
        header("Location: ./../login.php");
        exit();
    }
}