<?php
session_start();

// Redirection si l'utilisateur n'est pas authentifié
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    ?>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="d-flex justify-content-center">
    <form method="post" action="./backend/signup.php" class="card my-2 p-2 w-50 d-flex">
      <h2 class="text-center">S'inscrire</h2>
        Nom d'utilisateur : <input type="text" class="form-control" name="username"><br>
        Mot de passe : <input type="password" class="form-control" name="password"><br>
        <input type="submit" class="btn btn-primary" value="S'inscrire">
        <a class="text-center" href="./login.php">J'ai déjà un compte</a>
    </form>
</body>
</html>
    <?php
    exit();
}




