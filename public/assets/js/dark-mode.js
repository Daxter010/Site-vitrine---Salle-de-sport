// Tous les éléments à modifier (img / icônes) pour le dark mode

// Icônes de réseaux sociaux (navbar desktop)
const socialIconsDesktopPath = {
    white: [
        "/public/assets/icons/IconFacebookWhite-min.svg",
        "/public/assets/icons/IconInstagramWhite-min.svg",
        "/public/assets/icons/IconSnapchatWhite-min.svg"
    ],
    black: [
        "/public/assets/icons/IconFacebookBlack-min.svg",
        "/public/assets/icons/IconInstagramBlack-min.svg",
        "/public/assets/icons/IconSnapchatBlack-min.svg"
    ]
}

// Icônes de réseaux sociaux (navbar mobile)
const socialIconsMobilePath = {
    white: [
        "/public/assets/icons/IconFacebookWhite-min.svg",
        "/public/assets/icons/IconInstagramWhite-min.svg",
        "/public/assets/icons/IconSnapchatWhite-min.svg"
    ],
    black: [
        "/public/assets/icons/IconFacebookBlack-min.svg",
        "/public/assets/icons/IconInstagramBlack-min.svg",
        "/public/assets/icons/IconSnapchatBlack-min.svg"
    ]
}

// Icônes de réseaux sociaux (footer)
const socialIconsFooterPath = {
    white: [
        "/public/assets/icons/IconFacebookWhite-min.svg",
        "/public/assets/icons/IconInstagramWhite-min.svg",
        "/public/assets/icons/IconSnapchatWhite-min.svg"
    ],
    black: [
        "/public/assets/icons/IconFacebookBlack-min.svg",
        "/public/assets/icons/IconInstagramBlack-min.svg",
        "/public/assets/icons/IconSnapchatBlack-min.svg"
    ]
}

// Icônes de flèches (accordéon cours-collectifs)
const arrowsIconsPath = {
    white: [
        "/public/assets/icons/ArrowRightWhite-min.svg",
        "/public/assets/icons/ArrowRightWhite-min.svg",
        "/public/assets/icons/ArrowRightWhite-min.svg",
        "/public/assets/icons/ArrowRightWhite-min.svg"
    ],
    black: [
        "/public/assets/icons/ArrowRightBlack-min.svg",
        "/public/assets/icons/ArrowRightBlack-min.svg",
        "/public/assets/icons/ArrowRightBlack-min.svg",
        "/public/assets/icons/ArrowRightBlack-min.svg"
    ]
}

// Icônes de croix (modale produit)
const crossIconsModalProductPath = {
    white: [
        "/public/assets/icons/CrossWhite-min.svg"
    ],
    black: [
        "/public/assets/icons/CrossBlack-min.svg"
    ]
}

// Icônes divers (contact)
const diversIconsContactPath = {
    white: [
        "/public/assets/icons/GeoWhite-min.svg",
        "/public/assets/icons/TelephoneWhite-min.svg",
        "/public/assets/icons/GlobeWhite-min.svg",
        "/public/assets/icons/IconFacebookWhite-min.svg",
        "/public/assets/icons/IconInstagramWhite-min.svg",
        "/public/assets/icons/IconSnapchatWhite-min.svg"
    ],
    black: [
        "/public/assets/icons/GeoBlack-min.svg",
        "/public/assets/icons/TelephoneBlack-min.svg",
        "/public/assets/icons/GlobeBlack-min.svg",
        "/public/assets/icons/IconFacebookBlack-min.svg",
        "/public/assets/icons/IconInstagramBlack-min.svg",
        "/public/assets/icons/IconSnapchatBlack-min.svg"
    ]
}

// Icônes divers (contact)
const diversIconsPath = {
    white: [
        "/public/assets/icons/GeoWhite-min.svg",
        "/public/assets/icons/TelephoneWhite-min.svg",
        "/public/assets/icons/GlobeWhite-min.svg",
        "/public/assets/icons/IconFacebookWhite-min.svg",
        "/public/assets/icons/IconInstagramWhite-min.svg",
        "/public/assets/icons/IconSnapchatWhite-min.svg"
    ],
    black: [
        "/public/assets/icons/GeoBlack-min.svg",
        "/public/assets/icons/TelephoneBlack-min.svg",
        "/public/assets/icons/GlobeBlack-min.svg",
        "/public/assets/icons/IconFacebookBlack-min.svg",
        "/public/assets/icons/IconInstagramBlack-min.svg",
        "/public/assets/icons/IconSnapchatBlack-min.svg"
    ]
}

// Icônes horlogoe slide 1 (contact)
const clockOneIconsPath = {
    white: [
        "/public/assets/icons/ClockWhite-min.svg"
    ],
    black: [
        "/public/assets/icons/ClockBlack-min.svg"
    ]
}

// Icônes horloge slide 2 (contact)
const clockTwoIconsPath = {
    white: [
        "/public/assets/icons/ClockWhite-min.svg"
    ],
    black: [
        "/public/assets/icons/ClockBlack-min.svg"
    ]
}

// Icônes divers (contact)
const alertIconsPath = {
    white: [
        "/public/assets/icons/AlertWhite-min.svg",
        "/public/assets/icons/AlertWhite-min.svg"
    ],
    black: [
        "/public/assets/icons/AlertBlack-min.svg",
        "/public/assets/icons/AlertBlack-min.svg"
    ]
}

// Fonction pour basculer le mode sombre
const toggleDarkMode = () => {
    const isDarkModeEnabled = localStorage.getItem('darkMode') === 'true';
    
    // Selectionne tous les éléments
    const allElements = document.querySelectorAll('*');
    allElements.forEach((element) => {
        // Vérifie si la classe dark-mode est présente
        element.classList.toggle('dark-mode', isDarkModeEnabled);
    });

    // Mettre à jour l'icône burger
    const burger = document.querySelector('.nav__burger--button > img');
    burger.src = isDarkModeEnabled ? "/public/assets/icons/IconBurgerWhite-min.svg": "/public/assets/icons/IconBurgerBlack-min.svg";

    // Mettre à jour le logo de la navbar
    const logo = document.querySelector('#logoWhiteMode');
    logo.src = isDarkModeEnabled ? "/public/assets/logo/LogoMFN-min.webp" : "/public/assets/logo/LogoMFB-min.webp";

    // Met à jour les icônes de réseaux sociaux (navbar desktop)
    const socialIconsDesktop = document.querySelectorAll('.nav__icon > img');
    socialIconsDesktop.forEach((icon, index) => {
        if (index < socialIconsDesktopPath.white.length) {
            icon.src = isDarkModeEnabled ? socialIconsDesktopPath.white[index] : socialIconsDesktopPath.black[index];
        }
    });

    // Met à jour les icônes de réseaux sociaux (navbar mobile)
    const socialIconsMobile = document.querySelectorAll('.nav__icon-mobile > img');
    socialIconsMobile.forEach((icon, index) => {
        if (index < socialIconsMobilePath.white.length) {
            icon.src = isDarkModeEnabled ? socialIconsMobilePath.white[index] : socialIconsMobilePath.black[index];
        }
    });

    // Met à jour les icônes de réseaux sociaux (footer)
    const socialIconsFooter = document.querySelectorAll('.main__container__footer-socials__link > img');
    socialIconsFooter.forEach((icon, index) => {
        if (index < socialIconsFooterPath.white.length) {
            icon.src = isDarkModeEnabled ? socialIconsFooterPath.white[index] : socialIconsFooterPath.black[index];
        }
    });

    // Met à jour les icônes de réseaux sociaux (accordéon cours-collectifs)
    const arrowsIcons = document.querySelectorAll('.main__container__accordeon__arrow--black');
    arrowsIcons.forEach((icon, index) => {
        if (index < arrowsIconsPath.white.length) {
            icon.src = isDarkModeEnabled ? arrowsIconsPath.white[index] : arrowsIconsPath.black[index];
        }
    });

    // Met à jour les icônes de croix (modale produit)
    const crossIconsModalProduct = document.querySelectorAll('.btn-close-products > img');
    crossIconsModalProduct.forEach((icon, index) => {
        if (index < crossIconsModalProductPath.white.length) {
            icon.src = isDarkModeEnabled ? crossIconsModalProductPath.white[index] : crossIconsModalProductPath.black[index];
        }
    });

    // Met à jour les icônes (contact)
    const diversIconsContact = document.querySelectorAll('.main__container__contact__coordonnees__container > img');
    diversIconsContact.forEach((icon, index) => {
        if (index < diversIconsContactPath.white.length) {
            icon.src = isDarkModeEnabled ? diversIconsContactPath.white[index] : diversIconsContactPath.black[index];
        }
    });

    // Met à jour les icônes horologe slide 1 (contact)
    const clockOneIconsContact = document.querySelectorAll('.main__container__contact__schedules-normal__title > img');
    clockOneIconsContact.forEach((icon, index) => {
        if (index < clockOneIconsPath.white.length) {
            icon.src = isDarkModeEnabled ? clockOneIconsPath.white[index] : clockOneIconsPath.black[index];
        }
    });

    // Met à jour les icônes horologe slide 2 (contact)
    const clockTwoIconsContact = document.querySelectorAll('.main__container__contact__schedules-medical__title > img');
    clockTwoIconsContact.forEach((icon, index) => {
        if (index < clockTwoIconsPath.white.length) {
            icon.src = isDarkModeEnabled ? clockTwoIconsPath.white[index] : clockTwoIconsPath.black[index];
        }
    });

    // Met à jour les icônes alerte slide 2 (contact)
    const alertIconsContact = document.querySelectorAll('.main__container__contact__schedules-medical__alert > img');
    alertIconsContact.forEach((icon, index) => {
        if (index < alertIconsPath.white.length) {
            icon.src = isDarkModeEnabled ? alertIconsPath.white[index] : alertIconsPath.black[index];
        }
    });
}

// Fonction pour appliquer le mode sombre au chargement
const applyDarkModeOnLoad = () => {
    const isDarkModeEnabled = localStorage.getItem('darkMode') === 'true';
    toggleDarkMode(isDarkModeEnabled);
}

// Écouter le chargement de la page
document.addEventListener('DOMContentLoaded', applyDarkModeOnLoad);

// Écouter le clic sur le bouton Dark Mode
const btnDarkMode = document.querySelectorAll('.back-dark-mode');

btnDarkMode.forEach(btn => {
    btn.addEventListener('click', () => {
        const isDarkModeEnabled = localStorage.getItem('darkMode') !== 'true';
        localStorage.setItem('darkMode', isDarkModeEnabled.toString());

        btn.classList.toggle('active', isDarkModeEnabled);
        toggleDarkMode();
    });
});