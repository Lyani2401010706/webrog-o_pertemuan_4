<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form HTML</title>
</head>
<body>
<!--Get untuk mengambil data dari server dan sintax di bawah ini hasilnya bisa dilihat di url local hostnya karena mengggunakan get sedangkan kalau mengunakan post hasilnya tidak akan muncul-->
<!--Bentuk POST lebih umum digunakan untuk menyimpan suatu data ke server-->
<!--required membuat sebuah data wajib untuk diisi-->
  <form method="POST" action="latihan02target.php">
   <!--Kota
    <input type="text" name="KOTA"required></input>
    Number
    <input type="number" name="NOMOR"></input>
    Tanggal
    <input type="date" name="TANGGAL LAHIR"></input>-->
    Nama
    <input type="text" name="NAMA"required></input><br>
    NIM
    <input type="text" name="NIM"required></input><br>
    Tanggal Lahir
    <input type="date" name="TGLLAHIR"required></input><br>
    <button>Kirim Data</button>

  </form>


</body>
</html>