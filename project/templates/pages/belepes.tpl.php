<h2>Bejelentkezés</h2>
<form class="urlap" action="belep" method="post">
    <fieldset>
        <legend>Bejelentkezés</legend>
        <p><input type="text" name="felhasznalo" placeholder="felhasználói név" required></p>
        <p><input type="password" name="jelszo" placeholder="jelszó" required></p>
        <p><input type="submit" name="belepes" value="Belépés"></p>
    </fieldset>
</form>

<h3>Még nincs fiókja? Regisztráljon!</h3>
<form class="urlap" action="regisztral" method="post">
    <fieldset>
        <legend>Regisztráció</legend>
        <p><input type="text" name="vezeteknev" placeholder="vezetéknév" required></p>
        <p><input type="text" name="utonev" placeholder="utónév" required></p>
        <p><input type="text" name="felhasznalo" placeholder="felhasználói név" required></p>
        <p><input type="password" name="jelszo" placeholder="jelszó" required></p>
        <p><input type="submit" name="regisztracio" value="Regisztráció"></p>
    </fieldset>
</form>
