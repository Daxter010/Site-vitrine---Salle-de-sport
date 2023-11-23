<?php 
    // Sélectionne chaque catégories de produits
    require_once ROOT . '/src/controllers/select-categories-products.php';

    // Permet la création / l'ajout d'un nouveau produit dans la base de données
    require_once ROOT . '/src/controllers/create-products.php';
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
        <title>Ajout de produits</title>
    </head>
    <body id="bodyFormAddProducts">
        <main id="mainFormAddProducts">
            <div class="background__form-add-products"></div>
            <div class="main__container__form-add-products">
                <div class="main__container__form-add-products__logo">
                    <img src="/public/assets/logo/LogoMFN-min.webp" alt="">
                </div>

                <div class="main__container__form-add-products__form">
                    <div class="main__container__form-add-products__form__title">
                        <h1>Ajouter un produit</h1>
                    </div>

                    <div class="main__container__form-add-products__form__form">
                        <form action="#" method="post" class="form-add-products" enctype="multipart/form-data">
                            <div>
                                <div class="form-add-products__title">
                                    <label for="title-add-products">Nom</label>
                                    <input type="text" name="title-add-products" id="title-add-products" placeholder="Entrez un nom" required>
                                </div>

                                <div class="form-add-products__subtitle">
                                    <label for="subtitle-add-products">Sous-titre</label>
                                    <input type="text" name="subtitle-add-products" id="subtitle-add-products" placeholder="Entrez un sous-titre" required>
                                </div>
                            </div>

                           <div>
                                <div class="form-add-products__price">
                                    <label for="price-add-products">Prix</label>
                                    <input type="number" step="0.01" min="0" name="price-add-products" id="price-add-products" placeholder="Entrez un prix" required>
                                </div>

                                <div class="form-add-products__stock">
                                    <label for="stock-add-products">Stock</label>
                                    <input type="number" min="0" name="stock-add-products" id="stock-add-products" placeholder="Entrez le nombre en stock" required>
                                </div>
                           </div>

                            <div class="form-add-products__description">
                                <label for="description-add-products">Description</label>
                                <textarea name="description-add-products" id="description-add-products" cols="30" rows="10" placeholder="Entrez votre description" required></textarea>
                            </div>

                            <div>
                                <div class="form-add-products__picture">
                                    <label for="picture-add-products">Image</label>
                                    <input type="file" name="picture-add-products" id="picture-add-products" required>
                                </div>

                                <div class="form-add-products__select">
                                    <label for="categorie-add-products">Catégorie</label>
                                    <select name="categorie-add-products" id="categorie-add-products" required>
                                        <?php foreach(selectCategoriesProductsController() as $categorieProduct) { ?>
                                            <option value="<?php echo $categorieProduct['id'] ?>"><?php echo $categorieProduct['nom'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-add-products__btn">
                                <button type="submit">Ajouter le produit</button>
                                <a href="/admin">Retour</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>