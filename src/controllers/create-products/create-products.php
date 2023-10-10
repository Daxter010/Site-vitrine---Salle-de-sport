<?php
    require_once ROOT . '/src/models/create-products/create-products.php';

    /*
        Fonction qui va permettre la création d'un produit
    */
    function createProductsController() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['title-add-products']) && isset($_POST['categorie-add-products']) 
            && isset($_POST['subtitle-add-products']) && isset($_POST['price-add-products'])
            && isset($_POST['stock-add-products']) && isset($_POST['description-add-products']) && isset($_FILES['picture-add-products'])) {

                // Récupération des donneées du formulaire et nettoyage
                $addTitleProduct = strip_tags(htmlspecialchars($_POST['title-add-products']));
                $addCategorieProduct = strip_tags(htmlspecialchars($_POST['categorie-add-products']));
                $addSubtitleProduct = strip_tags(htmlspecialchars($_POST['subtitle-add-products']));
                $addPriceProduct = strip_tags(htmlspecialchars($_POST['price-add-products']));
                $addStockProduct = strip_tags(htmlspecialchars($_POST['stock-add-products']));
                $addDescriptionProduct = strip_tags(htmlspecialchars($_POST['description-add-products']));

                // Récupération du fichier uploadé
                $addPictureProduct = $_FILES['picture-add-products']['name'];
                $file_tmp = $_FILES['picture-add-products']['tmp_name'];

                // Chemin de destination pour le fichier image
                $destination = ROOT_PUBLIC . 'assets/images/produits/' . $addPictureProduct;

                // Format désirés
                $imgTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                $fileType = mime_content_type($file_tmp);
                // Si mon image ne contient pas la bonne extensions alors...
                if (!in_array($fileType, $imgTypes)) {
                    echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Le format de l'image doit être de type (jpeg, pgn, gif ou webp).</p></div>";
                    return;
                }


                if (move_uploaded_file($file_tmp, $destination)) {
                    // Appel de la fonction model
                    createProductsModel($addTitleProduct, $addCategorieProduct, $addSubtitleProduct, $addPriceProduct, $addStockProduct, $addDescriptionProduct, $addPictureProduct);
                    echo "<div style='width:100%; background-color: #32CD32;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Création de du produit réalisée avec succès.</p></div>";
                    header("refresh:2;url=/admin");
                } else {
                    echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Erreur lors du téléversement de l'image.</p></div>";
                }
            }
        } 
    }

    createProductsController();