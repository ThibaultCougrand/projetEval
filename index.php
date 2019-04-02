<?php

//session_start();

/*******************/
/*CONTROLER GENERAL*/
/*******************/

/*INITIALISATION DE LA VARIABLE LOC*/
$loc = filter_input(INPUT_GET, 'loc');
if (!$loc) {
    $loc = 'home';
}

/*INITIALISATION DE LA VARIABLE IMAGE QUI VA DEFINIR L'IMAGE DU HEADER*/
$image = "asset/" . $loc . ".jpg";
if (!file_exists($image)) {
    $image = "asset/home.jpg";
}

/*AJOUT DE LA PAGE HTML*/
include "vue/template.php";
