<?php
require_once "kapcsolatconnect.php";

$felhaszn_id = trim($_POST['felhaszn_id'] ?? '');

if ($felhaszn_id == -1) {
    die("Csak bejelentkezett felhasználó tölthet fel képet!");
}   

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_FILES['kep']) || $_FILES['kep']['error'] !== 0) {
        die("Hibás feltöltés!");
    }

    $tipus = mime_content_type($_FILES['kep']['tmp_name']);
    $nev   = pathinfo($_FILES['kep']['name'], PATHINFO_FILENAME);

    if (!in_array($tipus, ['image/jpeg', 'image/png', 'image/jpg'])) {
        die("Csak képfájl engedélyezett! (jpeg, png, jpg)");
    }

    $kep = file_get_contents($_FILES['kep']['tmp_name']);

    $sql = "INSERT INTO kepfeltolt (felhaszn_id, tipus, nev, kep) VALUES (?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([$felhaszn_id, $tipus, $nev, $kep]);

    echo "A kép feltöltése sikerült!";
}

?>