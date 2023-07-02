<?php
    $koneksi = mysqly_connect("localhost","root","","pirpoo");
    if ($koneksi == true);{
        echo "koneksi berhasil";
    }else{
        echo "koneksi gagal";
    }
    


?>