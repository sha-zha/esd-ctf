<?php
include("./bdd.php");

if(!empty($_POST["username"] && !empty($_POST["password"]))){
    $check = $pdo->prepare('INSERT INTO users (username,password) VALUES (:username,:password)');
    $check->bindParam(':username', $_POST["username"], PDO::PARAM_STR);
    $check->bindParam(':password', $_POST["password"], PDO::PARAM_STR);
    $check->execute();

    header("Location: ./../login.php");
}else{
    header("Location: ./../signup.php");
}
