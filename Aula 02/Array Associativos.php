<?php

// Array Associativo 

$usuario = [
    "email" => "cauagraff@gmail.com",
    "senha" => "asd1236",
    "nome" => "Cauã"
];

var_dump($usuario);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form action="">
        <input type="email" name="" id="" value="<?= $usuario["email"] ?>">
        <input type="password" name="" id="" value="<?= $usuario["senha"] ?>">
        <input type="submit" value="enviar">
    </form>
</body>

</html>