<?php

// récupérer la saisie du formulaire
$i = $_POST['id'];
$n = $_POST['nom'];
$e = $_POST['email'];

// connexion à la base de données
$db = new PDO("mysql:host=localhost;dbname=crud_users;charset=UTF8", "root", "");

// requête SQL
$sql = "UPDATE t_users SET nom=:n, email=:e WHERE id=:i";

// préparer la requête
$stmt = $db->prepare($sql);

// lier les valeurs
$stmt->bindValue(":i", $i, PDO::PARAM_INT);
$stmt->bindValue(":n", $n, PDO::PARAM_STR);
$stmt->bindValue(":e", $e, PDO::PARAM_STR);

// exécution de la requête
$stmt->execute();

// redirection vers la page d'accueil
header('Location: index.php');
exit();
?>