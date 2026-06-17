<?php if(isset($row)) { ?>
    <?php if($row) { ?>
        <h2>Sikeres bejelentkezés!</h2>
        <p>Azonosító: <strong><?= $row['id'] ?></strong></p>
        <p>Név: <strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong></p>
        <p><a href=".">Tovább a főoldalra</a></p>
    <?php } else { ?>
        <h2>A bejelentkezés nem sikerült!</h2>
        <p><a href="belepes">Próbálja újra!</a></p>
    <?php } ?>
<?php } ?>
<?php if(isset($errormessage)) { ?>
    <p class="hiba"><?= $errormessage ?></p>
<?php } ?>
