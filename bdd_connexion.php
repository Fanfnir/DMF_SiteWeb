<?php 
//    Connexion à la base de données
    $pdo = new PDO
    (
        'mysql:host=localhost;dbname=dressmefair;charset=UTF8',
        'root',
        'rootroot',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
   );
