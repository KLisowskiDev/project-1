<?php
?>

<nav class="navbar navbar-expand-md nav">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand mx-auto mx-md-0" href="/">
            <img src="assets/images/logo.png" alt="logo" class="header__logo">
        </a>
        <button class="navbar-toggler nav__btn d-md-none d-sm-block position-fixed py-2 px-2 fs-4" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
            <i class="icon--menu text-white fas fa-bars"></i>
        </button>
        <div class="navbar-collapse justify-content-md-end" id="navbarCollapse">
            <ul class="navbar-nav nav__menu d-md-flex">
                <li class="nav__item">
                    <a href="/" class="nav__link position-relative <?php echo  getActiveLink($request, '/') ?>">Strona główna</a>
                </li>
                <li class="nav__item">
                    <a href="o-nas" class="nav__link position-relative <?php echo  getActiveLink($request, '/o-nas') ?>">O nas</a>
                </li>
                <li class="nav__item">
                    <a href="oferta" class="nav__link position-relative <?php echo  getActiveLink($request, '/oferta') ?>">Oferta</a>
                </li>
                <li class="nav__item">
                    <a href="galeria" class="nav__link position-relative <?php echo  getActiveLink($request, '/galeria') ?>">Galeria</a>
                </li>
                <li class="nav__item">
                    <a href="kontakt" class="nav__link position-relative me-md-0 <?php echo  getActiveLink($request, '/kontakt') ?>">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
?>
