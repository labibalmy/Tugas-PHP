<?php 
$nilai = 0;
    if($nilai > 100)
        echo "$nilai = nilai wajib diantara 0-100";
    elseif($nilai >= 90)
        echo " Nilai $nilai = A";
    elseif ($nilai >= 80)
        echo " Nilai $nilai = B";
    elseif ($nilai >= 70)
        echo " Nilai $nilai = C";
    elseif ($nilai >= 0)
        echo " Nilai $nilai = D";
    else
        echo "$nilai = Nilai wajib diantara 0-100";
?>


