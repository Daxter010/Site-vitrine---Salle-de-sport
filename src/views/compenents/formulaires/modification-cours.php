<?php 
    // Affiche les catégories de cours collectifs depuis la base de données
    require_once ROOT . '/src/controllers/select-categories-cours/select-categories-cours.php';

    // Sélectionne chaque catégories de produits
    require_once ROOT . '/src/controllers/select-cours/select-cours.php';
    $detailCours = selectIdCoursController();

    // Permet la modification des cours-collectifs dans la base de données
    require_once ROOT . '/src/controllers/update-cours/update-cours.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/public/assets/styles/css/style.css">
        <meta name="robots" content="noindex,nofollow">
        <meta name="author" content="Mickaël Poncelet">
        <link rel="icon" href="/public/assets/icons/Favicon_MF.ico" type="image/x-icon">
        <title>Modification de cours</title>
    </head>
    <body id="bodyFormModificationCours">
        <main id="mainFormModificationCours">
            <div class="background__form-modification-cours"></div>
            <div class="main__container__form-modification-cours">
                <div class="main__container__form-modification-cours__logo">
                    <img src="/public/assets/logo/LogoMFN-min.webp" alt="">
                </div>

                <div class="main__container__form-modification-cours__form">
                    <div class="main__container__form-modification-cours__form__title">
                        <h1>Modifier un cours</h1>
                    </div>

                    <div class="main__container__form-modification-cours__form__form">
                        <form action="#" method="post" class="form-modification-cours" enctype="multipart/form-data">
                            <div class="form-modification-cours__title">
                                <label for="title-modification-cours">Titre</label>
                                <input type="text" name="title-modification-cours" id="title-modification-cours" value="<?php echo $detailCours['nom'] ?>">
                            </div>

                            <div class="form-modification-cours__description">
                                <label for="description-modification-description">Description</label>
                                <textarea name="description-modification-cours" id="description-modification-cours" cols="30" rows="10"><?php echo $detailCours['description'] ?>"</textarea>
                            </div>

                            <div>
                                <div class="form-modification-cours__picture">
                                    <label for="picture-modification-cours">Image</label>
                                    <input type="file" name="picture-modification-cours" id="picture-modification-cours">
                                </div>

                                <div class="form-modification-cours__select">
                                    <label for="categorie-modification-cours">Catégorie</label>
                                    <select name="categorie-modification-cours" id="categorie-modification-cours">
                                        <!-- Affiche les catégories -->
                                         <?php
                                            // Tableau associatif des catégories avec leurs identifiants
                                            $categories = [
                                                1 => 'Cardio',
                                                2 => 'Circuit-Training',
                                                3 => 'Renforcement',
                                                4 => 'Bien-être'
                                            ];
                                        
                                            foreach(selectCategoriesCoursController() as $categorieCours) {
                                            // Obtenir le nom de la catégorie correspondant à l'identifiant de catégorie du cours
                                            $categories_nom = isset($categories[$categorieCours['id']]) ? $categories[$categorieCours['id']] : 'Catégorie inconnue';
                                        ?>
                                            <option value="<?php echo $categorieCours['id'] ?>"><?php echo $categories_nom ?></option>
                                        <?php 
                                            } 
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <input name="id-modification-cours" type="hidden">

                            <div class="form-modification-cours__btn">
                                <button type="submit">Modifier le cours</button>
                                <a href="/admin">Retour</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>