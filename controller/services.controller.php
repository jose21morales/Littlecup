<?php

require("../model/inicio.model.php");

$banner = new Inicio();
$bannerTwo = $banner->get_bannerTwo();

$services = new Inicio();
$services_array = $services->get_services();

$footer = new Inicio();
$footer_array = $footer->get_footer();

require("../view/services.view.php");

?>