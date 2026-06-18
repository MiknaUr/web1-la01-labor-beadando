<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && ctype_digit($_POST['id'])) {
    try {
        $dbh = adatbazis_kapcsolat();
        $stmt = $dbh->prepare("delete from film where id = :id");
        $stmt->execute(array(':id' => (int) $_POST['id']));
    }
    catch (PDOException $e) {
    }
}
header("Location: crud");
exit;
