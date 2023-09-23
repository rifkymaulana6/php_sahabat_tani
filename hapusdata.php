<?php

include 'function.php';
$id = $_GET['idbarang'];
$hapus = mysqli_query($koneksi, "DELETE FROM data_barang WHERE id_barang='$id'");
echo '
        <script>
        alert("Data berhasil dihapus");
        window.location.href="toko.php";
        </script>
        ';
