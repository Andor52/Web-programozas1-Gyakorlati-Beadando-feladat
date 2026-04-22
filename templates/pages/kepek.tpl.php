<h2>Kép feltöltése</h2>

<form id="kepfeltolt">
    <input type="number" id="felhaszn_id" name="felhaszn_id" value="<?php if(isset($_SESSION['felhaszn_id'])) echo $_SESSION['felhaszn_id']; else echo -1;?>" class="fel_id">
    <input type="file" id="kep" name="kep" accept="image/*" required>
    <br><br>
    <button type="submit">Feltöltés</button>
</form>


<h3>Itt tekinthetőek meg a feltöltött képek:</h3>
<div class="galeria">
<?php
require_once "./logicals/kapcsolatconnect.php"; 

$sql = "select tipus, nev, kep from kepfeltolt;";

$leker = $pdo->query($sql);
$betolt = $leker->fetchAll();

?>

<?php foreach ($betolt as $kep): ?>
    <div class="kepmegjelenit">
    <img 
        src="data:<?php echo $kep['tipus']?>;base64,<?php echo base64_encode($kep['kep']); ?>"
        alt="<?php echo htmlspecialchars($kep['nev']); ?>"
    >
    <p><?php echo $kep['nev']?></p>
    </div>
    
<?php endforeach; ?>

</div>
<script src="./script/kepek.js"></script>