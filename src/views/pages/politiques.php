<?php 
    // SEO
    $titlePage = "Politiques de confidentialités | Magic Form Romilly-sur-Seine";
    $metaDescriptionPage = "Consultez notre Politique de Confidentialité pour comprendre comment nous protégeons vos données. Nous respectons votre vie privée. Informations sur la collecte et l'utilisation des données.";
    $keywordsPage = "Politique de confidentialité, Données personnelles, Confidentialité en ligne, Respect de la vie privée, Protection des données, Règlement général sur la protection des données (RGPD), Sécurité des données, Vie privée en ligne";

    // Head
    include_once ROOT . '/src/views/template/head.php'
?>
<body>
    <header>
        <!-- === Barre de navigation === -->
        <?php include_once ROOT . '/src/views/template/navbar.php'?>
    </header>

    <main>
        <section id="sectionPolitiques">
            <div class="main__container-mentions">
                <div class="main__container-politiques__container-title">
                    <h1>Politique de Confidentialité</h1>
                    <p>Nous ne collectons aucune donnée personnelle identifiable via ce site web. Vous pouvez naviguer sur notre site sans avoir à fournir de données personnelles telles que le nom, l'adresse e-mail, le numéro de téléphone, etc.</p>
                </div>

                <div class="main__container-politiques__container-cookie">
                    <h2>Cookies et Technologies Similaires</h2>
                    <p>Bien que nous ne collectons pas de données personnelles, veuillez noter que des cookies et des technologies similaires peuvent être utilisés à des fins techniques ou d'analyse, mais ils ne sont pas liés à des données personnelles.</p>
                </div>

                <div class="main__container-politiques__container-utilisation">
                    <h2>Utilisation de notre Site Web</h2>
                    <p>En tant qu'utilisateur, vous pouvez librement naviguer sur notre site web sans craindre de partager des informations personnelles. Votre vie privée est importante pour nous et nous respectons votre anonymat tout au long de votre expérience sur notre site.</p>
                </div>

                <div class="main__container-politiques__container-contact">
                    <h2>Nous contacter</h2>
                    <p>Pour toute question ou demande concernant ce site, veuillez nous contacter à l'adresse suivante : [adresse e-mail de contact].</p><br>
                    <p>Par téléphone : 01 76 39 00 60</p>
                    <p>Par email : contact@legalstart.fr</p>
                    <p>Par courrier : Legalstart.fr (Yolaw SAS), 50 rue d'Hauteville, 75010 Paris</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <!-- === Footer === -->
        <?php include_once ROOT . '/src/views/template/footer.php'?>
    </footer>

    <!-- Fichiers JS -->
    <script src="/dist/dark-mode-min.js" defer></script>
    <script src="/dist/burger-min.js" async></script>
</body>
<!-- Foot -->
<?php include_once ROOT . '/src/views/template/foot.php'?>