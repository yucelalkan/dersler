<?php 

    // Ortalaması girilen öğrencinin 
    // belge durumunu ve sınıf geçme 
    // durumunu hesaplayan program.

    $ortalama = 19.99;

    if( $ortalama >= 85 )
        echo "Takdir Alıyor";
    else if( $ortalama >=70 )
        echo "Teşekkür Alıyor";
    else if ( $ortalama >=50 )
        echo "Sınıf Geçiyor";
    else
        echo "Sınıfta Kaldı";


?>