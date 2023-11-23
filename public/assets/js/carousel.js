// Carousel de la page d'accueil (haut)
// Démarre le défilement automatique lorsque la page est chargée
window.addEventListener('load', () => {    
    const slider = document.querySelector('.carousel__slider'); // Selection du conteneur du slider
    const sliderItemWidth = slider.offsetWidth; // Calcul la largeur d'un élément du slider en pixels
    let currentIndex = 0; // Index de l'élément actuel

    /*
        Fonction fléchée 'scrollToIndex()': 
        * Permet de faire défiler le slider jusqu'à un autre index en utilisant l'API ScrollTo.
    */
    const scrollToIndex = (index) => {
        const scrollValue = index * sliderItemWidth;
        // Fait défiler le slider en utilisant ScrollTo
        slider.scrollTo({ left: scrollValue, behavior: 'smooth' });
    };

    /*
        Fonction fléchée 'nextSlide()': 
        * Permet de passer à la diapositive suivante en calculant le nouvel index et en appelant scrollToIndex.
    */
    const nextSlide = () => {
        // Calcule le nouvel index
        currentIndex = (currentIndex + 1) % slider.children.length;
        // Fait défiler jusqu'à la nouvelle diapositive
        scrollToIndex(currentIndex);
    };

    // Identifiant de l'intervalle pour le défilement automatique
    let intervalId;

    /*
        Fonction 'startAutoScroll()': 
        * Démarre le défilement automatique en appelant nextSlide à intervalles réguliers.
    */
    const startAutoScroll = () => {
        // Définit l'intervalle pour appeler nextSlide toutes les 3000 ms (3 secondes)
        intervalId = setInterval(nextSlide, 3000);
    };

    startAutoScroll();
});


// Carousel de la page d'accueil (bas)
// Sélectionne tous les éléments du carousel
const items = document.querySelectorAll('.little__carousel__slider__item');
const fadeDuration = 1000; // Durée du fondu en millisecondes
let currentIndex = 0;

/*
    Fonction fléchée 'fadeOut()': 
    * Cette fonction masque un élément avec un fondu sortant (disparition progressive).
*/
const fadeOut = (element) => {
    element.style.transition = `opacity ${fadeDuration}ms`;
    element.style.opacity = 0;

    // Cache l'élément après la transition
    setTimeout(() => {
        element.style.display = 'none';
        showNext(); // Affiche le prochain élément après avoir masqué celui-ci
    }, fadeDuration);
};

/*
    Fonction fléchée 'showNext()': 
    * Cette fonction affiche le prochain élément du carrousel avec un fondu entrant.
*/
const showNext = () => {
    currentIndex = (currentIndex + 1) % items.length;
    const nextItem = items[currentIndex];
    nextItem.style.transition = 'none'; // Désactiver la transition pour éviter la transition
    nextItem.style.display = 'flex';

    // Délai avant de commencer le fondu entrant
    setTimeout(() => {
        fadeIn(nextItem);
    }, 100); // Délai avant de commencer le fondu entrant
};

/*
    Fonction fléchée 'fadeIn()': 
    * Cette fonction affiche un élément avec un fondu entrant, puis appelle fadeOut après un certain délai pour masquer l'élément.
*/
const fadeIn = (element) => {
    element.style.transition = `opacity ${fadeDuration}ms`;
    element.style.opacity = 1;

    // Délai avant de masquer l'élément
    setTimeout(() => {
        fadeOut(element);
    }, 3000); // 3 secondes de délai avant de disparaître
};

// Masquer tous les éléments sauf le premier
for (let i = 1; i < items.length; i++) {
    items[i].style.display = 'none';
}

// Commencer l'animation avec le premier élément
fadeIn(items[currentIndex]);