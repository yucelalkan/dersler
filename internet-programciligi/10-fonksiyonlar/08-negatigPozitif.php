<?php 
    /*
        Verilen bir sayının negatif,
        pozitif veya sıfır olduğunu
        bulan fonksiyonu yazınız.
    */

    function sayiDurumu($sayi){
        if($sayi<0)
            echo "$sayi negatiftir";
        else if($sayi>0)
            echo "$sayi pozitiftir";
        else 
            echo "$sayi sıfırdır";
        
        echo "<br/>";
    }

    sayiDurumu(5);
    sayiDurumu(-35);
    sayiDurumu(0);
    

?>