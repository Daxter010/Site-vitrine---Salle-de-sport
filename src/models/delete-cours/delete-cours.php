<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    function deleteCoursModel($id) {
        $db = connectDb();
        
        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return;
        }

        // Récupérer le nom du fichier image associé au produit
        $query = $db->prepare('SELECT image FROM `cours_collectifs` WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result && isset($result['image'])) {
            // Supprimer le fichier image du dossier "images"
            $imagePath = ROOT_PUBLIC . 'assets/images/cours_collectifs/' . $result['image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
                echo "L'image a été supprimée avec succès.";
            } else {
                echo "L'image n'existe pas dans le dossier.";
            }
        }

        // Préparation de la requête SQL pour supprimer le produit de la base de données
        $query = $db->prepare('DELETE FROM `cours_collectifs` WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }