<!DOCTYPE html>
<html lang="en">
<head>
    <!--====== REQUIRED META TAGS ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creada como una empresa de COMBUGAS en el año
    2018 somos la empresa #1 de la Comarca Lagunera en la conversión de vehículos de gasolina a Gas L.P.">
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="Gas L.P., lp, combugas, sicove gas, sicove, SICOVE GAS">
    <!--====== Title ======-->
    <title>SICOVEGAS | Nosotros</title>
    <!--====== Font Awesome Icons ======-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--====== AOS Css ======-->
    <link rel="stylesheet" href="libs/aos/dist/aos.css">
    <!--====== Main Css ======-->
    <link rel="stylesheet" href="css/layout/nosotros.css">
    <!--====== Favicon Icon ======-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
    <link rel="manifest" href="img/icons/site.webmanifest">
    <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
    <!--====== Google Recaptcha ======-->
    <script src="https://www.google.com/recaptcha/api.js"></script>
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

         <!--====== Sección Nosotros Start ======-->
        <div class="container" id="nosotros">
            <div class="container__content-left">
                <h2 class="container__title" data-aos="zoom-in">NOSOTROS</h2>
                <p class="container__description">
                    Creada como una empresa de COMBUGAS en el año
                    2018 somos la <strong style="color: #4cb752; text-transform: uppercase;">empresa #1 de la Comarca
                    Lagunera en la conversión de vehículos de gasolina a
                    Gas L.P. </strong> <br> <br>
                    Contamos con <strong style="color: #4cb752;">sistemas de inyección secuencial de quinta generación </strong> 
                    marca BRC lideres en el continente Europeo por la calidad y eficiencia de sus equipos, logrando así
                    grandes beneficios a todos nuestros clientes con los
                    rendimientos de <strong style="color: #4cb752;"> Gas L.P. </strong> en sus vehículos.
                </p>
                <div class="container__images">
                    <div class="container__images-content">
                        <img src="img/icons/iconos.png" alt="iconos" class="container__img--w20" loading="lazy" data-aos="fade-left">
                        <img src="img/combugas.png" alt="Combugas" class="container__img--w20" title="Combugas" data-aos="fade-left" style="z-index:99" loading="lazy">
                    </div>
                    <div class="container__images-content">
                        <img src="img/esr.png" alt="ESR" title="Empresa Socialmente Responsable" class="container__img--w11" data-aos="fade-right" loading="lazy">
                    </div>
                </div>
            </div>
            <div class="container__content-right" data-aos="fade-left">
            </div>
        </div>
        <!--====== Sección Nosotros End ======-->

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
        <!--====== Main JS ======-->
        <script src="js/index.js"></script>
        <script src="js/menuScreen.js"></script>

</body>
</html>