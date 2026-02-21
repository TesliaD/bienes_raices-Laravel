document.addEventListener('DOMContentLoaded', function () {
    iniciarApp();
    darkMode();
});

function iniciarApp() {
    const mobileMenu = document.querySelector('.mobile-menu');
    if (mobileMenu) {
        mobileMenu.addEventListener('click', navegacionResponsive);
    }
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}

function darkMode(){
    const botonDarkMode = document.querySelector('.dark-mode-boton');

    if(!botonDarkMode) return;

    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}