<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    function createEventModel($addTitleEvent, $addDateEvent, $addStartHoursEvent, $addEndHoursEvent, $addDescriptionEvent, $addPictureEvent) {
        $db = connectDb();
        
        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return;
        }

        // Insérer les données (y compris le nom du fichier) dans la base de données
        $query = $db->prepare('INSERT INTO `evenements` (`titre`,`date_event`, `heure_debut`, `heure_fin`, `description`, `image`) VALUES (:titre, :date_event, :heure_debut, :heure_fin, :description, :image)');
        $query->bindValue(':titre', $addTitleEvent, PDO::PARAM_STR);
        $query->bindValue(':date_event', $addDateEvent, PDO::PARAM_STR);
        $query->bindValue(':heure_debut', $addStartHoursEvent, PDO::PARAM_STR);
        $query->bindValue(':heure_fin', $addEndHoursEvent, PDO::PARAM_STR); 
        $query->bindValue(':description', $addDescriptionEvent, PDO::PARAM_STR); 
        $query->bindValue(':image', $addPictureEvent, PDO::PARAM_STR); // Ici le nom du fichier (image)
        $query->execute();
    }