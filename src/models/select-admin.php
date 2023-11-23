<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    // Fonction d'appel de tous les éléments de la table "evenements"
    function selectAllAdminsModel() {
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `administrateurs` ORDER BY id ASC');
        $query->execute();
        $allAdmins = $query->fetchAll(PDO::FETCH_ASSOC); 
        return $allAdmins;
    }

    /*
        Fonction qui gère la requête pour la fonction "selectIdProductsController()"
    */
    function selectIdAdminsModel($id) {  
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `administrateurs` WHERE `id` = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $detailAdmins = $query->fetch();
        return $detailAdmins; 
    }