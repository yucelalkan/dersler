<?php

    // Gelen ortalama değerine göre
    // Takdir alma durumunu hesaplayan
    // fonksiyonu tanımlayın ve kullanın

    function takdirDurumu($ortalama)
    {
        if( $ortalama>=85 )
            echo "Takdir Alıyor";
        else
            echo "Takdir Alamıyor";
    }

    takdirDurumu(100);

?>
