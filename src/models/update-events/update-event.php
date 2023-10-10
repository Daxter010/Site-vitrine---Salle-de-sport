<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    function updateEventsModel($updateTitleEvent, $updateDateEvent, $updateStartHoursEvent, $updateEndHoursEvent, $updateDescriptionEvent, $updatePictureEvent, $id) {
        $db = connectDb();
        
        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return;
        }
       
        // Insérer les données (y compris le nom du fichier) dans la base de données
        $query = $db->prepare('UPDATE `evenements` SET `titre` = :titre, `date_event` = :date_event , `heure_debut` = :heure_debut, `heure_fin` = :heure_fin, `description` = :description, `image` = :image WHERE id = :id');
        $query->bindValue(':titre', $updateTitleEvent, PDO::PARAM_STR);
        $query->bindValue(':date_event', $updateDateEvent, PDO::PARAM_STR);
        $query->bindValue(':heure_debut', $updateStartHoursEvent, PDO::PARAM_STR);
        $query->bindValue(':heure_fin', $updateEndHoursEvent, PDO::PARAM_STR); 
        $query->bindValue(':description', $updateDescriptionEvent, PDO::PARAM_STR); 
        $query->bindValue(':image', $updatePictureEvent, PDO::PARAM_STR);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }