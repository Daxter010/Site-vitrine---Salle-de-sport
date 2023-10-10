/* Burger Navbar */
function navBurger() {
    // Selectionne le bouton burger et le menu mobile
    const burgerButton = document.querySelector('.nav__burger--button');
    const mobileMenu = document.querySelector('.nav__menu-mobile');

    // Ajoute un écouteur d'évènement pour le clic sur le bouton burger
    burgerButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('active'); // Ajoute ou supprime la classe 'active' du menu mobile, qui permet de le faire apparaître ou disparaître
    });
}

navBurger()