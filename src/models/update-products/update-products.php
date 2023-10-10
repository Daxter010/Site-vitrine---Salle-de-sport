<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    function updateProductsModel($updateTitleProduct, $updateCategorieProduct, $updateSubtitleProduct, $updatePriceProduct, $updateStockProduct, $updateDescriptionProduct, $updatePictureProduct, $id) {
        $db = connectDb();
        
        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return;
        }
       
        // Insérer les données (y compris le nom du fichier) dans la base de données
        $query = $db->prepare('UPDATE `produits` SET `nom` = :nom, `categorie_id` = :categorie_id , `categorie_id` = :categorie_id, `sous_titre` = :sous_titre, `prix` = :prix, `stock` = :stock, `description` = :description, `image` = :image WHERE id = :id');
        $query->bindValue(':nom', $updateTitleProduct, PDO::PARAM_STR);
        $query->bindValue(':categorie_id', $updateCategorieProduct, PDO::PARAM_INT);
        $query->bindValue(':sous_titre', $updateSubtitleProduct, PDO::PARAM_STR);
        $query->bindValue(':prix', $updatePriceProduct, PDO::PARAM_INT); 
        $query->bindValue(':stock', $updateStockProduct, PDO::PARAM_INT); 
        $query->bindValue(':description', $updateDescriptionProduct, PDO::PARAM_STR); 
        $query->bindValue(':image', $updatePictureProduct, PDO::PARAM_STR); // Ici le nom du fichier (image)
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }