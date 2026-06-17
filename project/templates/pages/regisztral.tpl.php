<?php if(isset($uzenet)) { ?>
    <h2><?= $uzenet ?></h2>
    <?php if($ujra) { ?>
        <p><a href="belepes">Próbálja újra!</a></p>
    <?php } else { ?>
        <p><a href="belepes">Tovább a bejelentkezéshez</a></p>
    <?php } ?>
<?php } ?>
