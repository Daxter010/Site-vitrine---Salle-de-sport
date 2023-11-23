<?php 
    // SEO
    $titlePage = "Mentions légales | Magic Form Romilly-sur-Seine";
    $metaDescriptionPage = "Consultez nos mentions légales pour en savoir plus sur l'identité de notre entreprise, notre adresse officielle et les obligations légales. Nous sommes transparents sur nos pratiques et respectons la confidentialité de vos données. Découvrez notre engagement envers la conformité et la transparence.";
    $keywordsPage = "Mentions légales, Informations légales, Identité de l'entreprise, Adresse officielle, Responsable de la publication, Propriété intellectuelle, Respect de la vie privée, Conformité légale, Transparence, Conditions d'utilisation, Politique de confidentialité, Règlementation, Droits des utilisateurs, Cookies, Responsabilité, Juridiction compétente";

    // Head
    include_once ROOT . '/src/views/template/head.php'
?>
<body>
    <header>
        <!-- === Barre de navigation === -->
        <?php include_once ROOT . '/src/views/template/navbar.php'?>
    </header>

    <main>
        <section id="sectionMentions">
            <div class="main__container-mentions">
                <div class="main__container-mentions__container-title">
                    <h1>Mentions légales</h1>
                    <p>Conformément aux dispositions de la loi n° 2004-575 du 21 juin 2004 pour la confiance en l'économie numérique, il est précisé aux utilisateurs du Site l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>
                </div>

                <div class="main__container-mentions__container-edition">
                    <h2>Édition du site</h2>
                    <p>Le présent site internet est édité par [Nom de l'entreprise], une société [forme juridique] au capital de [montant du capital social] euros, immatriculée au Registre du Commerce et des Sociétés de [Ville] sous le numéro [numéro RCS] et dont le siège social est situé [adresse du siège social].</p><br>
                    <p>Téléphone : [numéro de téléphone]</p>
                    <p>E-mail : [adresse e-mail]</p>
                    <p>Directeur de la publication : [Nom du directeur de la publication]</p>
                </div>

                <div class="main__container-mentions__container-hebergeur">
                    <h2>Hébergeur</h2>
                    <p>Ce site est hébergé par [Nom de l'hébergeur], dont le siège social est situé à [adresse de l'hébergeur].</p><br>
                    <p>Téléphone : [numéro de téléphone de l'hébergeur]</p>
                    <p>E-mail : [adresse e-mail de l'hébergeur]</p>
                </div>

                <div class="main__container-mentions__container-responsable">
                    <h2>Responsable de la rédaction</h2>
                    <p>Le contenu de ce site internet, y compris les textes, images, graphiques, logos, icônes et tout autre élément, est la propriété exclusive de [Nom de l'entreprise] ou de ses partenaires et est protégé par les lois relatives à la propriété intellectuelle.</p><br>
                    <p>Toute reproduction, modification, distribution ou représentation intégrale ou partielle de ce site ou de son contenu, par quelque procédé que ce soit, sans l'autorisation préalable et écrite de [Nom de l'entreprise], est interdite et constituerait une contrefaçon.</p>
                </div>

                <div class="main__container-mentions__container-privee">
                    <h2>Données personnelles</h2>
                    <p>Pour en savoir plus sur la collecte et le traitement de vos données personnelles sur ce site, veuillez consulter notre <a href="/politiques-de-confidentialites">Politique de Confidentialité</a>.</p><br>
                </div>

                <div class="main__container-mentions__container-contact">
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