<?php
    require_once ROOT . '/src/models/delete-admin/delete-admin.php';

    function deleteAdminController() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['name-suppression-admin']) && !empty($_POST['name-suppression-admin'])
            && isset($_POST['forname-suppression-admin']) && !empty($_POST['forname-suppression-admin'])
            && isset($_POST['password-suppression-admin']) && !empty($_POST['password-suppression-admin'])
            && isset($_POST['confirm-password-suppression-admin']) && !empty($_POST['confirm-password-suppression-admin'])) {
                // Récuperation de l'ID depuis l'URL
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    $id = intval($_GET['id']); // Converti l'ID en entier
                } else {
                    echo "L'ID du cours n'est pas récuperé.";
                    return;
                }

                // Récupération des données du formulaire et nettoyage
                $deleteNameAdmin = strip_tags(htmlspecialchars($_POST['name-suppression-admin']));
                $deleteFornameAdmin = strip_tags(htmlspecialchars($_POST['forname-suppression-admin']));
                $deletePasswordAdmin = strip_tags(htmlspecialchars($_POST['password-suppression-admin']));
                $deleteConfirmPasswordAdmin = strip_tags(htmlspecialchars($_POST['confirm-password-suppression-admin']));

                // Vérification que le mot de passe correspond à la confirmation
                if ($deletePasswordAdmin !== $deleteConfirmPasswordAdmin) {
                    echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 30px; font-weight: bold; font-family: sans-serif; color: white'>Les mots de passe ne correspondent pas.</p></div>";
                    return;
                }

                $isDeleted = deleteAdminModel($deleteNameAdmin, $deleteFornameAdmin, $deletePasswordAdmin, $id);

                if ($isDeleted) {
                    echo "<div style='width:100%; background-color: #32CD32;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Suppression en cours...</p></div>";
                    session_destroy();
                    header("refresh:3;url=/admin");
                    exit();

                } else {
                    echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Échec de la suppression.</p></div>";
                }
                
            } else {
                echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Tous les champs doivent être remplis.</p></div>";
            }
        }  
    }