<link rel="stylesheet" href="css/components/navbar.css">

<?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $classNavbarMiniActive = "nav-mini__link nav-mini__link--active";
    $classNavbarMini = "nav-mini__link";
?>


<nav class="nav" id="navMovil">
    <div class="nav__logo" id="logoSicove">
        <a href="index.php" id="navMovilLogo"><img class="logo" src="img/svg/LogoSicove copy.svg" alt="Sicove" loading="lazy"></a>
    </div>
    <div class="nav__secciones">
        <a href="./" class="nav__link">Inicio</a>
        <a href="nosotros.php" class="nav__link">Nosotros</a>
        <a href="sicove.php" class="nav__link">Sicove</a>
        <a href="presencia.php" class="nav__link">Presencia</a>
        <!--<div class="nav__submenu">
            <a href="sicove.php" class="nav__link">Sicove</a>
            <div class="nav__submenu-content">
                <a href="sicove.php#beneficios" class="nav__sublink">Beneficios</a>
                <a href="sicove.php#equipo" class="nav__sublink">Equipo</a>
                <a href="sicove.php#carburacionbrc" class="nav__sublink">Carburación BRC</a>
                <a href="sicove.php#instalacion"  class="nav__sublink">Instalación</a>
                <a href="sicove.php#noms"  class="nav__sublink">Noms</a>
            </div>
        </div>
        <div class="nav__submenu">
            <a href="presencia.php" class="nav__link">Presencia</a>
            <div class="nav__submenu-content">
                <a href="presencia.php#puntoscarga" class="nav__sublink">Puntos de carga</a>
                <a href="presencia.php#talleres" class="nav__sublink">Talleres</a>
            </div>
        </div>-->
        <a href="clientes.php" class="nav__link">Clientes</a>
    </div>
    <div class="nav__btn-menu">
        <button class="btnAbrir"><img src="img/icons/icon_menu_2.png" alt="btnAbrir"></button>
    </div>
</nav>


<nav class="nav-mini" id="navMini">
    <div class="nav-mini__secciones">
        <a href="./" class="<?php if($archivo == "index.php"){echo $classNavbarMiniActive;}else{echo $classNavbarMini;} ?>">Inicio</a>
        <a href="nosotros.php" class="<?php if($archivo == "nosotros.php"){echo $classNavbarMiniActive;}else{echo $classNavbarMini;} ?>">Nosotros</a>
        <a href="sicove.php" class="<?php if($archivo == "sicove.php"){echo $classNavbarMiniActive;}else{echo $classNavbarMini;} ?>">Sicove</a>
        <a href="presencia.php" class="<?php if($archivo == "presencia.php"){echo $classNavbarMiniActive;}else{echo $classNavbarMini;} ?>">Presencia</a>
        
        <!--<div class="nav-mini__submenu">
            <a href="sicove.php" class="<?php /*if($archivo == "sicove.php"){echo $classNavbarMiniActive;}else{echo $classNavbarMini;}*/ ?>">Sicove</a>
            <div class="nav-mini__submenu-content">
                <a href="sicove.php#beneficios" class="nav-mini__sublink">Beneficios</a>
                <a href="sicove.php#equipo" class="nav-mini__sublink">Equipo</a>
                <a href="sicove.php#carburacionbrc" class="nav-mini__sublink">Carburación BRC</a>
                <a href="sicove.php#instalacion"  class="nav-mini__sublink">Instalación</a>
                <a href="sicove.php#noms"  class="nav-mini__sublink">Noms</a>
            </div>
        </div>
        <div class="nav-mini__submenu">
            <a href="presencia.php" class="<?php /*if($archivo == "presencia.php"){echo $classNavbarMiniActive;}else{echo $classNavbarMini;}*/ ?>">Presencia</a>
            <div class="nav-mini__submenu-content">
                <a href="presencia.php#puntoscarga" class="nav-mini__sublink">Puntos de carga</a>
                <a href="presencia.php#talleres" class="nav-mini__sublink">Talleres</a>
            </div>
        </div>-->
        <a href="clientes.php" class="<?php if($archivo == "clientes.php"){echo $classNavbarMiniActive;}else{echo $classNavbarMini;} ?>">Clientes</a>
    </div>
    <div class="nav-mini__btn-menu">
        <button class="btnAbrir"><img src="img/icons/icon_menu_2.png" alt="btnAbrir"></button>
    </div>
</nav>
