<div class="card">
    <!-- Photo du produit -->
    <div class="card__picture">
        <img class="card__picture--img" src="/public/assets/images/produits/<?php echo $product['image'] ?>" alt="Divers produits Eric Favre chez Magic Form Romilly-sur-Seine" loading="lazy">
    </div>

    <div class="card__infos">
        <!-- Nom du produit -->
        <div class="card__infos__title">
            <h2 class="card__infos__title--title"><?php echo $product['nom'] ?></h2>
        </div>

        <div class="card__infos__price-stock">
            <!-- Prix du produit -->
            <div class="card__infos__price-stock__price">
                <p>Prix: <?php echo $product['prix'] ?> €</p>
            </div>

            <!-- Stock du produit -->
            <div class="card__infos__price-stock__stock">
                <p>Stock: <?php echo $product['stock'] ?></p>
            </div>
        </div>
    </div>

    <!-- Envoi des données vers Javascript pour traitement et affichage -->
    <div class="card__button">
        <button class="card__button--btn" type="button"
            data-id="<?php echo $product['id'] ?>"
            data-nom="<?php echo $product['nom'] ?>"
            data-sousTitre="<?php echo $product['sous_titre'] ?>"
            data-prix="<?php echo $product['prix'] ?>"
            data-stock="<?php echo $product['stock'] ?>"
            data-description="<?php echo $product['description'] ?>"
            data-image="<?php echo $product['image'] ?>"
            >Voir la description du produit</button>
    </div>
</div>