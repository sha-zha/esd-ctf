<?php
include("./bdd.php");

if( !empty($_POST["password"]) && !empty($_POST["lastname"]) && !empty($_POST["firstname"])){
    $password = htmlentities($_POST['password']);
    $lastname = htmlentities($_POST['lastname']);
    $firstname = htmlentities($_POST['firstname']);

    $check = $pdo->prepare('INSERT INTO users (password,firstname,lastname) VALUES (:password,:firstname,:lastname)');
    $check->bindParam(':password', $password, PDO::PARAM_STR);
    $check->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $check->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $check->execute();

    header("Location: ./../login.php");
}else{
    header("Location: ./../signup.php");
}
