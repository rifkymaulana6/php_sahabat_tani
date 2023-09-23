<?php

session_start();
include 'function.php';
$id_barang = $_GET['idbarang'];
$query = mysqli_query($koneksi, "SELECT * FROM data_barang WHERE id_barang = '$id_barang'");
$data = mysqli_fetch_array($query);
$q = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user = '$data[id_user]'");
$d = mysqli_fetch_array($q);

$simpan = mysqli_query($koneksi, "INSERT INTO transaksi (id_penjual, id_pembeli, id_barang) VALUES ('$data[id_user]', $_SESSION[id_user], $id_barang)");
// $url = "https://wa.me/$d[telepon]";
// header('location:$url');
echo "<meta content='0; url=https://wa.me/$d[telepon]' http-equiv='refresh'>";
