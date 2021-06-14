<?php

// read file
$data = file_get_contents('data.json');

// decode json to array
$json_arr = json_decode($data, true);
//collect data from form
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];

// decode json to array
foreach ($json_arr as $key => $value) {
    if ($value['codigo'] == $codigo) {
  		$json_arr[$key]['nome'] = $nome;
      $json_arr[$key]['sobrenome'] = $sobrenome;
	  	$json_arr[$key]['email'] = $email;
    }
}

// encode array to json and save to file
file_put_contents('data.json', json_encode($json_arr));

header("Location: index.php");
?>