<?php 
    // Affiche les catégories de cours collectifs depuis la base de données
    require_once ROOT . '/src/controllers/select-categories-cours/select-categories-cours.php';

    // Permet la création / l'ajout d'un nouveau cours-collectif dans la base de données
    require_once ROOT . '/src/controllers/create-cours/create-cours.php';
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
        <title>Ajout de cours</title>
    </head>
    <body id="bodyFormAddCours">
        <main id="mainFormAddCours">
            <div class="background__form-add-cours"></div>
            <div class="main__container__form-add-cours">
                <div class="main__container__form-add-cours__logo">
                    <img src="/public/assets/logo/LogoMFN-min.webp" alt="">
                </div>

                <div class="main__container__form-add-cours__form">
                    <div class="main__container__form-add-cours__form__title">
                        <h1>Ajouter un cours</h1>
                    </div>

                    <div class="main__container__form-add-cours__form__form">
                        <!-- Formulaire -->
                        <form action="#" method="post" class="form-add-cours" enctype="multipart/form-data">
                            <div class="form-add-cours__title">
                                <label for="title-add-cours">Titre</label>
                                <input type="text" name="title-add-cours" id="title-add-cours" placeholder="Entrez un titre" required>
                            </div>

                            <div class="form-add-cours__description">
                                <label for="description-add-cours">Description</label>
                                <textarea name="description-add-cours" id="description-add-cours" cols="30" rows="10" placeholder="Entrez votre description" required></textarea>
                            </div>

                            <div>
                                <div class="form-add-cours__picture">
                                    <label for="picture-add-cours">Image</label>
                                    <input type="file" name="picture-add-cours" id="picture-add-cours" required>
                                </div>

                                <div class="form-add-cours__select">
                                    <label for="categorie-add-cours">Catégorie</label>
                                    <select name="categorie-add-cours" id="categorie-add-cours" required>
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

                            <input name="id-add-cours" type="hidden">

                            <div class="form-add-cours__btn">
                                <button type="submit">Ajouter le cours</button>
                                <a href="/admin">Retour</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>