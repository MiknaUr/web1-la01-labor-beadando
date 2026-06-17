<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: kapcsolat");
    return;
}

$hibak = array();
$ertekek = array(
    'nev' => isset($_POST['nev']) ? trim($_POST['nev']) : '',
    'email' => isset($_POST['email']) ? trim($_POST['email']) : '',
    'uzenet' => isset($_POST['uzenet']) ? trim($_POST['uzenet']) : ''
);

if (mb_strlen($ertekek['nev']) < 2 || mb_strlen($ertekek['nev']) > 100) {
    $hibak['nev'] = 'A név legyen 2 és 100 karakter között.';
}
if ($ertekek['email'] === '' || !filter_var($ertekek['email'], FILTER_VALIDATE_EMAIL)) {
    $hibak['email'] = 'Adjon meg egy érvényes e-mail címet.';
}
if (mb_strlen($ertekek['uzenet']) < 5 || mb_strlen($ertekek['uzenet']) > 2000) {
    $hibak['uzenet'] = 'Az üzenet legyen 5 és 2000 karakter között.';
}

if (empty($hibak)) {
    try {
        $dbh = adatbazis_kapcsolat();
        $stmt = $dbh->prepare("insert into uzenetek(nev, email, uzenet, kuldo) values(:nev, :email, :uzenet, :kuldo)");
        $stmt->execute(array(
            ':nev' => $ertekek['nev'],
            ':email' => $ertekek['email'],
            ':uzenet' => $ertekek['uzenet'],
            ':kuldo' => isset($_SESSION['login']) ? $_SESSION['login'] : null
        ));
        $sikeres = true;
    }
    catch (PDOException $e) {
        $hibak['altalanos'] = 'Az üzenet mentése nem sikerült: ' . $e->getMessage();
    }
}
