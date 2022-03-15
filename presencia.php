<!DOCTYPE html>
<html lang="en">
<head>
    <!--====== REQUIRED META TAGS ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contamos con más de 21 estaciones de servicio para tu carga 
    de gas y 4 talleres para instalación.">
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="Gas L.P., lp, combugas, sicove gas, sicove, SICOVE GAS">
    <!--====== Title ======-->
    <title>SICOVEGAS | Presencia</title>
    <!--====== Font Awesome Icons ======-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--====== AOS Css ======-->
    <link rel="stylesheet" href="libs/aos/dist/aos.css">
    <!--====== Main Css ======-->
    <link rel="stylesheet" href="css/layout/presencia.css">
    <link rel="stylesheet" href="css/components/accordion.css">
    <!--====== Favicon Icon ======-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
    <link rel="manifest" href="img/icons/site.webmanifest">
    <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
    <!--====== Google Recaptcha ======-->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!--====== Google Style Map ======-->
    <style>
        .map {
            position: relative;
            width: 100%;
            height: 29.5rem;
            overflow: hidden;
            margin-top: 0px;
            display: none;
        }
    </style>

</head>
<body>
        <!--====== Nav Start ======-->
        <?php include_once('templates/nav.php') ?>
        <!--====== Nav End ======-->

        <!--===== Menú Lateral Start =====-->
        <?php include_once('templates/menuScreen.php');?>
        <!--===== Menú Lateral End =====-->

        <!--====== Banner Start ======-->
        <?php include_once('templates/banner.php');?>
        <!--====== Banner End ======-->

        <!--====== Sección Puntos de carga Start ======-->
        <div class="container container--col-reverse" id="puntoscarga">
            <div class="container__content">
                <div class="container__image-bg">
                    <div id="map" loading="lazy" class="map"></div>
                    <img src="img/MapaSicove.png" alt="mapa" data-aos="fade-right" id="mapa-img">
                </div>
            </div>
            <div class="container__content">
                <h2 class="container__title" data-aos="zoom-in">PUNTOS DE CARGA</h2>
                <p class="container__description">
                    Contamos con <strong style="color: #4cb752;"> más de 21 estaciones de servicio </strong> para tu carga de gas.
                </p>
                <div class="container__content--row">
                    <div class="container__content-item">
                        <div class="container__content-item-title">
                            <i class="fas fa-map-marker-alt"></i> &nbsp; <p>COAHUILA</p>
                        </div>
                        <ul class="container__content-item-list">
                            <li onclick="zoom(25.54273980015739, -103.40683476857959, '1')"><i class="fas fa-map-marker-alt"></i> Torreón</li>
                            <li onclick="zoom(26.908771353260168, -101.42177953489231, '1')"><i class="fas fa-map-marker-alt"></i> Monclova</li>
                            <li onclick="zoom(25.759783, -103.00001, '1', 18)"><i class="fas fa-map-marker-alt"></i> San Pedro</li>
                            <li onclick="zoom(29.323530271533414, -100.94890968257148, '1')"><i class="fas fa-map-marker-alt"></i> Cd. Acuña</li>
                            <li onclick="zoom(25.535698, -103.25092, '1', 18)"><i class="fas fa-map-marker-alt"></i> Matamoros</li>
                            <li onclick="zoom(25.761403, -103.244262, '1', 18)"><i class="fas fa-map-marker-alt"></i> Francisco I. Madero</li>
                            <li onclick="zoom(25.446028398081495, -102.16860923555201, '1', 18)"><i class="fas fa-map-marker-alt"></i> Parras de la Fuente</li>
                        </ul>
                    </div>
                    <div class="container__content-item">
                        <div class="container__content-item-title">
                            <i class="fas fa-map-marker-alt"></i> &nbsp; <p>DURANGO</p>
                        </div>
                        <ul class="container__content-item-list">
                            <li onclick="zoom(25.589861932473923, -103.48347172041366, '1')"><i class="fas fa-map-marker-alt"></i> Gómez Palacio</li>
                            <li onclick="zoom(25.537807424683887, -103.5334178104338, '1')"><i class="fas fa-map-marker-alt"></i> Lerdo</li>
                            <li onclick="zoom(25.878825, -103.618102, '1', 18)"><i class="fas fa-map-marker-alt"></i> Bermejillo</li>
                            <li onclick="zoom(24.855976412795844, -103.69609667527881, '1', 18)"><i class="fas fa-map-marker-alt"></i> Cuencamé</li>
                        </ul>
                    </div>
                </div>
                <div class="accordion__content">
                    <button class="accordion" data-aos="fade-left">COAHUILA <i class="fas fa-sort-down"></i>
                    </button>
                    <div class="accordion__panel" id="panelCoahuila">
                        <p onclick="zoom(25.54273980015739, -103.40683476857959, '1')">Torreón</p>
                        <p onclick="zoom(26.908771353260168, -101.42177953489231, '1')">Monclova</p>
                        <p onclick="zoom(25.759783, -103.00001, '1', 18)">San Pedro</p>
                        <p onclick="zoom(29.323530271533414, -100.94890968257148, '1')">Cd. Acuña</p>
                        <p onclick="zoom(25.535698, -103.25092, '1', 18)">Matamoros</p>
                        <p onclick="zoom(25.761403, -103.244262, '1', 18)">Francisco I. Madero</p>
                        <p onclick="zoom(25.446028398081495, -102.16860923555201, '1', 18)">Parras de la fuente</p>
                    </div>
                    <button class="accordion" data-aos="fade-left" data-aos-delay="100">DURANGO <i class="fas fa-sort-down"></i></button>
                    <div class="accordion__panel" id="panelDurango">
                        <p onclick="zoom(25.589861932473923, -103.48347172041366, '1')">Gómez Palacio</p>
                        <p onclick="zoom(25.537807424683887, -103.5334178104338, '1')">Lerdo</p>
                        <p onclick="zoom(25.878825, -103.618102, '1', 18)">Bermejillo</p>
                        <p onclick="zoom(24.855976412795844, -103.69609667527881, '1', 18)">Cuencamé</p>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Sección Puntos de carga End ======-->

        <!--====== Sección Instalación Start ======-->
        <div class="container" id="talleres">
            <div class="container__content">
                <h2 class="container__title" data-aos="zoom-in">TALLERES</h2>
                <p class="container__description">
                    Contamos con <strong style="color: #4cb752;"> 4 talleres para instalación. </strong>
                </p>
                <div class="container__content--row">
                    <div class="container__content-item">
                        <div class="container__content-item-title">
                            <i class="fas fa-tools"></i> &nbsp; <p>COAHUILA</p>
                        </div>
                        <ul class="container__content-item-list">
                            <li onclick="zoom(25.54273980015739, -103.40683476857959, '2')"><i class="fas fa-map-marker-alt"></i> Torreón</li>
                            <li onclick="zoom(25.756992673062207, -103.01164483327823, '2', 18)"><i class="fas fa-map-marker-alt"></i> San Pedro</li>
                            <li onclick="zoom(25.44388333648264, -102.14743519261769, '2', 18)"><i class="fas fa-map-marker-alt"></i> Parras de la Fuente</li>
                        </ul>
                    </div>
                    <div class="container__content-item">
                        <div class="container__content-item-title">
                            <i class="fas fa-tools"></i> &nbsp; <p>DURANGO</p>
                        </div>
                        <ul class="container__content-item-list">
                            <li onclick="zoom(25.589861932473923, -103.48347172041366, '2')"><i class="fas fa-map-marker-alt"></i> Gómez Palacio</li>
                        </ul>
                    </div>
                </div>
                <div class="accordion__content">
                    <button class="accordion" data-aos="fade-left">COAHUILA <i class="fas fa-sort-down"></i></button>
                    <div class="accordion__panel" id="panelCoahuila">
                        <p onclick="zoom(25.54273980015739, -103.40683476857959, '2')">Torreón</p>
                        <p onclick="zoom(25.756992673062207, -103.01164483327823, '2', 18)">San Pedro</p>
                        <p onclick="zoom(25.44388333648264, -102.14743519261769, '2', 18)">Parras de la fuente</p>
                    </div>
                    <button class="accordion" data-aos="fade-left" data-aos-delay="100">DURANGO <i class="fas fa-sort-down"></i></button>
                    <div class="accordion__panel" id="panelDurango">
                        <p onclick="zoom(25.589861932473923, -103.48347172041366, '2')">Gómez Palacio</p>
                    </div>
                </div>
            </div>
            <div class="container__content">
                <div class="container__image-bg">
                    <div id="map2" loading="lazy" class="map"></div>
                    <img src="img/carrusel/1.jfif" alt="mapa" data-aos="fade-left" id="mapa-img-2">
                </div>
            </div>
        </div>
        <!--====== Sección Instalación End ======-->

        <!--====== Footer Start ======-->
        <?php include_once('templates/footer.php') ?>
        <!--====== Footer End ======-->
    
        <!--====== Jquery ======-->
        <script src="libs/jquery/jquery,min.js"></script>
        <!--====== Sweet Alert ======-->
        <script src="libs/sweetalert2/sweetalert2.all.min.js"></script>
        <!--====== AOS JS ======-->
        <script src="libs/aos/dist/aos.js"></script>
        <script>
            AOS.init()
        </script> 
        <!--====== Google Maps API ======-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlEYfC3mlX7EsxagZmY33rFTlys7cVoKA&callback=initMap" async defer></script>
        <!--====== Main JS ======-->
        <script src="js/index.js"></script>
        <script src="js/presencia.js"></script>
        <script src="js/menuScreen.js"></script>
        <script src="js/accordion.js"></script>
        


</body>
</html>