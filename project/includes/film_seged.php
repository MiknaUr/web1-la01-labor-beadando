<?php
function film_ellenoriz($cim, $ev, $hossz)
{
    $hibak = array();
    if (mb_strlen($cim) < 1 || mb_strlen($cim) > 255) {
        $hibak['cim'] = 'A cím legyen 1 és 255 karakter között.';
    }
    if (!ctype_digit((string) $ev) || (int) $ev < 1880 || (int) $ev > 2100) {
        $hibak['ev'] = 'Az év 1880 és 2100 közötti egész szám legyen.';
    }
    if (!ctype_digit((string) $hossz) || (int) $hossz < 1 || (int) $hossz > 600) {
        $hibak['hossz'] = 'A hossz 1 és 600 közötti egész szám (perc) legyen.';
    }
    return $hibak;
}
