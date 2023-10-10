<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    /*
        Fonction qui gère la requête pour la fonction "selectAllProductsController()"
    */
    function selectAllProductsModel() {
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `produits` ORDER BY id ASC');
        $query->execute();
        $allProducts = $query->fetchAll(PDO::FETCH_ASSOC); 
        return $allProducts;
    }

    /*
        Fonction qui gère la requête pour la fonction "selectIdProductsController()"
    */
    function selectIdProductsModel($id) {  
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `produits` WHERE `id` = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $detailProducts = $query->fetch();
        return $detailProducts; 
    }

    /*
        Fonction qui gère la requête pour la fonction "selectAllProductsPerformanceController()"
    */
    function selectAllProductsPerformanceModel() {
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `produits` WHERE `categorie_id` = 1');
        $query->execute();
        $performanceProducts = $query->fetchAll(PDO::FETCH_ASSOC);
        return $performanceProducts; 
    }

    /*
        Fonction qui gère la requête pour la fonction "selectAllProductsPerformanceController()"
    */
    function selectAllProductsPerteModel() {
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `produits` WHERE `categorie_id` = 2');
        $query->execute();
        $perteProducts = $query->fetchAll(PDO::FETCH_ASSOC);
        return $perteProducts; 
    }

    /*
        Fonction qui gère la requête pour la fonction "selectAllProductsPerformanceController()"
    */
    function selectAllProductsProteinesModel() {
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `produits` WHERE `categorie_id` = 3');
        $query->execute();
        $proteinesProducts = $query->fetchAll(PDO::FETCH_ASSOC);
        return $proteinesProducts; 
    }

    /*
        Fonction qui gère la requête pour la fonction "selectAllProductsPerformanceController()"
    */
    function selectAllProductsRecuperationModel() {
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `produits` WHERE `categorie_id` = 4');
        $query->execute();
        $recuperationProducts = $query->fetchAll(PDO::FETCH_ASSOC);
        return $recuperationProducts; 
    }

    /*
        Fonction qui gère la requête pour la fonction "selectAllProductsPerformanceController()"
    */
    function selectAllProductsVitaminesModel() {
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `produits` WHERE `categorie_id` = 5');
        $query->execute();
        $vitaminesProducts = $query->fetchAll(PDO::FETCH_ASSOC);
        return $vitaminesProducts; 
    }

    /*
        Fonction qui permet la recherche de produits depuis la barre de recherche
    */
    function searchProductsModel($searchProducts) {
        $db = connectDb();
        // Requête SQL avec un paramètre nommé :search
        $query = $db->prepare("SELECT * FROM `produits` WHERE `nom` LIKE :search ORDER BY id ASC");
        // Paramétrage de la recherche
        $search = "%$searchProducts%";
        $query->bindParam(':search', $search, PDO::PARAM_STR);
        $query->execute();
        $searchedProducts = $query->fetchAll(PDO::FETCH_ASSOC);
        return $searchedProducts;
    }