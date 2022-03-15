<link rel="stylesheet" href="css/components/footer.css">

<?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $classFooterItemActive = "footer__box-link--active";
    $classFooterItem = "footer__box-link";
?>

<!--
<footer class="footer" id="contacto">
    <div class="footer__body">
        <div class="footer__content footer__content--w30 footer__content--pl0">
            <p class="footer__title">Talleres</p>
            <div class="footer__list--row">
                <div class="footer__list-item">
                <p class="footer__list-item-title">Torreón, Coah.</p>
                <a href="https://www.google.com/maps/dir/Current+location/25.55800166547791,-103.39207952861469" target="blank" class="footer__list-item-desc">Calz. Juan A. Espinoza #5050 Col. Aviación</a>
                </div>
                <div class="footer__list-item">
                <p class="footer__list-item-title">San Pedro, Coah.</p>
                <a href="https://www.google.com/maps/dir/Current+location/25.756992673062207,-103.01164483327823" target="blank" class="footer__list-item-desc">Carretera Torreón - San Pedro Km. 1.5 Col. El Mirador</a>
                </div>
                <div class="footer__list-item">
                <p class="footer__list-item-title">Parras, Coah.</p>
                <a href="https://www.google.com/maps/dir/Current+location/25.44388333648264,-102.14743519261769" target="blank" class="footer__list-item-desc">Carretera General Cepeda Km 2.5 Cp. 27980</a>
                </div>
                <div class="footer__list-item">
                <p class="footer__list-item-title">Goméz Palacio, Dgo.</p>
                <a href="https://www.google.com/maps/dir/Current+location/25.58123,-103.481513" target="blank" class="footer__list-item-desc">Calle Eduardo Astorga #217 Col. Hortencias</a>
                </div>
            </div>
        </div>
        <div class="footer__content footer__content--bordered ">
            <p class="footer__title">Menú</p>
            <div class="footer__list">
                <div class="<?php /*if($archivo == "index.php"){echo $classFooterItemActive;}else{echo $classFooterItem;}*/ ?>">
                    <a href="./" class="footer__list-item-title">Inicio</a>
                </div>
                <div class="<?php /*if($archivo == "nosotros.php"){echo $classFooterItemActive;}else{echo $classFooterItem;}*/ ?>">
                    <a href="nosotros.php" class="footer__list-item-title">Nosotros</a>
                </div>
                <div class="<?php /*if($archivo == "sicove.php"){echo $classFooterItemActive;}else{echo $classFooterItem;} ?>">
                    <a href="sicove.php" class="footer__list-item-title">Sicove</a>
                </div>
                <div class="<?php if($archivo == "presencia.php"){echo $classFooterItemActive;}else{echo $classFooterItem;} ?>">
                    <a href="presencia.php" class="footer__list-item-title">Presencia</a>
                </div>
                <div class="<?php if($archivo == "clientes.php"){echo $classFooterItemActive;}else{echo $classFooterItem;}*/ ?>">
                    <a href="clientes.php" class="footer__list-item-title">Clientes</a>
                </div>
            </div>
        </div>
        <div class="footer__content">
            <p class="footer__title">Contactanos</p>
            <div class="footer__list">
                <div class="footer__list-item">
                <p class="footer__list-item-title">Torreón, Coah.</p>
                <a href="tel:871-211-4477" class="footer__list-item-desc">871 211 4477</a>
                </div>
                <div class="footer__list-item">
                <p class="footer__list-item-title">San Pedro, Coah.</p>
                <a href="tel:871-211-4477" class="footer__list-item-desc">871 211 4477</a>
                </div>
                <div class="footer__list-item">
                <p class="footer__list-item-title">Parras, Coah.</p>
                <a href="tel:842-103-3190" class="footer__list-item-desc">842 103 3190</a>
                </div>
                <div class="footer__list-item">
                <p class="footer__list-item-title">Goméz Palacio, Dgo.</p>
                <a href="tel:871-178-8861" class="footer__list-item-desc">871 178 8861</a>
                </div>
            </div>
        </div>
    </div>
</footer>-->

<footer class="footer">
    <div class="footer__body">
        
        <div class="footer__content footer__content--w10">
            <p class="footer__title">MENÚ</p>
            <div class="footer__box footer__box--col">
                <div class="footer__box-text ">
                    <a class="<?php if($archivo == "index.php"){echo $classFooterItemActive;}else{echo $classFooterItem;} ?>" href="index.php"  class="footer__list-item-desc">Inicio</a>
                </div>
                <div class="footer__box-text">
                    <a class="<?php if($archivo == "nosotros.php"){echo $classFooterItemActive;}else{echo $classFooterItem;} ?>" href="nosotros.php"  class="footer__list-item-desc">Nosotros</a>
                </div>
                <div class="footer__box-text">
                    <a class="<?php if($archivo == "sicove.php"){echo $classFooterItemActive;}else{echo $classFooterItem;} ?>" href="sicove.php"  class="footer__list-item-desc">Sicove</a>
                </div>
                <div class="footer__box-text">
                    <a class="<?php if($archivo == "presencia.php"){echo $classFooterItemActive;}else{echo $classFooterItem;} ?>" href="presencia.php"  class="footer__list-item-desc">Presencia</a>
                </div>
                <div class="footer__box-text">
                    <a class="<?php if($archivo == "clientes.php"){echo $classFooterItemActive;}else{echo $classFooterItem;} ?>" href="clientes.php"  class="footer__list-item-desc">Clientes</a>
                </div>
            </div>
        </div>
        <div class="footer__content">
            <p class="footer__title">TALLERES</p>
            <div class="footer__box">
                <div class="footer__box-text">
                    <p class="">Torreón, Coah.</p>
                    <a class="footer__box-link" href="https://www.google.com/maps/dir/Current+location/25.55800166547791,-103.39207952861469" target="blank" class="footer__list-item-desc">Calz. Juan A. Espinoza #5050 Col. Aviación.</a>
                    <a class="footer__box-link" href="tel:871-211-4477" target="blank" class="footer__list-item-desc">Tel: 871 211 4477</a>
                </div>
                <div class="footer__box-text">
                    <p class="">Parras, Coah.</p>
                    <a class="footer__box-link" href="https://www.google.com/maps/dir/Current+location/25.44388333648264,-102.14743519261769" target="blank" class="footer__list-item-desc">Carretera General Cepeda Km 2.5 Cp. 27980.</a>
                    <a class="footer__box-link" href="tel:842-103-3190" target="blank" class="footer__list-item-desc">Tel: 842 103 3190</a>
                </div>
                <div class="footer__box-text mt-2 footer__box-text--pr1">
                    <p class="">San Pedro, Coah.</p>
                    <a class="footer__box-link"href="https://www.google.com/maps/dir/Current+location/25.756992673062207,-103.01164483327823" target="blank" class="footer__list-item-desc">Carretera Torreón - San Pedro Km. 1.5 Col. El Mirador.</a>
                    <a class="footer__box-link" href="tel:871-211-4477" target="blank" class="footer__list-item-desc">Tel: 871 211 4477</a>
                </div>
                <div class="footer__box-text mt-2">
                    <p class="">Gómez Palacio, Dgo.</p>
                    <a class="footer__box-link" href="https://www.google.com/maps/dir/Current+location/25.58123,-103.481513" target="blank" class="footer__list-item-desc">Calle Eduardo Astorga #217 Col. Hortencias.</a>
                    <a class="footer__box-link" href="tel:871-178-8861" target="blank" class="footer__list-item-desc">Tel: 871 178 8861</a>
                </div>
            </div>
        </div>
        <div class="footer__content footer__content--w20">
            <p class="footer__title">CONTACTANOS</p>
            <div class="footer__box">
                <div class="footer__box-text">
                    <p class="">Torreón, Coah.</p>
                    <a class="footer__box-link" href="tel:871-211-4477" target="blank" class="footer__list-item-desc">Tel: 871 211 4477</a>
                </div>
                <div class="footer__box-text">
                    <p class="">Parras, Coah.</p>
                    <a class="footer__box-link" href="tel:842-103-3190" target="blank" class="footer__list-item-desc">Tel: 842 103 3190</a>
                </div>
                <div class="footer__box-text mt-2">
                    <p class="">San Pedro, Coah.</p>
                    <a class="footer__box-link" href="tel:871-211-4477" target="blank" class="footer__list-item-desc">Tel: 871 211 4477</a>
                </div>
                <div class="footer__box-text mt-2">
                    <p class="">Gómez Palacio, Dgo.</p>
                    <a class="footer__box-link" href="tel:871-178-8861" target="blank" class="footer__list-item-desc">Tel: 871 178 8861</a>
                </div>
            </div>
        </div>
    </div>
</footer>   