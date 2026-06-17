<?php
$kepek = array();
$galeria_konyvtar = './media/galeria/';

if (isset($_SESSION['login']) && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['kep'])) {
    $feltoltes = $_FILES['kep'];
    $engedelyezett = array(
        'image/jpeg' => 'jpg',
        'image/png' => 'png',
        'image/gif' => 'gif',
        'image/webp' => 'webp'
    );
    $max_meret = 5 * 1024 * 1024;
    try {
        if ($feltoltes['error'] !== UPLOAD_ERR_OK) {
            throw new RuntimeException('Nem sikerült a fájl feltöltése. Válasszon ki egy képet.');
        }
        if ($feltoltes['size'] > $max_meret) {
            throw new RuntimeException('A kép mérete nem lehet nagyobb 5 MB-nál.');
        }
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $tipus = $finfo->file($feltoltes['tmp_name']);
        if (!isset($engedelyezett[$tipus])) {
            throw new RuntimeException('Csak JPG, PNG, GIF vagy WebP képet lehet feltölteni.');
        }
        if (!is_dir($galeria_konyvtar) && !mkdir($galeria_konyvtar, 0775, true)) {
            throw new RuntimeException('A galéria könyvtár nem hozható létre.');
        }
        $uj_nev = uniqid('kep_', true) . '.' . $engedelyezett[$tipus];
        if (!move_uploaded_file($feltoltes['tmp_name'], $galeria_konyvtar . $uj_nev)) {
            throw new RuntimeException('A fájl mentése nem sikerült.');
        }
        $dbh = adatbazis_kapcsolat();
        $stmt = $dbh->prepare("insert into kepek(fajlnev, eredeti_nev, feltolto) values(:fajlnev, :eredeti, :feltolto)");
        $stmt->execute(array(
            ':fajlnev' => $uj_nev,
            ':eredeti' => $feltoltes['name'],
            ':feltolto' => $_SESSION['login']
        ));
        $feltoltes_uzenet = 'A kép feltöltése sikeres.';
    }
    catch (RuntimeException $e) {
        $feltoltes_hiba = $e->getMessage();
    }
    catch (PDOException $e) {
        $feltoltes_hiba = 'Adatbázis hiba: ' . $e->getMessage();
    }
}

try {
    if (!isset($dbh)) {
        $dbh = adatbazis_kapcsolat();
    }
    $kepek = $dbh->query("select fajlnev, eredeti_nev, feltolto, feltoltve from kepek order by feltoltve desc, id desc")->fetchAll();
}
catch (PDOException $e) {
    $lista_hiba = 'A galéria betöltése nem sikerült: ' . $e->getMessage();
}
