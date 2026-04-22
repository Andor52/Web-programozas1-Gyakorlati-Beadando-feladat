<div class="kapcsolat">
    <div>
        <h2>Kapcsolat</h2>
        <p>Cégünk a legnagyobb hajózási társaság a Balatonon, mely közel 180 éves múltra tekint vissza. Legfőbb tevékenységi köreink: a személyhajózás, a kompközlekedés és a vitorláskikötők üzemeltetése.</p>
    </div>
    <div class="elerhetoseg">
        <h2>Elérhetőségek</h2>
        <ul>
            <li class="address">
                <span>Balatoni Hajózási Zrt.</span>
            </li>
            <li class="map">
                <span>8600 Siófok, Krúdy sétány 2.</span>
            </li>
            <li class="phone">
                <span>+36 80 310 050</span>
            </li>
            <li class="email">
                <span>ugyfelszolgalat@bahart.hu</span>
            </li>
        </ul>
    </div>
    <div class="urlap">
        <form id="kapcsolatForm" action="./logicals/kapcsolatellenor.php" method="post">
            <input type="number" id="felhaszn_id" name="felhaszn_id" value="<?php if(isset($_SESSION['felhaszn_id'])) echo $_SESSION['felhaszn_id']; else echo -1;?>" class="fel_id">
            <h2>Kapcsolatfelvételi űrlap</h2>
            <label>E-mail:</label><br>
            <input type="text" id="email" name="email" placeholder="E-mail cím"><br><br>
            <label>Rövid információ miért kesett minket:</label><br>
            <input type="text" id="targy" name="targy" placeholder="Tárgy"><br><br>
            <label>Üzenet:</label><br>
            <textarea id="uzenet" name="uzenet" placeholder="Üzenet"></textarea><br><br>
            <button type="submit" id="submit">Üzenetet küldök - Várom a választ</button>
        </form>
    </div>
</div>
<script src="./script/kapcsolat.js"></script>