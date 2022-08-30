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
               <li class="menu__item"><a class="menu__link select" href=""><span class="icon-cloud-download"></span>SERVICIOS</a></li>
               <li class="menu__item"><a class="menu__link" href="../controller/contact.controller.php"><span class="icon-phone"></span>CONTACTANOS</a></li>
               <li class="menu__item"><a class="menu__link" href="../controller/about.controller.php"><span class="icon-user"></span>ACERCA DE</a></li>
           </ul>
        </div>
    </div>

    <?php require("banner.php"); ?>

    <!-- ======================== Services ========================== -->


    <h3 class="service-title" id="services">SERVICIOS</h3>

    <div class="service__container container">

        <?php foreach($services_array as $services): ?>
        
        <div class="service__column">
            <img src="../img/<?php echo $services['img']; ?>" class="service__column-img" alt="Cafeteria" title="Cafeteria">

            <div class="service__column-text">
                <h3 class="service__column-title"><?php echo ucwords($services['title']); ?> </h3>
                <p class="service__column-txt"><?php echo $services['txt']; ?></p>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
        <div class="home__delivery">
            <div class="home__delivery-background">
                <div class="home__delivery--flex container">
                    <div class="home__delivery-column home__delivery-column--1">
                        <h2 class="home__delivery-title">Servicio a domicilio</h2>
                        <p class="home__delivery-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="home_delivery.controller.php"><button class="home__delivery-button">Mandame un café</button></a>
                    </div>
                    <div class="home__delivery-column home__delivery-column--2">
                        <img class="home__delivery-img" src="../img/rappi.jpg">
                    </div>
                </div>                
            </div>
        </div>
        <div class="reservation__table">
            <div class="reservation__table-background">
                <div class="reservation__table--flex container">
                    <div class="reservation__table-column reservation__table-column--1">
                        <img class="reservation__table-img" src="../img/rappi.jpg">
                    </div>
                    <div class="reservation__table-column reservation__table-column--2">
                        <h2 class="reservation__table-title">Reservaciones</h2>
                        <p class="reservation__table-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="../controller/reservation.controller.php"><button class="reservation__table-button">¡Quiero una mesa!</button></a>
                    </div>
                </div>
            </div>
        </div>
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