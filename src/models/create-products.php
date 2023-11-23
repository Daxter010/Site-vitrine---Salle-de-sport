<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    function createProductsModel($addTitleProduct, $addCategorieProduct, $addSubtitleProduct, $addPriceProduct, $addStockProduct, $addDescriptionProduct, $addPictureProduct) {
        $db = connectDb();
        
        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return;
        }
       
        // Insérer les données (y compris le nom du fichier) dans la base de données
        $query = $db->prepare('INSERT INTO `produits` (`nom`,`categorie_id`, `sous_titre`, `prix`, `stock`, `description`, `image`) VALUES (:nom, :categorie_id, :sous_titre, :prix, :stock, :description, :image)');
        $query->bindValue(':nom', $addTitleProduct, PDO::PARAM_STR);
        $query->bindValue(':categorie_id', $addCategorieProduct, PDO::PARAM_INT);
        $query->bindValue(':sous_titre', $addSubtitleProduct, PDO::PARAM_STR);
        $query->bindValue(':prix', $addPriceProduct, PDO::PARAM_INT); 
        $query->bindValue(':stock', $addStockProduct, PDO::PARAM_INT); 
        $query->bindValue(':description', $addDescriptionProduct, PDO::PARAM_STR); 
        $query->bindValue(':image', $addPictureProduct, PDO::PARAM_STR); // Ici le nom du fichier (image)
        $query->execute();
    }