const menuToggle = () => {
    const hamburger = document.querySelector('.nav__btn');
    const menu = document.querySelector('.navbar-collapse');

    hamburger.addEventListener('click', function() {
        if (menu.classList.contains("fadeIn")) {
            menu.classList.remove('fadeIn');
            menu.classList.add("fadeOut");            
        } else {
            menu.classList.remove('fadeOut');
            menu.classList.add('fadeIn');
        }

    }, false);
}

export default menuToggle;
