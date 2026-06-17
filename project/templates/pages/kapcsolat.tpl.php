<h2>Kapcsolat</h2>
<p>Kérdése van, vagy szeretne csoportos vetítést foglalni? Írjon nekünk, és a Helios Mozi csapata hamarosan válaszol!</p>

<section class="elerheto">
    <h3>Elérhetőségeink</h3>
    <address>
        Helios Mozi<br>
        6000 Kecskemét, Szabadság tér 1/A<br>
        E-mail: info@web1labor.fejlessz.hu
    </address>
</section>

<form id="kapcsolat-urlap" class="urlap" action="uzenetkuldes" method="post" novalidate>
    <fieldset>
        <legend>Üzenet küldése</legend>
        <p>
            <label for="nev">Név</label>
            <input type="text" id="nev" name="nev">
            <span class="mezohiba" data-mezo="nev"></span>
        </p>
        <p>
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email">
            <span class="mezohiba" data-mezo="email"></span>
        </p>
        <p>
            <label for="uzenet">Üzenet</label>
            <textarea id="uzenet" name="uzenet" rows="6"></textarea>
            <span class="mezohiba" data-mezo="uzenet"></span>
        </p>
        <p><input type="submit" value="Küldés"></p>
    </fieldset>
</form>
<script src="./scripts/kapcsolat.js"></script>
