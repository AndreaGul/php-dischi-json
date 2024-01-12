<?php

// leggere il file con tutti i dischi

$database = file_get_contents(__DIR__ . '/dischi.json');



// partendo da questo database mi creo la stuttura php

$discs = json_decode($database);


//per poi dopo eventuali cambiamento alla stuttura php trasformiamo la stuttura della pagina in modo tale che legga il file come un json

header('Content-type: application/json');
echo json_encode($discs);

?>