<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/services.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <div class="header">
        <h2 class="header-logo">Little-Cup</h2>
        <div class="header-content">
          <p class="header-text">
            <span class="icon-phone"> 999-999-999</span>
          </p>
          <p class="header-text">
            <span class="icon-location"></span> Tapachula, Chiapas, México
          </p>
        </div>
    </div>

    <div class="div container">
        <div class="div-color">
           <h1 class="logo">Little-Cup</h1>
           <span class="icon-bars" id="btnmenu"></span>
           <ul class="menu" id="menu">
               <li class="menu__item"><a class="menu__link" href="../"><span class="icon-home"></span>INICIO</a></li>
               <li class="menu__item"><a class="menu__link" href="../controller/services.controller.php"><span class="icon-cloud-download"></span>SERVICIOS</a></li>
               <li class="menu__item"><a class="menu__link" href="../controller/contact.controller.php"><span class="icon-phone"></span>CONTACTANOS</a></li>
               <li class="menu__item"><a class="menu__link select" href=""><span class="icon-user"></span>ACERCA DE</a></li>
           </ul>
        </div>
    </div>

    <?php require("banner.php"); ?>

    <!-- ======================== About Us ========================== -->

    <h3 class="about-title" id="about">ACERCA DE... NOSOTROS</h3>


    <?php foreach($about_array_one as $about): ?>
    <div class="about container">

        <div class="about__column">
            <div class="about__column--column1">
                <img src="../img/<?php echo $about['img']; ?>" class="about__column-img" alt="Cofundador" title="Cofundador">                
            </div>
            <div class="about__column--column2">
                <h3 class="about__column-name"><?php echo ucwords($about['name']); ?></h3>
                <p class="about__column-txt"><?php echo $about['description']; ?></p>
            </div>
        </div>

    </div>
    <?php endforeach; ?>

    <?php foreach($about_array_two as $about): ?>
    <div class="dark-brown">
            <div class="about container">

                <div class="about__column about__column-dark">
                    <div class="about__column--column2">
                        <h3 class="about__column-name-dark"><?php echo ucwords($about['name']); ?></h3>
                        <p class="about__column-txt-dark"><?php echo $about['description']; ?></p>
                    </div>
                    <div class="about__column--column1 about__column--column1-dark">
                        <img src="../img/<?php echo $about['img']; ?>" class="about__column-img-dark" alt="Cofundador" title="Cofundador">                
                    </div>
                </div>

            </div>
    </div>
    <?php endforeach; ?>

    <?php foreach($about_array_three as $about): ?>
    <div class="about container">

        <div class="about__column">
            <div class="about__column--column1">
                <img src="../img/<?php echo $about['img']; ?>" class="about__column-img" alt="Cofundador" title="Cofundador">                
            </div>
            <div class="about__column--column2">
                <h3 class="about__column-name"><?php echo ucwords($about['name']); ?></h3>
                <p class="about__column-txt"><?php echo $about['description']; ?></p>
            </div>
        </div>

    </div>
    <?php endforeach; ?>

<footer class="main-footer">

            <?php foreach($footer_array as $footer): ?>

            <div class="container container--flex">
                <div class="footer__column column--33">
                    <h2 class="footer__column-title">¿Por qué visitarnos?</h2>
                    <p class="footer__column-txt"><?php echo $footer['description']; ?></p>
                </div>
                <div class="footer__column column--33">
                    <h2 class="footer__column-title">Contáctanos</h2>
                    <p class="footer__column-txt"><?php echo $footer['place']; ?></p>
                    <p class="footer__column-txt"><?php echo $footer['phone']; ?></p>
                    <p class="footer__column-txt"><?php echo $footer['mail']; ?></p>
                </div>
                <div class="footer__column column--33">
                    <h2 class="footer__column-title">Siguenos en nuestras redes</h2>
                    <p class="footer__column-txt"><a target="_blank" href="<?php echo $footer['facebook']; ?>" class="icon-facebook">Facebook</a></p>
                    <p class="footer__column-txt"><a target="_blank" href="<?php echo $footer['instagram']; ?>" class="icon-instagram">Instagram</a></p>
                    <p class="footer__column-txt"><a target="_blank" href="<?php echo $footer['twitter']; ?>" class="icon-twitter">Twitter</a></p>
                </div>
                <p class="copy">&copy; 2022 Coffee-Sweet | Todos los derechos reservados</p>
            </div>
            <?php endforeach; ?>
    </footer>
    <script type="text/javascript" src="../js/menu.js"></script>
</body>
</html>