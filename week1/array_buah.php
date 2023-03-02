<?php

//array indexed
$buah = ["alpukat", "jeruk", "mangga"];

//cetak dengan echo
echo $buah[1]; 

//=======================//====================//

//array assosiatif 
$buah = ["a"=>"alpukat", "j"=>"jeruk", "m"=>"mangga", "p"=>"pisang"];


//cetak dengan foreach
echo "<ol>";  
foreach ($buah as $fruit => $k ){  
    echo "<li> $fruit - $k </li>";

}
echo "</ol>";

//=======================//====================//

//ubah $buah index ke 1
$buah[1] = "apel";

//tambah $buah baru ke dalam array
$buah[] = "durian";

//cetak jumlah $buah
echo "<br/> Jumlah Buah = " .count($buah);

//cetak seluruh $buah
echo "<ol>";
foreach ($buah as $fruit){
    echo "<li> $fruit </li>";
}

echo "</ol>";





?>