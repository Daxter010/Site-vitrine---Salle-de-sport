<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    // Fonction d'appel de tous les éléments de la table "cours_collectifs"
    function selectAllCoursModel() {
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `cours_collectifs` ORDER BY id ASC');
        $query->execute();
        $allCours = $query->fetchAll(PDO::FETCH_ASSOC); 
        return $allCours;
    }

     /*
        Fonction qui gère la requête pour la fonction "selectIdProductsController()"
    */
    function selectIdCoursModel($id) {  
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `cours_collectifs` WHERE `id` = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $detailCours = $query->fetch();
        return $detailCours; 
    }

    // Fonction d'appel de tous les éléments de la catégorie une
    function selectCoursOneModel() {
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `cours_collectifs` WHERE categorie_id = (SELECT id FROM categories_cours WHERE nom = "Cardio")');
        $query->execute();
        $categoriesOneCours = $query->fetchAll(PDO::FETCH_ASSOC); 
        return $categoriesOneCours;
    }

    // Fonction d'appel de tous les éléments de la catégorie deux
    function selectCoursTwoModel() {
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `cours_collectifs` WHERE categorie_id = (SELECT id FROM categories_cours WHERE nom = "Circuit-Training")');
        $query->execute();
        $categoriesTwoCours = $query->fetchAll(PDO::FETCH_ASSOC); 
        return $categoriesTwoCours;
    }

    // Fonction d'appel de tous les éléments de la catégorie trois
    function selectCoursThreeModel() {
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `cours_collectifs` WHERE categorie_id = (SELECT id FROM categories_cours WHERE nom = "Renforcement")');
        $query->execute();
        $categoriesThreeCours = $query->fetchAll(PDO::FETCH_ASSOC); 
        return $categoriesThreeCours;
    }

    // Fonction d'appel de tous les éléments de la catégorie quatre
    function selectCoursFourModel() {
        $db = connectDb();
        $query = $db->prepare('SELECT * FROM `cours_collectifs` WHERE categorie_id = (SELECT id FROM categories_cours WHERE nom = "Bien-être")');
        $query->execute();
        $categoriesFourCours = $query->fetchAll(PDO::FETCH_ASSOC);  
        return $categoriesFourCours;
    }