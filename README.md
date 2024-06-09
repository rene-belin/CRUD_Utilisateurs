# CRUD en PHP

Ce projet est un exemple de CRUD (Create, Read, Update, Delete) simple en PHP, permettant de gérer une liste d'utilisateurs avec un nom et un email. L'interface utilise Bootstrap pour le style.
Prérequis

    Serveur web local (ex: XAMPP, WAMP)
    PHP 7.4 ou supérieur
    MySQL ou MariaDB
    ## Cloner le dépôt (ou téléchargez les fichiers de votre projet) :
    
##  Configurer la base de données :

    Créez une base de données nommée crud_users.
    Créez la table t_users avec la structure suivante :
    
    CREATE TABLE t_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL );

## Configurer le fichier PHP pour la connexion à la base de données :

    Assurez-vous que les informations de connexion à la base de données sont correctes dans le fichier PHP principal.

    Page principale : index.php

    Affiche tous les utilisateurs.
    Permet d'ajouter un nouvel utilisateur via un formulaire.
    Affiche les boutons pour modifier ou supprimer un utilisateur.

## Ajouter un utilisateur : add.php

    Traite les données du formulaire pour ajouter un nouvel utilisateur à la base de données.

## Modifier un utilisateur : update.php

    Affiche un formulaire pré-rempli pour un utilisateur spécifique.
    Met à jour les informations de l'utilisateur dans la base de données.

## Supprimer un utilisateur : delete.php

    Supprime un utilisateur spécifique de la base de données.
