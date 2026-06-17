<?php if (!empty($sikeres)) { ?>
    <h2>Köszönjük az üzenetét!</h2>
    <p>A következő adatokat küldte el a Helios Mozi részére:</p>
    <dl class="elkuldott">
        <dt>Név</dt>
        <dd><?= htmlspecialchars($ertekek['nev']) ?></dd>
        <dt>E-mail</dt>
        <dd><?= htmlspecialchars($ertekek['email']) ?></dd>
        <dt>Üzenet</dt>
        <dd><?= nl2br(htmlspecialchars($ertekek['uzenet'])) ?></dd>
    </dl>
    <p><a href="kapcsolat">Új üzenet írása</a></p>
<?php } else { ?>
    <h2>Az üzenet küldése nem sikerült</h2>
    <p>Kérjük, javítsa a következő hibákat:</p>
    <ul class="hibak">
        <?php foreach ($hibak as $hiba) { ?>
            <li class="hiba"><?= htmlspecialchars($hiba) ?></li>
        <?php } ?>
    </ul>
    <p><a href="kapcsolat">Vissza az űrlaphoz</a></p>
<?php } ?>
