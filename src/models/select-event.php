<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    // Fonction d'appel de tous les éléments de la table "evenements"
    function selectAllEventsModel() {
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `evenements` ORDER BY id ASC');
        $query->execute();
        $allEvents = $query->fetchAll(PDO::FETCH_ASSOC); 
        return $allEvents;
    }

    /*
        Fonction qui gère la requête pour la fonction "selectIdEventsController()"
    */
    function selectIdEventsModel($id) {  
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `evenements` WHERE `id` = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $detailEvents = $query->fetch();
        return $detailEvents; 
    }