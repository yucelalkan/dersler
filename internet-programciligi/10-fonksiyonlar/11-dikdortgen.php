<?php 

    // İki kenar uzunluğu verilen
    // dikdörtgenin çevresini döndüren
    // fonksiyonu tanımlayınız. 

    function dikdortgen($a,$b){
        return $a+$a+$b+$b;
    }

    echo dikdortgen(3,7);
    $cevre = dikdortgen(8,12);
    echo $cevre;

?>