<?php

// read file
$data = file_get_contents('data.json');

// decode json to array
$json_arr = json_decode($data, true);

foreach ($json_arr as $key => $value) {
    if ($value['codigo'] == '4') {
		$json_arr[$key]['nome'] = 'Vilmar';
        $json_arr[$key]['sobrenome'] = 'Abreu';
		$json_arr[$key]['email'] = 'vilmar.abreu@pucpr.br';
    }
}

// encode array to json and save to file
file_put_contents('data.json', json_encode($json_arr));

header("Location: index.php");
?>