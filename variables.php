<?php

$var = "Variable du fichier du dossier variables.php";

/*
fonction qui prend deux arguments de type integer et 
retourne le maximum de deux nombres entrés en paramètres
*/
function maxTowInt($a, $b) {
    if ($a < $b) {
        return $a;
    }else{
        return $b;
    }
}

?>