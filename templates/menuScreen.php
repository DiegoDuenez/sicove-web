<link rel="stylesheet" href="css/components/menuScreen.css">

<?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $classLinkActive = "link link--active";
    $classLink = "link";
?>

<!--====== Menú Lateral Start ======-->
<div id="menuNuevo">
    <div class="menuTop">
        <a href="index.php"><img src="img/svg/LogoSicove.svg" alt="Sicove" loading="lazy" class="sicove-logo"></a>
        <button class="btnCerrar" id="btnCerrar"><img src="img/icons/icon_cerrar.png" alt="cerrar" class="btn-cerrar"></button>
    </div>
    <div class="menuBody">
        <h6><a href="index.php" class="<?php if($archivo == "index.php"){echo $classLinkActive;}else{echo $classLink;} ?>">Inicio</a></h6>
        <h6><a href="nosotros.php" class="<?php if($archivo == "nosotros.php"){echo $classLinkActive;}else{echo $classLink;} ?>">Nosotros</a></h6>
        <h6><a href="sicove.php" class="<?php if($archivo == "sicove.php"){echo $classLinkActive;}else{echo $classLink;} ?>">Sicove</a></h6>
        <h6><a href="presencia.php" class="<?php if($archivo == "presencia.php"){echo $classLinkActive;}else{echo $classLink;} ?>">Presencia</a></h6>
        <h6><a href="clientes.php" class="<?php if($archivo == "clientes.php"){echo $classLinkActive;}else{echo $classLink;} ?>">Clientes</a></h6>
    </div>
</div>
<!--====== Menú Lateral End ======-->