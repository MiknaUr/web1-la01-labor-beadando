<h2>Képgaléria</h2>
<p>Pillanatképek a Helios Mozi életéből. Böngésszen a feltöltött képek között!</p>

<?php if (isset($_SESSION['login'])) { ?>
    <section class="feltoltes">
        <h3>Új kép feltöltése</h3>
        <?php if (isset($feltoltes_uzenet)) { ?><p class="siker"><?= $feltoltes_uzenet ?></p><?php } ?>
        <?php if (isset($feltoltes_hiba)) { ?><p class="hiba"><?= $feltoltes_hiba ?></p><?php } ?>
        <form class="urlap" action="kepek" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Kép kiválasztása</legend>
                <p><input type="file" name="kep" accept="image/jpeg,image/png,image/gif,image/webp" required></p>
                <p><input type="submit" value="Feltöltés"></p>
                <p class="megjegyzes">Engedélyezett formátumok: JPG, PNG, GIF, WebP – legfeljebb 5 MB.</p>
            </fieldset>
        </form>
    </section>
<?php } else { ?>
    <p class="megjegyzes">Új képet csak bejelentkezett felhasználó tölthet fel. <a href="belepes">Bejelentkezés</a></p>
<?php } ?>

<?php if (isset($lista_hiba)) { ?><p class="hiba"><?= $lista_hiba ?></p><?php } ?>

<?php if (empty($kepek)) { ?>
    <p>Még nincs feltöltött kép a galériában.</p>
<?php } else { ?>
    <div class="galeria">
        <?php foreach ($kepek as $kep) { ?>
            <figure>
                <img src="./media/galeria/<?= htmlspecialchars($kep['fajlnev']) ?>" alt="<?= htmlspecialchars($kep['eredeti_nev']) ?>" loading="lazy">
                <figcaption>
                    <?= htmlspecialchars($kep['eredeti_nev']) ?>
                    <small>Feltöltötte: <?= htmlspecialchars($kep['feltolto']) ?> – <?= htmlspecialchars($kep['feltoltve']) ?></small>
                </figcaption>
            </figure>
        <?php } ?>
    </div>
<?php } ?>
