<?php 
    // Sélectionne chaque catégories de produits
    require_once ROOT . '/src/controllers/select-categories-products.php';

    // Sélectionne chaque catégories de produits
    require_once ROOT . '/src/controllers/select-products.php';
    $detailProducts = selectIdProductsController();

    // Modifie les produits
    require_once ROOT . '/src/controllers/update-products.php';
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
        <title>Modification de produits</title>
    </head>
    <body id="bodyFormModificationProducts">
        <main id="mainFormModificationProducts">
            <div class="background__form-modification-products"></div>
            <div class="main__container__form-modification-products">
                <div class="main__container__form-modification-products__logo">
                    <img src="/public/assets/logo/LogoMFN-min.webp" alt="">
                </div>

                <div class="main__container__form-modification-products__form">
                    <div class="main__container__form-modification-products__form__title">
                        <h1>Modifier un produit</h1>
                    </div>

                    <div class="main__container__form-modification-products__form__form">
                        <form action="#" method="post" class="form-modification-products" enctype="multipart/form-data">
                            <div>
                                <div class="form-modification-products__title">
                                    <label for="title-modification-products">Nom</label>
                                    <input type="text" name="title-modification-products" id="title-modification-products" value="<?php echo $detailProducts['nom'] ?>">
                                </div>

                                <div class="form-modification-products__subtitle">
                                    <label for="subtitle-modification-products">Sous-titre</label>
                                    <input type="text" name="subtitle-modification-products" id="subtitle-modification-products" value="<?php echo $detailProducts['sous_titre'] ?>" placeholder="Entrez un sous-titre">
                                </div>
                            </div>

                           <div>
                                <div class="form-modification-products__price">
                                    <label for="price-modification-products">Prix</label>
                                    <input type="number" step="0.01" min="0" name="price-modification-products" id="price-modification-products" value="<?php echo $detailProducts['prix'] ?>" placeholder="Entrez un prix">
                                </div>

                                <div class="form-modification-products__stock">
                                    <label for="stock-modification-products">Stock</label>
                                    <input type="number" name="stock-modification-products" id="stock-modification-products" value="<?php echo $detailProducts['stock'] ?>" placeholder="Entrez le nombre en stock">
                                </div>
                           </div>

                            <div class="form-modification-products__description">
                                <label for="description-modification-products">Description</label>
                                <textarea name="description-modification-products" id="description-modification-products" cols="30" rows="10" placeholder="Entrez votre description"><?php echo $detailProducts['description'] ?></textarea>
                            </div>

                            <div>
                                <div class="form-modification-products__picture">
                                    <label for="picture-modification-products">Image</label>
                                    <input type="file" name="picture-modification-products" id="picture-modification-products">
                                </div>

                                <div class="form-modification-products__select">
                                    <label for="categorie-modification-products">Catégorie</label>
                                    <select name="categorie-modification-products" id="categorie-modification-products" value="<?php echo $detailProducts['categorie_id'] ?>">
                                        <?php foreach(selectCategoriesProductsController() as $categorieProduct) { ?>
                                            <option value="<?php echo $categorieProduct['id'] ?>"><?php echo $categorieProduct['nom'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-modification-products__btn">
                                <button type="submit">Modifier le produit</button>
                                <a href="/admin">Retour</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>