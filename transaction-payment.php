

<?php

    $dropdown = $_POST['dropdown'];

    echo $dropdown;

    if ($dropdown == 0){
        $notedropdown = "Ambil Langsung ke Toko (+ Rp. 0)";
    } else{
        $notedropdown = "Diantar Ke Rumah (+ Rp. 10000)";
    }

    echo $notedropdown;
?>