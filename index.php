<?php

/*INITIALISATION DE LA VARIABLE LOC*/
$loc = filter_input(INPUT_GET, 'loc');
if (!$loc) {
    $loc = 'home';
}

/*AJOUT DE LA PAGE HTML*/
include "vue/template.php";
