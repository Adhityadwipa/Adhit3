<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);
    
    if($cnn){
        echo "Koneksi sukses";
        $sql1 = "CREATE DATABASE " . DBNAME;

        $hasil = mysqli_query($cnn, $sql1);

        if($hasil){
            echo "database : " . DBNAME . "berhasil dibuat";
        }else{
            echo "database : " . DBNAME . "gagal dibuat";
        }


    }else{
        echo "Koneksi gagal<br>" . mysqli_connect_error($cnn);
    }