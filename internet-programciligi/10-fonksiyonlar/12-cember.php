<?php 

    // yarıçapı girilen bir çemberin
    // çevresini döndüren fonksiyonu tanımlayınız
    // Çevre = 2*pi*r*r

    function cember($r){
        $pi = 3.14;
        return 2*$pi*$r*$r;
    }

    echo cember(7);

?>