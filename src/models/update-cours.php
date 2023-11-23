<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    function updateCoursModel($updateTitleCours, $updateDescriptionCours, $updatePictureCours, $updateCategorieCours, $id) {
        $db = connectDb();
        
        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return;
        }
       
        // Insérer les données (y compris le nom du fichier) dans la base de données
        $query = $db->prepare('UPDATE `cours_collectifs` SET `nom` = :nom, `categorie_id` = :categorie_id , `description` = :description, `image` = :image WHERE id = :id');
        $query->bindValue(':nom', $updateTitleCours, PDO::PARAM_STR);
        $query->bindValue(':categorie_id', $updateCategorieCours, PDO::PARAM_INT);
        $query->bindValue(':description', $updateDescriptionCours, PDO::PARAM_STR);
        $query->bindValue(':image', $updatePictureCours, PDO::PARAM_STR); // Ici le nom du fichier (image)
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }