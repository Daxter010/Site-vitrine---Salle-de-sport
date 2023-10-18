<?php
    require_once ROOT . '/src/models/create-cours/create-cours.php';

    /*
        Fonction qui va permettre la création de cours collectifs
    */
    function createCoursController() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['title-add-cours']) && isset($_POST['description-add-cours']) 
            && isset($_FILES['picture-add-cours']) && isset($_POST['categorie-add-cours'])) {

                $addTitleCours = strip_tags(htmlspecialchars($_POST['title-add-cours']));
                $addDescriptionCours = strip_tags(htmlspecialchars($_POST['description-add-cours']));
                $addCategorieCours = strip_tags(htmlspecialchars($_POST['categorie-add-cours']));

                // Récupération du fichier uploadé
                $addPictureCours = $_FILES['picture-add-cours']['name'];
                $file_tmp = $_FILES['picture-add-cours']['tmp_name'];

                // Chemin de destination pour le fichier image
                $destination = ROOT_PUBLIC . 'assets/images/cours_collectifs/' . $addPictureCours;

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
                    createCoursModel($addTitleCours, $addDescriptionCours, $addPictureCours, $addCategorieCours);
                    echo "<div style='width:100%; background-color: #32CD32;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Création du cours réalisée avec succès.</p></div>";
                    header("refresh:2;url=/admin");
                } else {
                    echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Erreur lors du téléversement de l'image.</p></div>";
                }
            }
        } 
    }

    createCoursController();