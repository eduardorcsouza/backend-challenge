<?php
include_once 'TesteLogico.php';

$testeLogico = new TesteLogico([
    [1 ,6 ,15 ,4],
    [2 ,2 ,3 ,2],
    [12,2,3  ,15],
    [1 ,9 ,215,4],
]);
echo $testeLogico->diagonalDiference();