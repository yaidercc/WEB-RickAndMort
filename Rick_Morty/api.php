<?php

    function getCharacters($url){
        // abro la conexion
        $ch = curl_init();
        // inicializo los parametros y recursos de la peticion
        curl_setopt($ch, CURLOPT_URL,$url);
        // retorno los datos que se obtienen de la peticion
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        // guardo los datos
        $response= curl_exec($ch);
        // cierro la conexion
        curl_close($ch);
        // retorno los datos
        return $response;
    }
    echo json_encode(getCharacters($_POST["url"]));
?>