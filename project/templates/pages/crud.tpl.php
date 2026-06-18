<div class="crud-fejlec">
    <h2>Filmek kezelése</h2>
    <a class="gomb gomb-hozzaad" href="crud_uj">Új film</a>
</div>

<?php if (isset($lista_hiba)) { ?>
    <p class="hiba"><?= htmlspecialchars($lista_hiba) ?></p>
<?php } elseif (empty($filmek)) { ?>
    <p>Nincs film az adatbázisban.</p>
<?php } else { ?>
    <div class="tabla-gordit">
        <table class="crud-tabla">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Cím</th>
                    <th>Év</th>
                    <th>Hossz (perc)</th>
                    <th>Műveletek</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($filmek as $f) { ?>
                    <tr>
                        <td><?= (int) $f['id'] ?></td>
                        <td><?= htmlspecialchars($f['cim']) ?></td>
                        <td><?= (int) $f['ev'] ?></td>
                        <td><?= (int) $f['hossz'] ?></td>
                        <td>
                            <div class="muveletek">
                                <a class="gomb gomb-szerkeszt" href="crud_szerkeszt?id=<?= (int) $f['id'] ?>">Szerkesztés</a>
                                <form action="crud_torol" method="post" onsubmit="return confirm('Biztosan törli ezt a filmet?');">
                                    <input type="hidden" name="id" value="<?= (int) $f['id'] ?>">
                                    <button type="submit" class="gomb gomb-torol">Törlés</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } ?>
