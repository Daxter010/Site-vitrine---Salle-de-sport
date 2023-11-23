<?php
    require_once ROOT . '/src/models/create-admin.php';

    /*
        Fonction qui permet la création d'un administrateur dans la base de données
    */
    function createAdminController() {
        $maxAdmin = 3; // Administrateurs maximum autorisés

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $currentAdmins = countAdmin();

            // Si le nombre d'administrateurs actuel est inférieur au maximum  d'administrateurs alors...
            if ($currentAdmins < $maxAdmin) {
                // Si mes données existent et ne sont pas vides alors...
                if ( isset($_POST['name-register']) && !empty($_POST['name-register'])
                && isset($_POST['forname-register']) && !empty($_POST['forname-register'])
                && isset($_POST['password-register']) && !empty($_POST['password-register'])
                && isset($_POST['confirm-password-register']) && !empty($_POST['confirm-password-register'])) {

                    // Nettoyage et échappement des donnéespassword-register
                    $addNameAdmin = strip_tags(htmlspecialchars($_POST['name-register']));
                    $addFornameAdmin = strip_tags(htmlspecialchars($_POST['forname-register']));
                    $addPassword = strip_tags(htmlspecialchars($_POST['password-register']));

                    // Vérification du nombre minimal de caractères du mot de passe
                    if (strlen($addPassword) < 14) {
                        echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Le mot de passe doit contenir au moins 14 caractères.</p></div>";
                        return;
                    }

                    // Si les mot de passe ne correspondent pas alors...
                    if ($_POST['password-register']  !== $_POST['confirm-password-register']) {
                        echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Les mots de passe ne correspondent pas.</p></div>";
                        return;
                    }
                    
                    $salt = bin2hex(random_bytes(16)); // Salage
                    $saltedPassword = $addPassword . $salt; // Concaténation du mot de passe + salage

                    // Hashage du mot de passe (mot de passe haché et salé)
                    $addPasswordHashed = password_hash($saltedPassword, PASSWORD_DEFAULT);

                    // Fonction model
                    createAdminModel($addNameAdmin, $addFornameAdmin, $addPasswordHashed, $salt);

                    //header("Location: /admin");
                    echo "<div style='width:100%; background-color: #32CD32;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Création du compte en cours...</p></div>";
                    header("refresh:3;url=/admin");
                    exit();
                }
                
            } else {
                echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>La limite d'inscription administrateurs à été atteinte.</p></div>";
                header("refresh:3;url=/");
            }
        } 
    }