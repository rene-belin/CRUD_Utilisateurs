<?php
// connexion à la base de données
$db = new PDO("mysql:host=localhost;dbname=crud_users;charset=UTF8", "root", "");

// récupérer tous les enregistrements
$sql = "SELECT * FROM t_users";

// exécuté la requête
$stmt = $db->query($sql);

// afficher tous les enregistrements qui est dans $stmt
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gestion utilisateur</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <h1>Users</h1>
            <!-- ************ formulaire ************ -->
            <form action="add.php" method="post">
                <input type="text" name="nom" placeholder="Nom">
                <input type="text" name="email" placeholder="Email">
                <button class="btn btn-primary">Enregistrer</button>
            </form>
            <!-- ************ tableau ************ -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOM</th>
                        <th scope="col">EMAIL</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- ************ boucle foreach ************ -->
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <!-- affiche l'ID de l'utilisateur -->
                            <td><?php echo $row['id'] ?></td>

                            <!--  Affichage du nom de l'utilisateur -->
                            <td><?php echo $row['nom'] ?></td>

                            <!--  Affichage de l'email de l'utilisateur -->
                            <td><?php echo $row['email'] ?></td>
    <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">Supprimer</a></td>
    <td><a class="btn btn-warning" href="update.php?id=<?php echo $row['id'] ?>">Modifier</a></td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- ************ endforeach ************ -->
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>