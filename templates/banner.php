<link rel="stylesheet" href="css/components/banner.css">

<div class="banner">
    <div class="banner__image">
        <?php if($archivo == 'nosotros.php') echo '
            <img src="img/carrusel/Banner2.jpg" alt="Sicove">'
        ?>
        <?php if($archivo == 'sicove.php') echo '
            <img src="img/carrusel/TallerSicove.jpg" alt="Sicove">'
        ?>
        <?php if($archivo == 'presencia.php') echo '
            <img src="img/carrusel/2.jfif" alt="Sicove">'
        ?>
        <?php if($archivo == 'clientes.php') echo '
            <img src="img/carrusel/TallerSicove.jpg" alt="Sicove">'
        ?>
    </div>
    <div class="banner__mask">
        <?php if($archivo == 'nosotros.php') echo '
            <h1 class="banner__title" data-aos="fade-up" data-aos-duration="1000" id="titulo-p">Nosotros |
            <span style="color: white;"><i class="fas fa-users" ></i> </span>
            </h1>'
        ?>
        <?php if($archivo == 'sicove.php') echo '
            <h1 class="banner__title" data-aos="fade-up" data-aos-duration="1000" id="titulo-p">Sicove |
            <img src="img/svg/LogoIcon.svg" alt="Sicove" width="150">
            </h1>'
        ?>
        <?php if($archivo == 'presencia.php') echo '
            <h1 class="banner__title" data-aos="fade-up" data-aos-duration="1000" id="titulo-p">Presencia |
            <span style="color: white;"><i class="fas fa-globe-americas"></i></span>
            </h1>'
        ?>
        <?php if($archivo == 'clientes.php') echo '
            <h1 class="banner__title" data-aos="fade-up" data-aos-duration="1000" id="titulo-p">Clientes |
            <span style="color: white;"><i class="fas fa-handshake"></i></span>
            </h1>'
        ?>
    </div>

</div>