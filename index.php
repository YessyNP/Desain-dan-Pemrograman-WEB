<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Daftar Mahasiswa </h1>
    
    <a href="tambah.php">Tambah Data Mahasiswa</a>
     
    <table border ="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Gambar</th>
        <th>Aksi</th>
</tr>
<?php $i=1 ?>
<?php foreach ($mahasiswa as $row):?>  
<tr>
    <td><?= $i;?></td>
    <td><?= $row["Nama"];?></td>
    <td><?= $row["Nim"];?></td>
    <td><?= $row["Email"];?></td>
    <td><?= $row["Jurusan"];?></td>
    <td>
    <img src="img/<?php echo $row["Gambar"]; ?>" alt="" heigth="200" width="100" srcset=""></td>
    <td>
        <a href="">Edit</a>
        <a href="hapus.php?id=<?php echo $row ["id"]; ?>">Hapus </a>
</td>
</tr>
<?php $i++ ?>
<?php endforeach;?>
    <td>1</td>
    <td>Dina</td>
    <td>123456789</td>
    <td>dina@gmail.com</td>
    <td>Informatika</td>
    <td>
    <img src="img/dina.jpg" alt="" heigth="200" width="100" srcset=""></td>
    <td>
        <a href="">Edit</a>
        <a href="">Hapus</a>
</td>
</tr>
<tr>
    <td>2</td>
    <td>Dino</td>
    <td>123456789</td>
    <td>dino@gmail.com</td>
    <td>Informatika</td>
    <td>
    <img src="img/dino.png" alt="" heigth="200" width="100" srcset=""></td>
    <td>
        <a href="">Edit</a>
        <a href="">Hapus</a>
        </td>
</tr>
<tr>
    <td>3</td>
    <td>Yessy</td>
    <td>123456789</td>
    <td>yessynindi@gmail.com</td>
    <td>Informatika</td>
    <td>
    <img src="img/yessy.png" alt="" heigth="200" width="100" srcset=""></td>
    <td>
        <a href="">Edit</a>
        <a href="">Hapus</a>
        </td>
</tr>
</tr>
<tr>
    <td>4</td>
    <td>Yessy</td>
    <td>123456789</td>
    <td>yessynindi@gmail.com</td>
    <td>Informatika</td>
    <td>
    <img src="img/yessy.png" alt="" heigth="200" width="100" srcset=""></td>
    <td>
        <a href="">Edit</a>
        <a href="">Hapus</a>
        </td>
        <tr>
    <td>5</td>
    <td>Yessy</td>
    <td>123456789</td>
    <td> </td>
    <td></td>
    <td>
    <img </td>
    <td>
        <a href="">Edit</a>
        <a href="">Hapus</a>
        </td>
    <td>
    <a href="edit.php?id=<?php echo $row["id"];?>">Edit</a>
    <a href = "hapus.php?id=<?php echo $row["id"];?>"oneclick="return confirm('Apakah data ini akan dihapus')">Hapus</a>

</tr>
</tr>
</tr>
</body>
</html>