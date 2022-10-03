<?php

define("CONFG_NOME_SITE", "Testando constantes");
define("VELOCIDADE_DA_LUZ",  299792458);
define("PI", 3.14);
define("SI", [
    "comprimento" => "m",
    "massa" => "kg",
    "tempo" => "s",
    "termodinamica" => "K"
]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= CONFG_NOME_SITE ?></title>
</head>

<body>
    <table border=1>
        <tr>
            <td>Gradeza</td>
            <td>Unidade de medida</td>
            <td>Simbolo</td>
        </tr>
        <tr>
            <td>Comprimento</td>
            <td>Metro</td>
            <td><?= SI["comprimento"] ?></td>
        </tr>
        <tr>
            <td>Massa</td>
            <td>Quilograma</td>
            <td><?= SI["massa"] ?> </td>
        </tr>
        <tr>
            <td>Tempo</td>
            <td>Segundos</td>
            <td><?= SI["tempo"] ?> </td>
        <tr>
            <td>Termodinamica</td>
            <td>Kelvin</td>
            <td><?= SI["termodinamica"] ?></td>
        </tr>
        </tr>
    </table>
</body>

</html>