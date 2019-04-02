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

/*AUTOLOADER*/
include_once 'controler/Autoloader.php';
Autoloader::register();

/*FAIT APPEL AUX BONS CONTROLER EN FONCTION DE LA PAGE SUR LAQUELLE ON SE TROUVE*/
switch ($loc) {
    case 'products':
        include_once "controler/controler-products.php";
        break;
    case 'one-product':
        include_once "controler/controler-one-product.php";
        break;
//    case 'signin':
//        include_once 'controler/controler-signin.php';
//        $loc = 'sign-in-up';
//        break;
//    case 'signup':
//        include_once 'controler/controler-signup.php';
//        $loc = 'sign-in-up';
//        break;
    case 'cart':
        include_once "controler/controler-cart.php";
        break;
    default:
        break;
}

/*AJOUT DE LA PAGE HTML*/
include "vue/template.php";
