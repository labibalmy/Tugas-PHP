<?php
    $jam = "16.40";

    if( $jam == "15.30"){
        $hasil = "$jam Andi pulang sekolah";
    }elseif($jam == "15.45"){
        $hasil = "$jam Andi tiba dirumah";
    }elseif($jam >= "15.46" && $jam<= "15.55" ){;
        $hasil = "$jam Andi mandi";
    }elseif($jam >= "15.56" && $jam<= "16.10" ){;
        $hasil = "$jam Andi membeli bumbu untuk makan malam";
    }elseif($jam >= "16.11" && $jam<= "16.45" ){;
        $hasil = "$jam Andi mengaji selama 30 menit";
    }elseif($jam >= "16.46" && $jam <= "17.15"){
        $hasil = "$jam Andi menghafalkan dialog untuk festival kesenian budaya";
    }elseif($jam >= "17.16" && $jam <= "17.50"){
        $hasil = "$jam Andi chatting dengan Raya mengenai persiapan festival kesenian budaya";
    }elseif($jam >= "17.55" && $jam <= "18.30"){
        $hasil = "$jam Andi sholat maghrib lalu dilanjut makan malam";
    }elseif($jam >= "18.31" && $jam <= "19.00"){
        $hasil = "$jam Andi memiliki waktu luang";
    }elseif($jam >= "19.16" && $jam <= "21.15"){
        $hasil = "$jam Andi mengerjakan tugas sekolah selama 2 jam tanpa terputus";
    }elseif($jam >= "21.16" && $jam<= "21.50" ){;
        $hasil = "$jam Andi mengobrol dengan keluarga sebelum tidur";
    }elseif($jam == "22.00"){
        $hasil = "$jam Andi tidur";
    }elseif($jam == "04.00"){
        $hasil = "$jam Andi bangun";
    }

    echo $hasil;

?>
 <h2>JADWAL HARIAN ANDI<br>
 <ul>
    <h3>
        <li>15.30 Andi pulang sekolah</li>
        <li>15.45 Andi tiba dirumah</li>
        <li>15.46 - 15.55 Andi mandi</li>
        <li>15.56 - 16.10 Andi membeli bumbu untuk makan malam</li>
        <li>16.11 - 16.45 Andi mengaji selama 30 menit</li>
        <li>16.46 - 17.15 Andi menghafalkan dialog untuk festival kesenian budaya</li>
        <li>17.16 - 17.50 Andi chatting dengan Raya mengenai persiapan festival kesenian budaya</li>
        <li>17.55 - 18.30 Andi sholat maghrib lalu dilanjut makan malam</li>
        <li>18.31 - 19.00 Andi memiliki waktu luang</li>
        <li>19.05 - 19.15 Andi sholat isya</li>
        <li>19.16 - 21.15 Andi mengerjakan tugas sekolah selama 2 jam tanpa terputus</li>
        <li>21.16 - 21.50 Andi mengobrol dengan keluarga sebelum tidur</li>
        <li>22.00 Andi tidur</li>
        <li>04.00 Andi bangun</li>
    </h3>
 </ul>