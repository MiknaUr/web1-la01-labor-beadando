<?php
function adatbazis_kapcsolat()
{
    global $adatbazis;
    $dsn = "mysql:host={$adatbazis['host']};dbname={$adatbazis['nev']};charset=utf8mb4";
    $beallitasok = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    );
    return new PDO($dsn, $adatbazis['felhasznalo'], $adatbazis['jelszo'], $beallitasok);
}
