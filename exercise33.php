<?php
$jsCont = '[
{"name":"Adrian", "lastname":"Ramos"},
{"name":"Liz", "lastname":"Cruz"}
]';
$res = json_decode($jsCont);
//print_r($res);

foreach ($res as $r) {
    print_r($r->name);
    echo "<br>";
}
?>
