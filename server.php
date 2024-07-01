<?php 

header("Content-type: application/json");

/* recupero i dati da json */
$rawData = file_get_contents('./db/todoListAdditions.json');
/* traduco in array (il true è per la richiesta esplicita che sia associativo) */
$data = json_decode($rawData, true);


echo json_encode($data);


?>