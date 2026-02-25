<?php
function tertulis($i)
{
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $ok = "maaf limit penulisan sudah melampaui batas";

    if ($i < 12) return "" . $huruf[$i];
    elseif ($i < 20) return tertulis($i - 10) . " belas ";
    elseif ($i < 100) return tertulis($i / 10) . " puluh " . tertulis($i % 10);
    elseif ($i < 200) return " seratus " . tertulis($i - 100);
    elseif ($i < 1000) return tertulis($i / 100) . " ratus " . tertulis($i % 100);
    elseif ($i < 2000) return " seribu " . tertulis($i - 1000);
    elseif ($i < 1000000) return tertulis($i / 1000) . " ribu " . tertulis($i % 1000);
    elseif ($i < 1000000000) return tertulis($i / 1000000) . " juta " . tertulis($i % 1000000);
    elseif ($i >= 100000000) return $ok;
}
