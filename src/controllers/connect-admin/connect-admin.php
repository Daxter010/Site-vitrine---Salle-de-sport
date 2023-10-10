<?php
    require_once ROOT . '/src/models/connect-admin/connect-admin.php';

    /*
        Fonction qui permet la connexion d'un administrateur
    */
    function connectAdminController() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ( isset($_POST['name-connect']) && !empty($_POST['name-connect'])
            && isset($_POST['forname-connect']) && !empty($_POST['forname-connect'])
            && isset($_POST['password-connect']) && !empty($_POST['password-connect'])
            && isset($_POST['confirm-password-connect']) && !empty($_POST['confirm-password-connect'])) {

                // Nettoyage et échappement des données
                $connectNameAdmin = strip_tags(htmlspecialchars($_POST['name-connect']));
                $connectFornameAdmin = strip_tags(htmlspecialchars($_POST['forname-connect']));
                $connectPassword = strip_tags(htmlspecialchars($_POST['password-connect']));
                $connectConfirmPassword = strip_tags(htmlspecialchars($_POST['confirm-password-connect']));

                // Vérification que le mot de passe correspond à la confirmation
                if ($connectPassword !== $connectConfirmPassword ) {
                    echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 30px; font-weight: bold; font-family: sans-serif; color: white'>Les mots de passe ne correspondent pas.</p></div>";
                    return;
                }

                $admin = connectAdminModel($connectNameAdmin, $connectFornameAdmin);

                if (!$admin) {
                    echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 30px; font-weight: bold; font-family: sans-serif; color: white'>Identifiants invalides.</p></div>";
                    return;
                }

                // Mot de passe stocké, haché et salé récupéré depuis la base de données
                $storedPassword = $admin['mot_de_passe_hache'];
                // Sel du mot de passe récupéré depuis la base de données
                $saltFromDataBase = $admin['sel'];
                // Concatène le mot de passe écrit depuis le formulaire avec le sel récupéré depuis la base de données du mot de passe lors de l'inscription
                $concatenatedPassword = $connectPassword . $saltFromDataBase;

                // Compare le mot de passe du formulaire de connexion au mot de passe de la base de données
                if (password_verify($concatenatedPassword, $storedPassword)) {
                    $_SESSION['admin_authenticated'] = true; // Marque l'administrateur comme authentifié
                    $_SESSION['admin_name'] = $admin['prenom']; // Ajoute le nom de l'admin à la session
                    $_SESSION['admin_role'] = $admin['role']; // Ajoute le rôle de l'admin à la session
                    echo "<div style='width:100%; background-color: #32CD32;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Connexion en en cours...</p></div>";
                    header("refresh:3;url=/admin");
                    exit();
                    
                } else {
                    echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Mot de passe invalide.</p></div>";
                } 

            } else {
                echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Tous les champs doivent être remplis.</p></div>";
            }
        }
    }