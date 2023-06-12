<?php

$lista = [
    [
        'ToDo' => 'Lavare',
        'Done' => false  
    ],
    [
        'ToDo' => 'Pulire',
        'Done' => false  
    ],
    [
        'ToDo' => 'Lavorare',
        'Done' => false  
    ],
    [
        'ToDo' => 'Mangiare',
        'Done' => false  
    ],
    [
        'ToDo' => 'Studiare',
        'Done' => false  
    ],
];

header('Content-Type: application/json');
$stringa = json_encode($lista);
echo $stringa;


?>