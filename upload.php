<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Navbar</a>

            <a class="btn btn-outline-success" href="./backend/logout.php">logout</a>

        </div>
    </nav>
    <h2 class="text-center">Bienvenue!</h2>

    <form action="./backend/upload.php" method="post" enctype="multipart/form-data" class="card my-2 p-2 w-50 mx-auto">
        Choisissez un fichier à télécharger :
        <input type="file" name="file"><br>
        <input type="submit" value="Télécharger" class="btn btn-primary">
    </form>
</body>

</html>