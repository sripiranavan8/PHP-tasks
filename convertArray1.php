<?php

$data = array(
    0 =>
    array(
        'id' =>
        array(
            'S' => 'prueba',
        ),
        'fila1' =>
        array(
            'S' => 'columna1',
        ),
    ),
    1 =>
    array(
        'id' =>
        array(
            'S' => 'Acme Band4',
        ),
        'fila1' =>
        array(
            'S' => 'PartiQL Rocks',
        ),
    ),
);
$newArray = array();
foreach ($data as $key => $value) {
    $insideArray = array();
    foreach ($value as $newKey => $newValue) {
        $insideArray = array_merge($insideArray, array($newKey => current($newValue)));
    }
    $newArray = array_merge($newArray, array($key => $insideArray));
}
print_r($newArray);
