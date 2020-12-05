<?php 

    // 0-100 arasında not girişini kabul eden, 
    // aksi durumda “Hatalı not” uyarısı veren 
    // program.

    $not = -1;

    if($not<0)
        echo "Hatalı Not";
    else if($not>100)
        echo "Hatalı Not";
    else 
        echo "Geçerli Not";


?>