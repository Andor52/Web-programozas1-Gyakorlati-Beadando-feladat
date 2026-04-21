<?php
require_once "kapcsolatconnect.php";

if (!isset($_SESSION['felhaszn_id'])) {
    die("Ez az oldal csak bejelentkezett felhasználóknak érhető el!");
}

$sql = "
SELECT f.bejelentkezes, u.email, u.targy, u.uzenet, u.datum
FROM uzenetek u JOIN felhasznalok f ON u.felhaszn_id = f.id
ORDER BY u.datum DESC";

$stmt = $pdo->query($sql);
$uzenetek = $stmt->fetchAll();
?>
