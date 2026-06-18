<?php
$ablakcim = array(
    'cim' => 'Helios Mozi',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'Helios Mozi logó',
    'cim' => 'Helios Mozi',
    'motto' => 'Ahol a fény történetté válik'
);

$lablec = array(
    'copyright' => 'Copyright ' . date("Y") . '.',
    'ceg' => 'Helios Mozi'
);

$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
if (strpos($host, 'localhost') === 0 || strpos($host, '127.0.0.1') === 0) {
    $adatbazis = array(
        'host' => 'localhost',
        'nev' => 'helios_mozi',
        'felhasznalo' => 'root',
        'jelszo' => ''
    );
}
else {
    $adatbazis = array(
        'host' => 'localhost',
        'nev' => 'adatbazis3',
        'felhasznalo' => 'adatbazis3',
        'jelszo' => 'Ozymandias2444'
    );
}

$oldalak = array(
    '/' => array('fajl' => 'cimlap', 'szoveg' => 'Főoldal', 'menun' => array(1, 1)),
    'kepek' => array('fajl' => 'kepek', 'szoveg' => 'Képek', 'menun' => array(1, 1)),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1, 1)),
    'crud' => array('fajl' => 'crud', 'szoveg' => 'CRUD', 'menun' => array(1, 1)),
    'crud_uj' => array('fajl' => 'crud_uj', 'szoveg' => '', 'menun' => array(0, 0)),
    'crud_szerkeszt' => array('fajl' => 'crud_szerkeszt', 'szoveg' => '', 'menun' => array(0, 0)),
    'crud_torol' => array('fajl' => 'crud_torol', 'szoveg' => '', 'menun' => array(0, 0)),
    'uzenetkuldes' => array('fajl' => 'uzenetkuldes', 'szoveg' => '', 'menun' => array(0, 0)),
    'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(0, 1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Bejelentkezés', 'menun' => array(1, 0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0, 1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0, 0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0, 0))
);

$hiba_oldal = array('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
