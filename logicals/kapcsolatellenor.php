<?php
require_once "kapcsolatconnect.php";

$email = trim($_POST['email'] ?? '');
$targy = trim($_POST['targy'] ?? '');
$uzenet = trim($_POST['uzenet'] ?? '');
$felhaszn_id = trim($_POST['felhaszn_id'] ?? '');

$hibak = [];


if ($email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $hibak[] = "Hibás e-mail cím!";
}

if (strlen($targy) < 3) {
    $hibak[] = "A tárgy túl rövid!";
}

if (strlen($uzenet) < 10) {
    $hibak[] = "Az üzenet túl rövid!";
}

if (!empty($hibak)) {
    echo implode("<br>", $hibak);
    exit;
}

if ($felhaszn_id == -1) {
    $stmt = $pdo->query("SELECT id FROM felhasznalok WHERE bejelentkezes='vendég'");
    $felhaszn_id = $stmt->fetchColumn();
}

$sql = "INSERT INTO uzenetek (felhaszn_id, email, targy, uzenet, datum)
        VALUES (?, ?, ?, ?, NOW())";

$stmt = $pdo->prepare($sql);
$stmt->execute([$felhaszn_id, $email, $targy, $uzenet]);

echo "Az üzenet sikeresen elküldve!";
?>
