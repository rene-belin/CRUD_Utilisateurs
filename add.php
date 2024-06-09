<?php

// récupérer la saisie du formulaire
$n = $_POST['nom'];
$e = $_POST['email'];

// connexion à la base de données
$db = new PDO("mysql:host=localhost;dbname=crud_users;charset=UTF8", "root", "");

// requête SQL
$sql = "INSERT INTO t_users VALUES('', ? ,?)";

//préparer la requête
$stmt = $db->prepare($sql);

//lier les valeurs
$stmt->bindValue(1, $n, PDO::PARAM_STR);
$stmt->bindValue(2, $n, PDO::PARAM_STR);

$stmt->execute();

header('location:index.php');
