<?php

// récupérer l'a saisie du formulaire'id
$id = $_GET['id'];

// connexion à la base de données
$db = new PDO("mysql:host=localhost;dbname=crud_users;charset=UTF8", "root", "");

// requête SQL
$sql = "DELETE FROM t_users WHERE id=?";

//préparer la requête
$stmt = $db->prepare($sql);

//lier les valeurs
$stmt->bindValue(1, $id, PDO::PARAM_INT);

//execution de la requête
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_OBJ);

//redirection vers la page d'accueil
header('location:index.php');
?>