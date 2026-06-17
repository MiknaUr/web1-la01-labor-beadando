<?php
$uzenetek = array();
if (isset($_SESSION['login'])) {
    try {
        $dbh = adatbazis_kapcsolat();
        $uzenetek = $dbh->query("select nev, email, uzenet, kuldo, kuldve from uzenetek order by kuldve desc, id desc")->fetchAll();
    }
    catch (PDOException $e) {
        $lista_hiba = 'Az üzenetek betöltése nem sikerült: ' . $e->getMessage();
    }
}
