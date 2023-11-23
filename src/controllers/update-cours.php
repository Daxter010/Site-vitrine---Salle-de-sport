<?php
    require_once ROOT . '/src/models/update-cours.php';

    function updateCoursController() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['title-modification-cours']) && isset($_POST['description-modification-cours']) 
            && isset($_FILES['picture-modification-cours']) && isset($_POST['categorie-modification-cours'])) {
                // Récuperation de l'ID depuis l'URL
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    $id = intval($_GET['id']); // Converti l'ID en entier
                } else {
                    echo "L'ID du cours n'est pas récuperé.";
                    return;
                }

                // Récupération des donneées du formulaire et nettoyage
                $updateTitleCours = strip_tags(htmlspecialchars($_POST['title-modification-cours']));
                $updateDescriptionCours = strip_tags(htmlspecialchars($_POST['description-modification-cours']));
                $updateCategorieCours = strip_tags(htmlspecialchars($_POST['categorie-modification-cours']));

                // Récupération du fichier uploadé
                $updatePictureCours = $_FILES['picture-modification-cours']['name']; // Attribution de la clé "name"
                $file_tmp = $_FILES['picture-modification-cours']['tmp_name']; // Chemin temporaire
                // Chemin de destination pour le fichier image vers dossier "cours_collectifs"
                $destination = ROOT_PUBLIC . 'assets/images/cours_collectifs/' . $updatePictureCours;

                // Format désirés
                $imgTypes = ['image/jpeg', 'image/png', 'image/JPG', 'image/webp'];
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
                if (move_uploaded_file($file_tmp, $destination)) {
                    // Appel de la fonction model
                    updateCoursModel($updateTitleCours, $updateDescriptionCours, $updatePictureCours, $updateCategorieCours, $id);
                    echo "<div style='width:100%; background-color: #32CD32;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Modification du cours réalisée avec succès</p></div>";
                    header("refresh:2;url=/admin");
                } else {
                    echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Erreur lors du téléversement de l'image.</p></div>";
                }
            }
        } 
    }

    /*
        Fonction qui permet la récupération de l'ancien chemin de l'image ajouté dans le dossier ciblé afin de la supprimer
    */
    function oldPathPicture($id) {
        // Appel de la base de données
        $db = connectDb();
        
        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return;
        }

        // Selection de l'ID de l'image (nom) dans la base de données
        $query = $db->prepare('SELECT image FROM cours_collectifs WHERE id = :id');
        $query->bindValue('id', $id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        // Si mon image existe dans ma base de données alors...
        if ($result && isset($result['image'])) {
            return ROOT_PUBLIC . 'assets/images/cours_collectifs/' . $result['image'];
        } else {
            return null;
        }
    }

    updateCoursController();