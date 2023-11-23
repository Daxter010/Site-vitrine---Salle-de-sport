<?php
    // Fonctions partie Model
    require_once ROOT . '/src/models/select-products.php';

    /*
        Fonction qui sélectionne tous les produits de la table "produits"
    */
    function selectAllProductsController() {
        $allProducts = selectAllProductsModel();
        if ($allProducts === false) {
            echo 'Erreur lors de la récupération des produits';
            return;
        }
        return $allProducts;
    }

    /*
        Fonction qui sélectionne un produit de la table "produits" (par ID)
    */
    function selectIdProductsController() {
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = strip_tags($_GET['id']);
        }

        $detailProducts = selectIdProductsModel($id);
        
        if ($detailProducts === false) {
            echo 'Erreur lors de la récupération des produits';
            return;
        }
        return $detailProducts;
    }

    /*
        Fonction qui sélectionne tous les produits "performance"
    */
    function selectAllProductsPerformanceController() {
        $performanceProducts = selectAllProductsPerformanceModel();

        if ($performanceProducts === false) {
            echo 'Erreur lors de la récupération des produits';
            return;
        }
        return $performanceProducts;
    }

    /*
        Fonction qui sélectionne tous les produits "perte de poids"
    */
    function selectAllProductsPerteController() {
        $perteProducts = selectAllProductsPerteModel();

        if ($perteProducts === false) {
            echo 'Erreur lors de la récupération des produits';
            return;
        }
        return $perteProducts;
    }

    /*
        Fonction qui sélectionne tous les produits "protéines"
    */
    function selectAllProductsProteinesController() {
        $proteinesProducts = selectAllProductsProteinesModel();

        if ($proteinesProducts === false) {
            echo 'Erreur lors de la récupération des produits';
            return;
        }
        return $proteinesProducts;
    }

    /*
        Fonction qui sélectionne tous les produits "récupération"
    */
    function selectAllProductsRecuperationController() {
        $recuperationProducts = selectAllProductsRecuperationModel();

        if ($recuperationProducts === false) {
            echo 'Erreur lors de la récupération des produits';
            return;
        }
        return $recuperationProducts;
    }

    /*
        Fonction qui sélectionne tous les produits "vitamines"
    */
    function selectAllProductsVitaminesController() {
        $vitaminesProducts = selectAllProductsVitaminesModel();

        if ($vitaminesProducts === false) {
            echo 'Erreur lors de la récupération des produits';
            return;
        }
        return $vitaminesProducts;
    }

    /*
        Fonction pour le filtre (select/search) de la page produits / Admin
    */
    function filterSelectProductsController() {
        // Si ma requête post n'est pas envoyée alors...
        if ($_SERVER['REQUEST_METHOD'] !== 'POST' || (isset($_POST['categories_products']) && $_POST['categories_products'] == -1)) {
            // Si aucune catégorie n'est sélectionnée, on gère la recherche
            if (isset($_POST['search-products']) && !empty($_POST['search-products'])) {
                $searchProducts = $_POST['search-products'];
                return searchProductsModel($searchProducts);
            } else {
                return selectAllProductsController();
            }
        }

        // Si ma requête post est envoyée alors...
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['categories_products']) && !empty($_POST['categories_products'])) {
                $categorySelectProduct = (int)$_POST['categories_products'];

                // Si value "option > select" === -1 alors affiche tous les produits
                if ($categorySelectProduct === -1) {
                    return selectAllProductsController();

                } elseif ($categorySelectProduct >= 1 && $categorySelectProduct <=5) { // Sinon, affichage des produits selon les catégories
                    switch($categorySelectProduct) {
                        case 1:
                            return selectAllProductsPerformanceController();
                        case 2:
                            return selectAllProductsPerteController();
                        case 3:
                            return selectAllProductsProteinesController();
                        case 4:
                            return selectAllProductsRecuperationController();
                        case 5:
                            return selectAllProductsVitaminesController();
                            
                        default:
                            echo "Catégorie non reconnue";
                            return [];
                    }
                }

            } else {
                echo "Veuillez choisir une catégories.";
                return [];
            }
        }
    }