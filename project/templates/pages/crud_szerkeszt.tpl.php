<?php if (isset($nincs_film)) { ?>
    <h2>A film nem található</h2>
    <p><a href="crud">Vissza a listához</a></p>
<?php } else { ?>
    <h2>Film szerkesztése</h2>
    <?php
    $crud_action = 'crud_szerkeszt?id=' . (int) $film['id'];
    $crud_submit = 'Mentés';
    include('./templates/reszek/crud_urlap.tpl.php');
    ?>
    <p><a href="crud">Vissza a listához</a></p>
<?php } ?>
