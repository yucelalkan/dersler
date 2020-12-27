<?php 

    // Bir sayının tek mi çift mi 
    // olduğunu hesaplayan fonksiyonu
    // yazınız.

    function tekCift($sayi){
        if( $sayi%2==0 )
            echo "$sayi Çifttir";
        else 
            echo "$sayi Tektir";
        echo "<br/>";
    }
    
    tekCift(5);
    tekCift(4);
    tekCift(19);

?>