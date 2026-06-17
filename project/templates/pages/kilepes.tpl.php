<h2>Sikeres kilépés</h2>
<?php if(isset($data['login'])) { ?>
    <p>Viszontlátásra, <strong><?= $data['csn']." ".$data['un']." (".$data['login'].")" ?></strong>!</p>
<?php } ?>
<p><a href=".">Vissza a főoldalra</a></p>
