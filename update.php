<?php

// récupérer l'a saisie du formulaire'id
$id = $_GET['id'];

// connexion à la base de données
$db = new PDO("mysql:host=localhost;dbname=crud_users;charset=UTF8", "root", "");

// requête SQL
$sql = "SELECT * FROM t_users WHERE id=?";

//préparer la requête
$stmt = $db->prepare($sql);

//lier les valeurs
$stmt->bindValue(1, $id, PDO::PARAM_INT);

//execution de la requête
$stmt->execute();

// récupérer un enregistrement sous la forme d'un objet fetch(PDO::FETCH_OBJ)
$row = $stmt->fetch(PDO::FETCH_OBJ);

// teste la valeur du tableau
if (!$row) {
//redirection vers la page d'accueil
    header('location:index.php');
}
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Modifier</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <form action="save.php" method="post">
                <input type="hidden" name=id value="<?= $id ?>">
                <input type="text" name="nom" placeholder="Nom" value="<?= $row->nom ?>">
                <input type="text" name="email" placeholder="Email" value="<?= $row->email ?>">
                <button>Enregistrer</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>