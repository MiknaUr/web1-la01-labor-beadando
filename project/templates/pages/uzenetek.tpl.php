<h2>Beérkezett üzenetek</h2>
<?php if (!isset($_SESSION['login'])) { ?>
    <p>Ezt az oldalt csak bejelentkezett felhasználó tekintheti meg. <a href="belepes">Bejelentkezés</a></p>
<?php } else { ?>
    <?php if (isset($lista_hiba)) { ?>
        <p class="hiba"><?= htmlspecialchars($lista_hiba) ?></p>
    <?php } elseif (empty($uzenetek)) { ?>
        <p>Még nem érkezett üzenet.</p>
    <?php } else { ?>
        <div class="tabla-gordit">
            <table class="uzenet-tabla">
                <thead>
                    <tr>
                        <th>Küldés ideje</th>
                        <th>Küldő</th>
                        <th>Megadott név</th>
                        <th>E-mail</th>
                        <th>Üzenet</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($uzenetek as $u) { ?>
                        <tr>
                            <td><?= htmlspecialchars($u['kuldve']) ?></td>
                            <td><?= htmlspecialchars($u['kuldo'] !== null ? $u['kuldo'] : 'Vendég') ?></td>
                            <td><?= htmlspecialchars($u['nev']) ?></td>
                            <td><?= htmlspecialchars($u['email']) ?></td>
                            <td><?= nl2br(htmlspecialchars($u['uzenet'])) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } ?>
<?php } ?>
