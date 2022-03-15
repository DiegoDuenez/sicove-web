<link rel="stylesheet" href="libs/glider/glider.min.css">
<link rel="stylesheet" href="css/components/carrusel.css">

<?php
    $archivo = basename($_SERVER['PHP_SELF']);
?>

<div class="container-glider">
    <div class="glider">
        <div class="card">
            <img src="img/carrusel/TallerSicove.jpg" alt="Sicove">
        </div>
        <div class="card">
            <img src="img/carrusel/1.jfif" alt="Sicove">
        </div>
        <div class="card">
            <img src="img/carrusel/2.jfif" alt="Sicove">
        </div>
        <div class="card">
            <img src="img/carrusel/3.jfif" alt="Sicove">
        </div>
        <div class="card">
            <img src="img/carrusel/Tallergeneral.png" alt="Sicove">
        </div>
        <div class="card">
            <img src="img/carrusel/Banner2.jpg" alt="Sicove">
        </div>
    </div>
    <div class="glider__mask">
        <?php if($archivo == 'index.php') echo '
            <h1 class="glider__title" data-aos="fade-up" data-aos-duration="1000" id="titulo-p"><span style="color: white; -webkit-text-stroke: 0px;">Empresa #1 </span> de la Comarca Lagunera <br>
            en la conversión de vehículos de gasolina a <span style="color: white; -webkit-text-stroke: 0px;">Gas L.P.</span>
            </h1>'  
        ?>
        <?php if($archivo == 'nosotros.php') echo '
            <h1 class="glider__title--fs-5" data-aos="fade-up" data-aos-duration="1000" id="titulo-p">Nosotros |
            <span style="color: white;"><i class="fas fa-users" ></i> </span>
            </h1>'
        ?>
        <?php if($archivo == 'sicove.php') echo '
            <h1 class="glider__title--fs-5" data-aos="fade-up" data-aos-duration="1000" id="titulo-p">Sicove |
            <img src="img/svg/LogoIcon.svg" alt="" width="150">
            </h1>'
        ?>
        <?php if($archivo == 'presencia.php') echo '
            <h1 class="glider__title--fs-5" data-aos="fade-up" data-aos-duration="1000" id="titulo-p">Presencia |
            <span style="color: white;"><i class="fas fa-globe-americas"></i></span>
            </h1>'
        ?>
        <?php if($archivo == 'clientes.php') echo '
            <h1 class="glider__title--fs-5" data-aos="fade-up" data-aos-duration="1000" id="titulo-p">Clientes |
            <span style="color: white;"><i class="fas fa-handshake"></i></span>
            </h1>'
        ?>
        
    </div>
</div>

<script src="libs/glider/glider.min.js"></script>
<script>
        var slider = new Glider(document.querySelector(".glider"), {
            slidesToShow: 1,
            slidesToScroll:1,
            draggable: true,
            /*arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }*/
        })
        slideAutoPaly(slider, '.glider');
        function slideAutoPaly(glider, selector, delay = 2000, repeat = true) {
            let autoplay = null;
            const slidesCount = glider.track.childElementCount;
            let nextIndex = 1;
            let pause = true;
            function slide() {
                autoplay = setInterval(() => {
                    if (nextIndex >= slidesCount) {
                        if (!repeat) {
                            clearInterval(autoplay);
                        } else {
                            nextIndex = 0;
                        }
                    }
                    glider.scrollItem(nextIndex++);
                }, delay);
            }
            slide();
            var element = document.querySelector(selector);
            element.addEventListener('mouseover', (event) => {
                if (pause) {
                    clearInterval(autoplay);
                    pause = false;
                }
            }, 300);
            element.addEventListener('mouseout', (event) => {
                if (!pause) {
                    slide();
                    pause = true;
                }
            }, 300);
        }
   
</script>