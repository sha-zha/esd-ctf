<?php
session_start();

// Gestion de l'upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $uploadDir = realpath('../uploads');  // Dossier de destination pour l'upload
    if (!$uploadDir) {
        mkdir('../uploads', 0777, true);  // Crée le dossier s'il n'existe pas
    }

    $uploadFile = '../uploads/'. $_FILES['file']['name'];

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        header("Location: ../upload.php");
    } else {
        header("Location: ../upload.php");
    }
}