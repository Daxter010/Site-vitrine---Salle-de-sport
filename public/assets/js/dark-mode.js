/*
    Fonction 'indicatorDarkMode()': 
    * C'est une fonction qui gère le comportement du bouton dark mode et ses interactions.
*/
function indicatorDarkMode() {
    const backBtnDarkMode = document.querySelectorAll('.back-dark-mode'); // Bouton dark mode
    const arrowsBlack = document.querySelectorAll('.main__container__accordeon__arrow--black'); // icônes flèches noires
    const arrowsWhite = document.querySelectorAll('.main__container__accordeon__arrow--white'); // icônes flèches blanches

    // Fait disparaître les flèches blanches
    arrowsWhite.forEach((arrowWhite) => {
    arrowWhite.style.display = 'none';
    });

    backBtnDarkMode.forEach((btn) => {
        // Lors du click...
        btn.addEventListener('click', function() {
            btn.classList.toggle('active');
            
            // Changement de couleur du logo
            const pictureWhiteMode = document.querySelector('#logoWhiteMode');
            const pictureDarkMode = document.querySelector('#logoDarkMode');
            // Si mon bouton, au click, contient la class 'active' alors...
            if (btn.classList.contains('active')) {
                pictureWhiteMode.style.display = 'none';
                pictureDarkMode.style.display = 'block';
            } else {
                pictureWhiteMode.style.display = 'block';
                pictureDarkMode.style.display = 'none';
            }

            // Changement couleur icon burger
            const iconsBurger = document.querySelector('.nav__burger--button img');
            if (btn.classList.contains('active')) {
                iconsBurger.src = "/public/assets/icons/IconBurgerWhite-min.svg";
            } else {
                iconsBurger.src = "/public/assets/icons/IconBurgerBlack-min.svg";
            }

            // Chanegement de couleurs des icônes de la barre de navigation mobile
            const iconsMobile = document.querySelectorAll('.nav__icon-mobile img');
            iconsMobile.forEach((icon, index) => {
                if (index === 0) {
                    // Si mon bouton, au click, contient la class 'active' alors...
                    if (btn.classList.contains('active')) {
                        icon.src = "/public/assets/icons/IconFacebookWhite-min.svg";
                    } else {
                        icon.src = "/public/assets/icons/IconFacebookBlack-min.svg";
                    }
                } else if (index === 1) {
                    if (btn.classList.contains('active')) {
                        icon.src = "/public/assets/icons/IconInstagramWhite-min.svg";
                    } else {
                        icon.src = "/public/assets/icons/IconInstagramBlack-min.svg";
                    }
                } else if (index === 2) {
                    if (btn.classList.contains('active')) {
                        icon.src = "/public/assets/icons/IconSnapchatWhite-min.svg";
                    } else {
                        icon.src = "/public/assets/icons/IconSnapchatBlack-min.svg";
                    }
                } 
            });

            // Changement de couleurs des icônes de la barre de navigation
            const iconsNavbar = document.querySelectorAll('.nav__icon > img');
            iconsNavbar.forEach((icon, index) => {
                if (index === 0) {
                    // Si mon bouton, au click, contient la class 'active' alors...
                    if (btn.classList.contains('active')) {
                        icon.src = "/public/assets/icons/IconFacebookWhite-min.svg";
                    } else {
                        icon.src = "/public/assets/icons/IconFacebookBlack-min.svg";
                    }
                } else if (index === 1) {
                    if (btn.classList.contains('active')) {
                        icon.src = "/public/assets/icons/IconInstagramWhite-min.svg";
                    } else {
                        icon.src = "/public/assets/icons/IconInstagramBlack-min.svg";
                    }
                } else if (index === 2) {
                    if (btn.classList.contains('active')) {
                        icon.src = "/public/assets/icons/IconSnapchatWhite-min.svg";
                    } else {
                        icon.src = "/public/assets/icons/IconSnapchatBlack-min.svg";
                    }
                } 
            });

            // Changement de couleurs des icônes du footer
            const iconsFooter = document.querySelectorAll('.main__container__footer-socials__link--img');
            iconsFooter.forEach((icon, index) => {
                if (index === 0) {
                    // Si mon bouton, au click, contient la class 'active' alors...
                    if (btn.classList.contains('active')) {
                        icon.src = "/public/assets/icons/IconFacebookWhite-min.svg";
                    } else {
                        icon.src = "/public/assets/icons/IconFacebookBlack-min.svg";
                    }
                } else if (index === 1) {
                    if (btn.classList.contains('active')) {
                        icon.src = "/public/assets/icons/IconInstagramWhite-min.svg";
                    } else {
                        icon.src = "/public/assets/icons/IconInstagramBlack-min.svg";
                    }
                } else if (index === 2) {
                    if (btn.classList.contains('active')) {
                        icon.src = "/public/assets/icons/IconSnapchatWhite-min.svg";
                    } else {
                        icon.src = "/public/assets/icons/IconSnapchatBlack-min.svg";
                    }
                } 
            });

            // Changement de couleurs des icônes flèches, cours collectifs
            // Si mon bouton, au click, contient la class 'active' alors...
            if (btn.classList.contains('active')) {
                arrowsWhite.forEach((arrowWhite) => {
                    arrowWhite.style.display = 'block';
                });
                arrowsBlack.forEach((arrowBlack) => {
                    arrowBlack.style.display = 'none';
                });
            } else {
                arrowsWhite.forEach((arrowWhite) => {
                    arrowWhite.style.display = 'none';
                });
                arrowsBlack.forEach((arrowBlack) => {
                    arrowBlack.style.display = 'block';
                });
            }

            // Changement de couleurs des icôness page contact
            const iconTitleOne = document.querySelector('.main__container__contact__schedules-normal__title img'); // Icône horloge slide 1
            const iconTitleTwo = document.querySelector('.main__container__contact__schedules-medical__title img'); // Icône horloge slide 2
            const iconsAlertContact = document.querySelectorAll('.main__container__contact__schedules-medical__alert img'); // Icônes alerte
            const iconsSocialContact = document.querySelectorAll('.main__container__contact__coordonnees__container img'); // Icônes réseaux
        
            if (btn.classList.contains('active')) {
                iconTitleOne.src = "/public/assets/icons/ClockWhite-min.svg";
                iconTitleTwo.src = "/public/assets/icons/ClockWhite-min.svg";

                iconsAlertContact.forEach((icon) => {
                    icon.src = "/public/assets/icons/AlertWhite-min.svg";
                });

                iconsSocialContact.forEach((icon, index) => {
                    if (index === 0) {
                        icon.src = "/public/assets/icons/GeoWhite-min.svg";
                    } else if (index === 1) {
                        icon.src = "/public/assets/icons/TelephoneWhite-min.svg";
                    } else if (index === 2) {
                        icon.src = "/public/assets/icons/GlobeWhite-min.svg";
                    } else if (index === 3) {
                        icon.src = "/public/assets/icons/IconFacebookWhite-min.svg";
                    } else if (index === 4) {
                        icon.src = "/public/assets/icons/IconInstagramWhite-min.svg";
                    } else if (index === 5) {
                        icon.src = "/public/assets/icons/IconSnapchatWhite-min.svg";
                    }
                });

            } else {
                iconTitleOne.src = "/public/assets/icons/ClockBlack-min.svg";
                iconTitleTwo.src = "/public/assets/icons/ClockBlack-min.svg";

                iconsAlertContact.forEach((icon) => {
                    icon.src = "/public/assets/icons/AlertBlack-min.svg";
                });

                iconsSocialContact.forEach((icon, index) => {
                    if (index === 0) {
                        icon.src = "/public/assets/icons/GeoBlack-min.svg";
                    } else if (index === 1) {
                        icon.src = "/public/assets/icons/TelephoneBlack-min.svg";
                    } else if (index === 2) {
                        icon.src = "/public/assets/icons/GlobeBlack-min.svg";
                    } else if (index === 3) {
                        icon.src = "/public/assets/icons/IconFacebookBlack-min.svg";
                    } else if (index === 4) {
                        icon.src = "/public/assets/icons/IconInstagramBlack-min.svg";
                    } else if (index === 5) {
                        icon.src = "/public/assets/icons/IconSnapchatBlack-min.svg";
                    } 
                });
            }
        });
    });

    
}

indicatorDarkMode();

/*
    Fonction 'toggleDarkModeElements()': 
    * C'est une fonction qui bascule entre le mode sombre et clair pour un élément donné.
*/
function toggleDarkModeElements(element) {
   const isDarkMode = element.classList.contains('dark-mode');
   if (isDarkMode) {
    element.classList.remove('dark-mode');
   } else {
    element.classList.add('dark-mode');
   }
}

// Selectionne tous les boutons dark mode
const btnDarkMode = document.querySelectorAll('.back-dark-mode');
// Parcourt tous les boutons dark mode et ajoute un événement de clic pour activer le changement de mode pour l'ensemble des éléments.
btnDarkMode.forEach((btn) => {
    btn.addEventListener('click', function() {
        const allElements = document.querySelectorAll('*');
        allElements.forEach((element) => {
            toggleDarkModeElements(element);
        });
    });
});