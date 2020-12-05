<?php 

    // İki sayı ve işlem girilecek. 
    // Girilen işleme göre sonucu hesaplayacak program. 

    $a = 20;
    $b = 3;
    $islem = "/";
    
    switch($islem){
        case "+" : echo $a+$b;      break;
        case "-" : echo $a-$b;      break;
        case "/" : echo $a/$b;      break;
        case "*" : echo $a*$b;      break;
        default : echo "Geçersiz işlem";
    }

?>