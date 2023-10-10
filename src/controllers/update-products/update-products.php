<?php
    require_once ROOT . '/src/models/update-products/update-products.php';

    function updateProductsController() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['title-modification-products']) && isset($_POST['categorie-modification-products']) 
            && isset($_POST['subtitle-modification-products']) && isset($_POST['price-modification-products'])
            && isset($_POST['stock-modification-products']) && isset($_POST['description-modification-products']) && isset($_FILES['picture-modification-products'])) {
                // Récuperation de l'ID depuis l'URL
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    $id = intval($_GET['id']); // Converti l'ID en entier
                } else {
                    echo "L'ID du cours n'est pas récuperé.";
                    return;
                }

                // Récupération des donneées du formulaire et nettoyage
                $updateTitleProduct = strip_tags(htmlspecialchars($_POST['title-modification-products']));
                $updateCategorieProduct = strip_tags(htmlspecialchars($_POST['categorie-modification-products']));
                $updateSubtitleProduct = strip_tags(htmlspecialchars($_POST['subtitle-modification-products']));
                $updatePriceProduct = strip_tags(htmlspecialchars($_POST['price-modification-products']));
                $updateStockProduct = strip_tags(htmlspecialchars($_POST['stock-modification-products']));
                $updateDescriptionProduct = strip_tags(htmlspecialchars($_POST['description-modification-products']));

                if ($_FILES['picture-modification-products']['error'] === UPLOAD_ERR_OK) {
                    // Récupération du fichier uploadé
                    $updatePictureProduct = $_FILES['picture-modification-products']['name']; // Attribution de la clé "name"
                    $file_tmp = $_FILES['picture-modification-products']['tmp_name']; // Chemin temporaire
                    // Chemin de destination pour le fichier image vers dossier "produits
                    $destination = ROOT_PUBLIC . 'assets/images/produits/' . $updatePictureProduct;

                    // Format désirés
                    $imgTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                    $fileType = mime_content_type($file_tmp);
                    // Si mon image ne contient pas la bonne extensions alors...
                    if (!in_array($fileType, $imgTypes)) {
                        echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Le format de l'image doit être de type (jpeg, pgn, gif ou webp).</p></div>";
                        return;
                    }

                    // Récupération de l'ancien chemin de l'image depuis la base de données
                    $oldPicturePath = OldPathPicture($id); // Appel de la fonction "OldPathPicture"
                    // Supprime l'ancienne image si elle existe
                    if ($oldPicturePath !== null && file_exists($oldPicturePath)) {
                        unlink($oldPicturePath);
                    }

                    // Déplace l'image (la nouvelle) vers le dossier ciblé, si la condition est réussie alors...
                    move_uploaded_file($file_tmp, $destination);
                } else {
                    // Aucun fichier image téléchargé, conserve l'image actuelle
                    $updatePictureProduct = basename(getOldImageName($id));
                }

                // Appel de la fonction model
                updateProductsModel($updateTitleProduct, $updateCategorieProduct, $updateSubtitleProduct, $updatePriceProduct, $updateStockProduct, $updateDescriptionProduct, $updatePictureProduct, $id);
                echo "<div style='width:100%; background-color: #32CD32;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Modification du produit réalisée avec succès.</p></div>";
                header("refresh:2;url=/admin");
            }
        } 
    }

    /*
        Fonction qui permet la récupération de l'ancien chemin de l'image ajouté dans le dossier afin de la conserver si l'image n'est pas modifiée
    */
    function getOldImageName($id) {
        $db = connectDb();
        
        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return;
        }

        // Selection de l'ID de l'image (nom) dans la base de données
        $query = $db->prepare('SELECT image FROM produits WHERE id = :id');
        $query->bindValue('id', $id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        // Si mon image existe dans ma base de données alors...
        if ($result && isset($result['image'])) {
            return ROOT_PUBLIC . 'assets/images/produits/' . $result['image'];
        } else {
            return null;
        }
    }

    /*
        Fonction qui permet la récupération de l'ancien chemin de l'image ajouté dans le dossier ciblé afin de la supprimer
    */
    function oldPathPicture($id) {
        $db = connectDb();
        
        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return;
        }

        // Selection de l'ID de l'image (nom) dans la base de données
        $query = $db->prepare('SELECT image FROM produits WHERE id = :id');
        $query->bindValue('id', $id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        // Si mon image existe dans ma base de données alors...
        if ($result && isset($result['image'])) {
            return ROOT_PUBLIC . 'assets/images/produits/' . $result['image'];
        } else {
            return null;
        }
    }

    updateProductsController();