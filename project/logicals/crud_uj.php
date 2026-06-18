<?php
include_once('./includes/film_seged.php');

$film = array('id' => 0, 'cim' => '', 'ev' => '', 'hossz' => '');
$hibak = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $film['cim'] = isset($_POST['cim']) ? trim($_POST['cim']) : '';
    $film['ev'] = isset($_POST['ev']) ? trim($_POST['ev']) : '';
    $film['hossz'] = isset($_POST['hossz']) ? trim($_POST['hossz']) : '';

    $hibak = film_ellenoriz($film['cim'], $film['ev'], $film['hossz']);

    if (empty($hibak)) {
        try {
            $dbh = adatbazis_kapcsolat();
            $stmt = $dbh->prepare("insert into film(cim, ev, hossz) values(:cim, :ev, :hossz)");
            $stmt->execute(array(
                ':cim' => $film['cim'],
                ':ev' => (int) $film['ev'],
                ':hossz' => (int) $film['hossz']
            ));
            header("Location: crud");
            exit;
        }
        catch (PDOException $e) {
            $hibak['altalanos'] = 'A mentés nem sikerült: ' . $e->getMessage();
        }
    }
}
