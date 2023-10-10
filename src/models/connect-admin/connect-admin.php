<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    function connectAdminModel($connectNameAdmin, $connectFornameAdmin) {
        $db = connectDb();

        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return 0;
        }

        $query = $db->prepare('SELECT * FROM administrateurs WHERE nom = :nom AND prenom = :prenom');
        $query->bindValue(':nom', $connectNameAdmin, PDO::PARAM_STR);
        $query->bindValue(':prenom', $connectFornameAdmin, PDO::PARAM_STR);
        $query->execute();
        $admin = $query->fetch(PDO::FETCH_ASSOC);
        return $admin;
    }