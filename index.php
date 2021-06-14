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
<body>
<br>
    <form action="insert.php" method="post">
        <p>Create<p>
        Código: <input type="text" name="codigo"><br>
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <form action="update.php" method="post">
        <p>Update<p>
        Código: <input type="text" name="codigo"><br>
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <form action="delete.php" method="post">
        <p>Delete<p>
        Código: <input type="text" name="codigo"><br>
        <input type="submit">
    </form>
</body>
</html>