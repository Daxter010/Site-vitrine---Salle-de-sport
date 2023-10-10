<?php
    // SEO
    $titlePage = "Magic Form Romilly-sur-Seine | Salle de Sport et Fitness";
    $metaDescriptionPage = "Découvrez Magic Form Romilly-sur-Seine, votre salle de sport locale. Profitez de nos équipements de fitness de qualité et de cours variés. Rejoignez-nous pour une vie saine et active.";
    $keywordsPage = "Magic Form, Romilly-sur-Seine, salle de sport, fitness, entraînement, cours, bien-être";
    // Head
    include_once ROOT . '/src/views/template/head.php'
?>
<body>
    <header>
        <!-- === Barre de navigation === -->
        <?php include_once ROOT . '/src/views/template/navbar.php'?>
    </header>

    <main>
        <h1 class="ref-only">Bienvenue chez Magic Form Romilly-sur-Seine !</h1>
        <!-- === Section 1 : Carrousel === -->
       <section id="sectionCarouselAccueil">
            <h2 class="ref-only">Découvrez nous ! Chez Magic Form Romilly-sur-Seine</h2>
            <!-- Carousel -->
            <div class="carousel">
                <!-- Images -->
               <div class="carousel__slider">
                    <!-- Première image -->
                    <div class="carousel__slider__item">
                        <img src="/public/assets/images/accueil/1064201.png" alt="Tous les espaces de Magic Form Romilly-sur-Seine" class="carousel__slide__item--img" loading="lazy">
                        <h2 class="carousel__slide__item--title">Découvrez <br> nos espaces !</h2>
                        <a href="/espaces" class="carousel__slide__item--link">Voir nos espaces</a>
                    </div>

                    <!-- Deuxième image -->
                    <div class="carousel__slider__item">
                        <img src="/public/assets/images/accueil/1064201.png" alt="Tous les coachs sportifs de Magic Form Romilly-sur-Seine" class="carousel__slide__item--img" loading="lazy">
                        <h2 class="carousel__slide__item--title">Faites connaissance avec nos coachs !</h2>
                        <a href="/coachs" class="carousel__slide__item--link">Voir nos coachs</a>
                    </div>

                    <!-- Troisième image -->
                    <div class="carousel__slider__item">
                        <img src="/public/assets/images/accueil/1064201.png" alt="Tous les cours collectifs de Magic Form Romilly-sur-Seine" class="carousel__slide__item--img" loading="lazy">
                        <h2 class="carousel__slide__item--title">Participez à nos cours collectifs !</h2>
                        <a href="/cours-collectifs" class="carousel__slide__item--link">Découvrir nos cours</a>
                    </div>                    
               </div>
            </div>
       </section>

       <!-- === Section 2 : Liens boutique, évènements, pub application mobile Magic Form ===-->
       <section id="seciontLinksEventsPub">
            <h2 class="ref-only">Découvrez un large choix de produits, Participez à nos nombreux évènements à Magic Form Romilly-sur-Seine !</h2>
            <!-- Conteneur des trois blocks -->
            <div class="main__containerr">
                <div class="main__container__products-pub">
                    <!-- Produits -->
                    <div class="main__container__products"> 
                        <img src="/public/assets/images/accueil/ProduitsEricFavrewebp-min.webp" alt="Le logo de la boutique Eric Favre" class="main__container__products--img" loading="lazy">

                        <!-- Lien vers la page produit -->
                        <a href="/produits" class="main__container__products--link">Voir nos produits</a>
                    </div>

                    <!-- Publicité application -->
                    <div class="main__container__pub">
                        <div class="main__container__pub__content-text">
                            <!-- Titre de la publicité -->
                            <h3 class="main__container__pub__content-text--title">Télécharger l'application Magic Form France</h3>

                            <!-- Liste des points forts -->
                            <ul class="main__container__pub__content-text__list">
                                <li class="main__container__pub__content-text__list--item">Suivi personnalisé</li>
                                <li class="main__container__pub__content-text__list--item">Prise de rendez-vous en ligne</li>
                                <li class="main__container__pub__content-text__list--item">Gérez vos entraînements</li>
                            </ul>

                            <!-- Liens vers les boutiques d'applications -->
                            <div>
                                <!-- Google Store -->
                                <a href="https://play.google.com/store/apps/details?id=com.cclub.libertygymdammarie&hl=fr&gl=US&pli=1" class="main__container__pub__content-text__app--link">
                                    <img src="/public/assets/images/accueil/GoogleStore-min.webp" alt="Le logo de Google Store" loading="lazy">
                                </a>

                                <!-- Apple Store -->
                                <a href="https://apps.apple.com/fr/app/magic-form-france/id1132504423" class="main__container__pub__content-text__app--link">
                                    <img id="apple" src="/public/assets/images/accueil/AppleStore-min.webp" alt="Le logo de Apple Store" loading="lazy">
                                </a>
                            </div>
                        </div>

                        <!-- Image de la publicité -->
                        <div class="main__container__pub__content-img">
                            <img src="/public/assets/images/accueil/Pub-min.webp" alt="La page d'accueil de l'application mobile Magic Form France" loading="lazy">
                        </div>
                    </div>
                </div>

                <!-- Evènements -->
                <div class="main__container__events">
                    <img src="/public/assets/images/accueil/IMG_evenements.png" alt="Divers évènements à Magic Form Romilly-sur-Seine" loading="lazy">
                    <h3 class="main__container__events--title">Participez à nos évènements réguliers !</h3>
                    <a href="/evenements" class="main__container__events--link">Voir nos évènements</a>
                </div>
            </div>
       </section>

       <!-- === Section 3 : Petit carroussel de phrases === -->
       <section id="sectionLittleCarouselAccueil">
            <h2 class="ref-only">Trouvez la motivation à Magic Form Romilly-sur-Seine !</h2>
            <!-- Carousel -->
            <div class="little__carousel">
                <!-- Phrases -->
               <div class="little__carousel__slider">
                    <!-- Premier texte -->
                    <div class="little__carousel__slider__item">
                        <h3 class="little__carousel__slide__item--title">Motivation</h3>
                        <p class="little__carousel__slide__item--text"><dfn>La motivation, c'est l'énergie intérieure qui nous pousse à agir pour atteindre nos buts et surmonter les obstacles.</dfn></p>
                    </div>

                    <!-- Deuxième texte -->
                    <div class="little__carousel__slider__item">
                        <h3 class="little__carousel__slide__item--title">Détermination</h3>
                        <p class="little__carousel__slide__item--text"><dfn>La détermination est la volonté et la persévérance à atteindre un objectif malgré les obstacles et les difficultés.</dfn></p>
                    </div>

                    <!-- Troisième texte -->
                    <div class="little__carousel__slider__item">
                        <h3 class="little__carousel__slide__item--title">Régularité</h3>
                        <p class="little__carousel__slide__item--text"><dfn>La régularité est la clé qui transforme les petits pas en grandes réussites.</dfn></p>
                    </div>                    
               </div>
            </div>
       </section>

       <!-- === Section 4 : Lien Magic Form France / Lien page contact / lien partenaire === -->
       <section id="sectionLinksWebsiteContactPartner">
            <h2 class="ref-only">Visitez notre site officiel Magic Form France, contactez-nous et rendez visite chez notre partenaire Vélo & Oxygen !</h2>
            <!-- Conteneur principal -->
            <div class="main__container_links-pages">
                <!-- Vers Magic Form France -->
                <div class="main__container_links-pages__mf">
                    <a href="https://magic-form.fr/" class="main__container_links-pages__mf--link">Aller vers Magic Form</a>
                    <h3>Obtenez plus d'informations sur Magic Form France !</h3>
                    <img src="/public/assets/images/accueil/MagicFormFrance-min.webp" alt="Un coach encourageant son adhérent sur un appareil de cardio" loading="lazy">
                </div>

                <!-- Vers page de contact -->
                <div class="main__container_links-pages__contact">
                    <a href="/contact" class="main__container_links-pages__contact--link">Contactez-nous</a>
                    <h3>Contactez-nous plus pour plus d'informations !</h3>
                    <img src="/public/assets/images/accueil/hhh.webp" alt="Un futur adhérant demandant des informations sur Magic Form Romilly-sur-Seine" loading="lazy">
                </div>

                <!-- Vers Vélo & Oxygen -->
                <div class="main__container_links-pages__partner">
                    <a href="https://www.velo-oxygen.fr/" class="main__container_links-pages__partner--link">Aller sur Vélo & Oxygen</a>
                    <h3>Rendez visite à notre partenaire !</h3>
                    <img src="/public/assets/images/accueil/VeloOxygen-min.webp" alt="Le logo de Vélo & Oxygen">
                    <img src="/public/assets/images/accueil/Logo_Velo__Oxygen-min.webp" alt="Un groupe de cyclistes faisant une course de vélos" loading="lazy">
                </div>
            </div>
       </section>
    </main>

    <footer>
        <!-- === Footer === -->
        <?php include_once ROOT . '/src/views/template/footer.php' ?>
    </footer>

    <script src="/public/assets/js/carousel.js" defer></script>
</body>

<!-- Foot -->
<?php include_once ROOT . '/src/views/template/foot.php' ?>