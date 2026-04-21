<h2>Admin felület</h2>

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
        <td><?= $u['bejelentkezes'] ?: "Vendég" ?></td>
        <td><?= htmlspecialchars($u['email']) ?></td>
        <td><?= htmlspecialchars($u['targy']) ?></td>
        <td><?= htmlspecialchars($u['uzenet']) ?></td>
        <td><?= $u['datum'] ?></td>
    </tr>
<?php endforeach; ?>
</table>