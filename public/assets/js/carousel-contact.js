// Sélectionne tous les éléments du carousel
const itemsContact = document.querySelectorAll('.carousel__schedules__slider__item');
const fadeDurationContact = 1000; // Durée du fondu en millisecondes
let currentIndexContact = 0;

/*
    Fonction 'fadeOutContact()': 
    * Cette fonction masque un élément avec un fondu sortant (disparition progressive).
*/
const fadeOutContact = (element) => {
    element.style.transition = `opacity ${fadeDurationContact}ms`;
    element.style.opacity = 0;
    setTimeout(() => {
        element.style.display = 'none';
        showNextContact();
    }, fadeDurationContact);
}

/*
    Fonction 'showNextContact()': 
    * Cette fonction affiche le prochain élément du carrousel avec un fondu entrant.
*/
const showNextContact = () => {
    currentIndexContact = (currentIndexContact + 1) % itemsContact.length; // Utilisez itemsContact.length au lieu de items.length
    const nextItem = itemsContact[currentIndexContact];
    nextItem.style.transition = 'none'; // Désactiver la transition pour éviter la transition instantanée
    nextItem.style.display = 'flex';
    setTimeout(() => {
        fadeInContact(nextItem);
    }, 200); // Délai avant de commencer le fondu entrant
}

/*
    Fonction 'fadeInContact()': 
    * Cette fonction affiche un élément avec un fondu entrant, puis appelle fadeOutContact après un certain délai pour masquer l'élément.
*/
const fadeInContact= (element) => {
    element.style.transition = `opacity ${fadeDurationContact}ms`;
    element.style.opacity = 1;
    setTimeout(() => {
        fadeOutContact(element);
    }, 3000); // 3 secondes de délai avant de disparaître
}

// Masquer tous les éléments sauf le premier
for (let i = 1; i < itemsContact.length; i++) { // Utilisez itemsContact.length au lieu de items.length
    itemsContact[i].style.display = 'none';
}

// Commencer l'animation avec le premier élément
fadeInContact(itemsContact[currentIndexContact]);