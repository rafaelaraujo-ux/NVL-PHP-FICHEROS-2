<?php

function buscarCambiar($ficheroR, $ficheroW, $buscar,$cambiar){

    $ficheroR = fopen($ficheroR,"r");

    $ficheroW = fopen($ficheroW,"w");

    $suma = 0;

    while (($contenido = fgets($ficheroR)) !== false){

        $cambio = str_replace($buscar,$cambiar,$contenido);

        echo $cambio;

        fwrite($ficheroW,$cambio);

    }

    fclose($ficheroR);

    fclose($ficheroW);

}

buscarCambiar("el_quijote.txt","nuevo.txt","Sancho","Morty");

?>