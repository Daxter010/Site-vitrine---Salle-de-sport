<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    function createCoursModel($addTitleCours, $addDescriptionCours, $addPictureCours, $addCategorieCours) {
        $db = connectDb();
        
        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return;
        }
       
        // Insérer les données (y compris le nom du fichier) dans la base de données
        $query = $db->prepare('INSERT INTO `cours_collectifs` (`nom`,`categorie_id`, `description`, `image`) VALUES (:nom, :categorie_id, :description, :image)');
        $query->bindValue(':nom', $addTitleCours, PDO::PARAM_STR);
        $query->bindValue(':categorie_id', $addCategorieCours, PDO::PARAM_INT);
        $query->bindValue(':description', $addDescriptionCours, PDO::PARAM_STR);
        $query->bindValue(':image', $addPictureCours, PDO::PARAM_STR); // Ici le nom du fichier (image)
        $query->execute();
    }