<form class="urlap crud-urlap" action="<?= $crud_action ?>" method="post">
    <fieldset>
        <legend><?= htmlspecialchars($crud_submit) ?></legend>
        <p>
            <label for="cim">Cím</label>
            <input type="text" id="cim" name="cim" value="<?= htmlspecialchars($film['cim']) ?>">
            <?php if (!empty($hibak['cim'])) { ?><span class="mezohiba"><?= htmlspecialchars($hibak['cim']) ?></span><?php } ?>
        </p>
        <p>
            <label for="ev">Év</label>
            <input type="text" id="ev" name="ev" value="<?= htmlspecialchars($film['ev']) ?>">
            <?php if (!empty($hibak['ev'])) { ?><span class="mezohiba"><?= htmlspecialchars($hibak['ev']) ?></span><?php } ?>
        </p>
        <p>
            <label for="hossz">Hossz (perc)</label>
            <input type="text" id="hossz" name="hossz" value="<?= htmlspecialchars($film['hossz']) ?>">
            <?php if (!empty($hibak['hossz'])) { ?><span class="mezohiba"><?= htmlspecialchars($hibak['hossz']) ?></span><?php } ?>
        </p>
        <?php if (!empty($hibak['altalanos'])) { ?><p class="hiba"><?= htmlspecialchars($hibak['altalanos']) ?></p><?php } ?>
        <p><input type="submit" value="<?= htmlspecialchars($crud_submit) ?>"></p>
    </fieldset>
</form>
