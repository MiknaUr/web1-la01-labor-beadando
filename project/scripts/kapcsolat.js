document.addEventListener('DOMContentLoaded', function () {
    var urlap = document.getElementById('kapcsolat-urlap');
    if (!urlap) {
        return;
    }

    function hibatMutat(mezo, uzenet) {
        var span = urlap.querySelector('.mezohiba[data-mezo="' + mezo + '"]');
        if (span) {
            span.textContent = uzenet;
        }
    }

    function hibakatTorol() {
        var spanok = urlap.querySelectorAll('.mezohiba');
        for (var i = 0; i < spanok.length; i++) {
            spanok[i].textContent = '';
        }
    }

    urlap.addEventListener('submit', function (esemeny) {
        hibakatTorol();
        var rendben = true;

        var nev = urlap.nev.value.trim();
        var email = urlap.email.value.trim();
        var uzenet = urlap.uzenet.value.trim();
        var emailMinta = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (nev.length < 2 || nev.length > 100) {
            hibatMutat('nev', 'A név legyen 2 és 100 karakter között.');
            rendben = false;
        }
        if (email === '' || !emailMinta.test(email)) {
            hibatMutat('email', 'Adjon meg egy érvényes e-mail címet.');
            rendben = false;
        }
        if (uzenet.length < 5 || uzenet.length > 2000) {
            hibatMutat('uzenet', 'Az üzenet legyen 5 és 2000 karakter között.');
            rendben = false;
        }

        if (!rendben) {
            esemeny.preventDefault();
        }
    });
});
