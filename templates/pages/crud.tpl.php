<div class="header">
        <h1>Fetch API menüs megvalósítás</h1>
</div>
    <div class="main">
        <form id="felhasznalo">
            <h3>Új cég hozzáadása / szerkesztése</h3>
            <label for="nev">Cég neve</label><br>
            <input type="text" id="nev" placeholder="Cég neve"><br><br>
            <label for="varos">Város</label><br>
            <input type="text" id="varos" placeholder="Város">
            <br>
            <p id="message"></p>
            <input type="hidden" id="az">
            <button type="submit" id="submit" class="submit">Küldés</button>
            <button type="reset" id="reset" class="reset">Alaphelyzet</button><br><br>
        </form>
         <h3>Cégek listája</h3>
            <table>
                <thead>   
                    <tr>
                        <th>Cégek neve</th>
                        <th>Város</th>
                        <th>Műveletek</th>
                    </tr>
                </thead>
                <tbody id="tabla"></tbody>
            </table>
    <script src="./script/crud.js"></script>
</div>