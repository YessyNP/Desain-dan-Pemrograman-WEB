<?php
require'functions.php';

// menggunakan method get untuk mengambil id yang telah terseleksi oleh user dan dimasukkan
// kedalam variabel baru yaitu $id
$id=$_GET["id"];

if( hapus ($id)>0){
    echo "
    <script>
        alert('data berhasil dhapus');
        document.location.href='index.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('data berhasil dhapus');
        document.location.href='index.php';
    </script>";
    echo "<br>";
    echo mysqli_error($conn);
}
?>