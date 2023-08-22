<?php

$ano2022=[
    'Joao Pedro',
    'Maria Helena',
    'Henrique',
    'Antonio Carlos',
    'Mariana',
    'Ana',
    'Andre',
    'Vinicius',
    'Eloisa'
];

$novos = [
    " Stefane",
    'Andreia',
    'Vitoria'
    ];

$ano2022[]= 'Luiz'; //add
array_push($ano2022, ...$novos );//add com função

array_unshift($ano2022, "Bob"); //add inicio

array_shift($ano2022); //remove primeiro
array_pop($ano2022); //remove ultimo

