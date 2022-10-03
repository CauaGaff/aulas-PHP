<?php

$apartamento = [
    1 => [
        101 => [
            "nome" => "Eduardo",
            "aluguel" => "R$700"
        ],
        102 => [
            "nome" => "Thiago",
            "aluguel" => "R$750"
        ],
        103 => [
            "nome" => "Jane",
            "aluguel" => "R$800"
        ]
    ],
    2 => [
        201 => [
            "nome" => "Roberto",
            "aluguel" => "R$900"
        ]
    ]
];


var_dump($apartamento);
echo "<hr>";
echo $apartamento[1][103]["nome"];
echo "<br>";
echo $apartamento[2][201]["aluguel"];
