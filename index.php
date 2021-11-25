<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family:arial;
        }
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Curl Practice</h1>
    <?php
        /*abrimos la conexion
        $ch = curl_init();
        // iniciaiza los datos de nuestra posicion
        curl_setopt($ch,CURLOPT_URL,'https://rickandmortyapi.com/api/character/2');
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        // ejecutar peticion
        $repsonse = curl_exec($ch);
        //se validan los errores
        if(curl_errno($ch)) echo curl_error($ch);
        else $dec=json_decode($repsonse,true);

        var_dump($dec);
        //se cierra la conexion
        curl_close($ch);
    */
    //Iniciamos la conexion
    $ch = curl_init();
    //datos que se van a enviar por post
    $array=[
        'name'=> 'Emilio',
        'Job'=> 'Programer'
    ];
    // convierte los datos para poder enviarlos por peticion
    $data=http_build_query($array);
    curl_setopt($ch,CURLOPT_URL,'https://reqres.in/api/users');
    // le decimos que nos permita enviar datos
    curl_setopt($ch, CURLOPT_POST,true);
    // le mandamos los datos
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    // retorna los datos
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $response=curl_exec($ch);
    if(curl_errno($ch)) echo curl_error($ch);
    else $decode=json_decode($esponse,true);
    ?>
</body>
</html>