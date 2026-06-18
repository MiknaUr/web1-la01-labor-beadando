<?php
$filmek = array();
try {
    $dbh = adatbazis_kapcsolat();
    $filmek = $dbh->query("select id, cim, ev, hossz from film order by id")->fetchAll();
}
catch (PDOException $e) {
    $lista_hiba = 'A filmek betöltése nem sikerült: ' . $e->getMessage();
}
