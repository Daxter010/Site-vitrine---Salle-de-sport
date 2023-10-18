<!-- Barre de navigation -->
<nav class="nav">
    <!-- Logo -->
    <div class="nav__logo">
        <a href="/" class="nav__logo-link">
            <img id="logoWhiteMode" src="/public/assets/logo/LogoMFB-min.webp" alt="Une icône de Facebook">
        </a>
    </div>

    <!-- Bouton du menu burger pour version mobile -->
    <div class="nav__burger">
        <button class="nav__burger--button">
            <img src="/public/assets/icons/IconBurgerBlack-min.svg" alt="Un icône représentant un menu burger pour les versions téléphone">
        </button>
    </div>

    <!-- Menu mobile -->    
    <div class="nav__menu-mobile">
        <ul class="nav__list-mobile">
            <li class="nav__item-mobile">
                <a href="/">Accueil</a>
            </li>
            <li class="nav__item-mobile">
                <a href="/espaces">Espaces</a>
            </li>
            <li class="nav__item-mobile">
                <a href="/coachs">Coachs</a>
            </li>
            <li class="nav__item-mobile">
                <a href="/cours-collectifs">Cours collectifs</a>
            </li>
            <li class="nav__item-mobile">
                <a href="/evenements">Évènements</a>
            </li>
            <li class="nav__item-mobile">
                <a href="/produits">Produits</a>
            </li>
            <li class="nav__item-mobile">
                <a href="/contact">Contact</a>
            </li>
        </ul>

       <div class="nav__control-mobile">
            <!-- Icônes sociales pour version mobile -->
            <div class="nav__icons-mobile">
                <a href="https://www.facebook.com/magicform.romilly/?locale=fr_FR" class="nav__icon-mobile">
                    <img src="/public/assets/icons/IconFacebookBlack-min.svg" alt="Une icône de Facebook">
                </a>
                <a href="" class="nav__icon-mobile">
                    <img src="/public/assets/icons/IconInstagramBlack-min.svg" alt="Une icône d'Instagram">
                </a>
                <a href="" class="nav__icon-mobile">
                    <img src="/public/assets/icons/IconSnapchatBlack-min.svg" alt="Une icône de Snapchat">
                </a>
            </div>

            <div class="nav__dark-mode-mobile">
                <!-- Bouton de mode sombre pour version mobile -->
                <div class="back-dark-mode">
                    <button class="nav__dark-mode-button" aria-label="Activer le mode sombre"></button>
                </div>
            </div>   
       </div>
    </div>

    <!-- Contenu principal de la barre de navigation -->
    <div class="nav__content">
        <div class="nav__controls">
            <div class="nav__dark-mode">
                <div class="back-dark-mode">
                    <button class="nav__dark-mode-button" aria-label="Activer le mode sombre"></button>
                </div>
            </div>
            
            <!-- Icônes sociales -->
            <div class="nav__icons">
                <a href="https://www.facebook.com/magicform.romilly/?locale=fr_FR" class="nav__icon">
                    <img src="/public/assets/icons/IconFacebookBlack-min.svg" alt="Une icône de Facebook">
                </a>
                <a href="" class="nav__icon">
                    <img src="/public/assets/icons/IconInstagramBlack-min.svg" alt="Une icône d'Instagram">
                </a>
                <a href="" class="nav__icon">
                    <img src="/public/assets/icons/IconSnapchatBlack-min.svg" alt="Une icône de Snapchat">
                </a>
            </div>
        </div>

        <!-- Menu de navigation -->
        <div class="nav__menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="/">Accueil</a>
                </li>
                <!-- Menu déroulant "Espaces" -->
                <li class="nav__item nav__item--submenu">
                    <a href="/espaces">Espaces</a>
                    <ul class="nav__sublist">
                        <!-- Sous-liens du menu déroulant "Espaces" -->
                        <li class="nav__subitem">
                            <a href="/coachs">Coachs</a>
                        </li>
                        <li class="nav__subitem">
                            <a href="/cours-collectifs">Cours collectifs</a>
                        </li>
                    </ul>
                </li>
                <li class="nav__item">
                    <a href="/evenements">Évènements</a>
                </li>
                <li class="nav__item">
                    <a href="/produits">Produits</a>
                </li>
                <li class="nav__item">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>