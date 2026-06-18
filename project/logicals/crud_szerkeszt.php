<?php
include_once('./includes/film_seged.php');

$film = array('id' => 0, 'cim' => '', 'ev' => '', 'hossz' => '');
$hibak = array();
$azonosito = (isset($_GET['id']) && ctype_digit($_GET['id'])) ? (int) $_GET['id'] : 0;

try {
    $dbh = adatbazis_kapcsolat();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $film['id'] = $azonosito;
        $film['cim'] = isset($_POST['cim']) ? trim($_POST['cim']) : '';
        $film['ev'] = isset($_POST['ev']) ? trim($_POST['ev']) : '';
        $film['hossz'] = isset($_POST['hossz']) ? trim($_POST['hossz']) : '';

        $hibak = film_ellenoriz($film['cim'], $film['ev'], $film['hossz']);

        if (empty($hibak)) {
            $stmt = $dbh->prepare("update film set cim = :cim, ev = :ev, hossz = :hossz where id = :id");
            $stmt->execute(array(
                ':cim' => $film['cim'],
                ':ev' => (int) $film['ev'],
                ':hossz' => (int) $film['hossz'],
                ':id' => $azonosito
            ));
            header("Location: crud");
            exit;
        }
    }
    else {
        $stmt = $dbh->prepare("select id, cim, ev, hossz from film where id = :id");
        $stmt->execute(array(':id' => $azonosito));
        $row = $stmt->fetch();
        if ($row) {
            $film = $row;
        }
        else {
            $nincs_film = true;
        }
    }
}
catch (PDOException $e) {
    $hibak['altalanos'] = 'A művelet nem sikerült: ' . $e->getMessage();
}
