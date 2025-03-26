<?php
    if(isset($_POST["NAMA"])){
        $nm = $_POST["NAMA"];
        $nim = $_POST["NIM"];
        $tgllahir = $_POST["TGLLAHIR"];
        echo "Isi dari NAMA: ".$nm. " NIM: ".$nim. " dan TGLLAHIR: ".$tgllahir;
    }else{
        header("location: latihan02target");
    }
//Pastikan bahwa nama atribut yang dipangil tidak berbeda baik itu penggunaan huruf kapital dan tanda baca
//Sebaiknya menghindari penggunaan request
?>