<?php
#fungsi/function
#Dengan Paremeter
    cetaktek("Penjumlahan 4 dengan 7  menghasilkan");
    echo tambah (4,7);

     function cetakteks(){
         echo "Menampilkan Teks";
     }
#Tanpa parameter
#Perhatikan parameter dan fungsinya bekerja sampai mana agar tidak terjadi eror
     function cetaktek($tx=""){
         if($tx==""){
             echo "Menampilkan Teks";
         }else{
             echo $tx;
         }
     }
#Function tambah dengan menggunakan return untuk memunculkan hasil
     function tambah($bil1,$bil2){
         return $bil1+$bil2;
     }
?>