<?php

$data = file_get_contents('data.json');

// decode json
$json_arr = json_decode($data, true);


// add data
$json_arr[] = array('codigo'=>'4', 'nome'=>'Jhonatan', 'sobrenome'=>'Geremias', 'email'=>'jhonatan.geremias@pucpr.br');

// encode json and save to file
file_put_contents('data.json', json_encode($json_arr));

header("Location: index.php");
?>
