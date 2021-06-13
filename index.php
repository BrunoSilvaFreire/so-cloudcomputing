<?php

$filename = 'data.json';

$data = file_get_contents($filename);
$users = json_decode($data);
?>

<html>
<table>
    <tbody>
        <tr>
			<th>Código: </th>
            <th>Nome: </th>
            <th>Sobrenome: </th>
            <th>Email: </th>
        </tr>
        <?php foreach ($users as $user) { ?>
        <tr>
			<td> <?= $user->codigo; ?> </td>
            <td> <?= $user->nome; ?> </td>
            <td> <?= $user->sobrenome; ?> </td>
            <td> <?= $user->email; ?> </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</html>