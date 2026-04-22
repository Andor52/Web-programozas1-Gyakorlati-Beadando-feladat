<h2 class="admin">Admin felület</h2>

<table class="uzenetek">
    <tr>
        <th>Üzenetküldő neve</th>
        <th>E-mail</th>
        <th>Tárgy</th>
        <th>Üzenet</th>
        <th>Dátum</th>
    </tr>

<?php foreach ($uzenetek as $u): ?>
    <tr>
        <td data-label="Üzenetküldő neve"><?= $u['bejelentkezes'] ?: "Vendég" ?></td>
        <td data-label="E-mail"><?= htmlspecialchars($u['email']) ?></td>
        <td data-label="Tárgy"><?= htmlspecialchars($u['targy']) ?></td>
        <td data-label="Üzenet"><?= htmlspecialchars($u['uzenet']) ?></td>
        <td data-label="Dátum"><?= $u['datum'] ?></td>
    </tr>
<?php endforeach; ?>
</table>