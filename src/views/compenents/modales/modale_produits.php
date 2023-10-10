<!-- Conteneur principal -->
<div class="modale-products__hidden">
    <!-- Conteneur image -->
    <div class="modale-products__hidden__picture">
        <picture>
            <img id="datePictureModal" class="card__picture--img" src="" alt="Divers produits Eric Favre chez Magic Form Romilly-sur-Seine" loading="lazy">
        </picture>
    </div>   

    <!-- Conteneur principal informations -->
    <div class="modale-products__hidden__infos">
        <!-- Conteneur titre et bouton -->
        <div class="modale-products__hidden__infos__title">
            <!-- Conteneur titre -->
            <div class="modale-products__hidden__infos__title--title">
                <h2 id="dataTitleModal"></h2> <!-- Tous les ID "data" sont utilisés pour la récupération des données de la BDD (Voir fichier JS) -->
            </div>

            <!-- Bouton fermer -->
            <div class="btn-close-products">
                <img src="/public/assets/icons/CrossBlack-min.svg" alt="">
            </div>
        </div>

        <!-- Conteneur sous-titre -->
        <div class="modale-products__hidden__infos__subtitle">
            <p class="modale-products__hidden__infos__subtitle--text" id="dataSubtitleModal"></p>
        </div>

        <!-- Conteneur description -->
        <div class="modale-products__hidden__infos__description">
            <!-- Conteneur titre description -->
            <div class="modale-products__hidden__infos__description__title">
                <p class="modale-products__hidden__infos__description__title--title">Description</p>
            </div>

            <!-- Conteneur texte description -->
            <div class="modale-products__hidden__infos__description__text">
                <p class="modale-products__hidden__infos__description__text--text" id="dataDescriptionModal"></p>
            </div>
        </div>

        <!-- Conteneur prix et stock -->
        <div class="modale-products__hidden__infos__price-stock">
            <!-- Conteneur prix -->
            <div class="modale-products__hidden__infos__price-stock__price">
                <p class="modale-products__hidden__infos__price-stock__price--text" id="dataPriceModal"></p>
            </div>
            
            <!-- Conteneur stock -->
            <div class="modale-products__hidden__infos__price-stock__stock">
                <p class="modale-products__hidden__infos__price-stock__stock--text" id="dataStockModal"></p>
            </div>
        </div>

        <!-- Conteneur alerte accueil -->
        <div class="modale-products__hidden__infos__alert">
            <p class="modale-products__hidden__infos__alert--text">Rendez-vous à l'accueil de votre centre Magic Form Romilly-sur-Seine</p>
        </div>
    </div>   
</div>