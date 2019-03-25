<?php
    
    $kon = mysqli_connect("localhost", "id8951506_akademik1",'12345678',"id8951506_akademik");

    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>
