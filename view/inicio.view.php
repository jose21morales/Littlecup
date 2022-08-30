<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Cafeteria</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" type="image/png" href="">
</head>
<body>
	<div class="header">
		<h2 class="header-logo">Little-Cup</h2>
		<div class="header-content">
          <p class="header-text">
          	<span class="icon-phone"> 999-999-999</span>
          </p>
          <p class="header-text">
          	<span class="icon-location"> Tapachula, Chiapas, México</span>
          </p>
        </div>
	</div>

	<div class="div container">
		<div class="div-color">
		   <h1 class="logo">Little-Cup</h1>
		   <span class="icon-bars" id="btnmenu"></span>
		   <ul class="menu" id="menu">
		       <li class="menu__item"><a class="menu__link select" href="#welcome"><span class="icon-home"></span>INICIO</a></li>
			   <li class="menu__item"><a class="menu__link" href="controller/services.controller.php"><span class="icon-cloud-download"></span>SERVICIOS</a></li>
			   <li class="menu__item"><a class="menu__link" href="controller/contact.controller.php"><span class="icon-phone"></span>CONTACTANOS</a></li>
			   <li class="menu__item"><a class="menu__link" href="controller/about.controller.php"><span class="icon-user"></span>ACERCA DE</a></li>
		   </ul>
	    </div>
	</div>

	<div class="banner" id="banner">
		<div class="banner__color">
			<div class="banner__content container">
			   <div class="banner__text">
		          <?php foreach($banner_array as $banner): ?>
                  <h1 id="banner__title" class="banner__title"><?php echo $banner['title']; ?></h1>
                  <h3 id="banner__txt" class="banner__txt"><?php echo $banner['txt']; ?></h3>
                <?php endforeach; ?>
		       </div>
		       <div class="banner__buttons">
			      <a class="banner__buttons-link banner-home" href="controller/about.controller.php">Conocenos</a>
			      <a class="banner__buttons-link" href="#gallery">Galeria</a>
		       </div>
		   </div>
	    </div>
	</div>

    <?php foreach($welcome_array as $welcome): ?>
    
    <div class="welcome container" id="welcome">
    	<img src="img/<?php echo $welcome['img']; ?>" class="welcome__img" alt="Foto de bienvenida">
    	<div class="welcome__container">
    		<h3 class="welcome__title"><?php echo $welcome['title']; ?></h3>
    		<p class="welcome__txt"><?php echo $welcome['txt']; ?></p>
    	    <p class="welcome-p"><a class="welcome__link" href="controller/contact.controller.php">Contactanos &raquo;</a></p>
    	</div>
    </div>

    <?php endforeach; ?>

    <?php foreach($experience_array as $experience): ?>

<div class="experience__color">
    <div class="experience container">
    	<div class="experience__container">
    		<h3 class="experience__title"><?php echo $experience['title']; ?></h3>
    		<p class="experience__txt"><?php echo $experience['txt']; ?></p>
    	</div>
    	<img src="img/<?php echo $experience['img']; ?>" class="experience__img" alt="Nuestra experiencia">
    </div>
</div>

    <?php endforeach; ?>

    <div class="our-personal">
    	<div class="our-personal-color">
    		<h3 class="our-personal-title">NUESTRO PERSONAL</h3>
            <div class="chefs-flex container">

            <?php foreach($personal_array as $personal): ?>

    	    <div class="chefs">
    		    <img src="img/<?php echo $personal['img']; ?>" class="chefs-img" alt="Chef1">
    		    <div class="chefs__content">
    		        <p class="chefs-name"><?php echo ucwords($personal['name']); ?></p>
    		        <p class="chefs-age"><?php echo $personal['age'] . " años"; ?></p>
    		    </div>
    	    </div>

            <?php endforeach; ?>

            </div>
        </div>
    </div>

    <div id="our-coffee"></div>

    <div class="column__coffee-container container">
        <h3 class="column__coffee-container-title">NUESTROS CAFES</h3>
        <div class="column__coffee-content">

            <?php foreach($coffee_array as $coffee): ?>

            <div class="column__coffee">
                <img src="img/<?php echo $coffee['img']; ?>" class="column__coffee-img" alt="<?php echo $coffee['title']; ?>">
                <div class="column__coffee-text">
                    <h4 class="column__coffee-title"><?php echo ucwords($coffee['title']); ?></h4>
                    <p class="column__coffee-price"><?php echo $coffee['price']; ?></p> 
                </div>
            </div>

            <?php endforeach; ?>

        </div>
    </div>

    <div id="our-cakes"></div>

    <div class="column__container container">
    	<h3 class="column__container-title">NUESTROS POSTRES</h3>
    	<div class="column__content">

            <?php foreach($cakes_array as $cakes): ?>

    	    <div class="column">
    		    <img src="img/<?php echo $cakes['img']; ?>" class="column__img" alt="<?php echo $cakes['title']; ?>">
    		    <div class="column__text">
    		        <h4 class="column__title"><?php echo ucwords($cakes['title']); ?></h4>
    		        <p class="column__price"><?php echo $cakes['price']; ?></p>
    		    </div>
    	    </div>

            <?php endforeach; ?>

        </div>
    </div>

    <!-- ======================== Galeria ========================== -->

    <h2 class="gallery-title" id="gallery">GALERIA</h2>


    <ul class="gallery container">
    <?php foreach($gallery_array as $gallery): ?>

        <li class="gallery__li"><a href="#<?php echo $gallery['id']; ?>"><img src="img/<?php echo $gallery['img']; ?>" class="gallery__img" alt="<?php echo $gallery['name']; ?>"></a></li>

    <!-- Gallery - Modal -->

    <?php require("model/pag_modal.php"); ?>

    <div class="gallery__modal" id="<?php echo $gallery['id']; ?>">
        <div class="gallery__modal--overflow">
            <a class="gallery__modal-close" href="#index.php">X</a>
        </div>
        <h2 class="gallery__modal-title"><?php echo $gallery['name']; ?></h2>
        <div class="gallery__modal-content">
            <img src="img/<?php echo $gallery['img']; ?>" class="gallery__modal-img" alt="Imagen 1">
        </div>
    </div>

    <?php endforeach; ?>

    </ul>

    <!-- Paginación -->

    <?php require("model/paginacion.php"); ?>

    <?php

    //Operacion matematica para boton siguiente y atras
    $incrementNum = (($pagina +1) <= $total_paginas)?($pagina +1):1;
    $decrementNum = (($pagina -1) < 1)?1:($pagina -1);

    ?>
<nav class="nav">
    <ul class="paginacion">
        <li class="li btn"><a class="pag-link" href="?pagina=<?php echo $decrementNum; ?>">&laquo;</a></li>

    <?php

    //Se resta y suma con el numero de pag actual con el cantidad de 
    //numeros  a mostrar
    $desde = $pagina-(ceil($post_por_pagina/2) -1);
    $hasta = $pagina+(ceil($post_por_pagina/2) -1);

    //Se valida
    $desde=($desde < 1)?1:$desde;
    $hasta=($hasta < $post_por_pagina)?$post_por_pagina:$hasta;
    //Se muestra los numeros de paginas
    for ($i=$desde; $i <= $hasta ; $i++) {
        //Se valida la paginacion total
        //de registros
        if ($i <= $total_paginas) {
            //Validamos la pag activo
            if ($i == $pagina) {
                echo "<li class='li' id='active'><a class='pag-link' href='?pagina=" . $i . "#gallery'>" . $i . "</a></li>";
            } else {
                echo "<li class='li'><a class='pag-link' href='?pagina=" . $i . "#gallery'>" . $i . "</a></li>";
            }
        }
    }

    echo "<li class='li'><a class='pag-link' href='?pagina=" . $incrementNum . "#gallery'>&raquo;</a></li></ul></nav>";

    ?>

    </ul>
</nav>

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
    <script type="text/javascript" src="js/menu.js"></script>
</body>
</html>