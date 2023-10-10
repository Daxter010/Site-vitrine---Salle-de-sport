<?php
    // Fonctions partie Model
    require_once ROOT . '/src/models/select-cours/select-cours.php';

    // Selectionne tous les cours
    function selectAllCoursController() {
        $allCours = selectAllCoursModel();
        if ($allCours === false) {
            echo 'Erreur lors de la récupération de cours';
            return;
        }
        return $allCours;
    }

    /*
        Fonction qui sélectionne un produit de la table "cours-collectifs" (par ID)
    */
    function selectIdCoursController() {
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = strip_tags($_GET['id']);
        }

        $detailCours = selectIdCoursModel($id);
        
        if ($detailCours === false) {
            echo 'Erreur lors de la récupération des cours';
            return;
        }
        return $detailCours;
    }

    // Selectionne tous les cours collectifs de la catégorie une de la base de données
    function selectCoursOneController() {
        $coursOne = selectCoursOneModel();
        if ($coursOne === false) {
            echo 'Erreur lors de la récupération des cours';
            return;
        }
        return $coursOne;
    }

    // Selectionne tous les cours collectifs de la catégorie deux de la base de données
    function selectCoursTwoController() {
        $coursTwo = selectCoursTwoModel();
        if ($coursTwo === false) {
            echo 'Erreur lors de la récupération des cours';
            return;
        }
        return $coursTwo;
    }

    // Selectionne tous les cours collectifs de la catégorie trois de la base de données
    function selectCoursThreeController() {
        $coursThree = selectCoursThreeModel();
        if ($coursThree === false) {
            echo 'Erreur lors de la récupération des cours';
            return;
        }
        return $coursThree;
    }

    // Selectionne tous les cours collectifs de la catégorie quatre de la base de données
    function selectCoursFourController() {
        $coursFour = selectCoursFourModel();
        if ($coursFour === false) {
            echo 'Erreur lors de la récupération des cours';
            return;
        }
        return $coursFour;
    }