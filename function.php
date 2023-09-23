<?php

// koneksi
$koneksi = mysqli_connect('localhost', 'root', '', 'sahabat_tani');

//daftar
if (isset($_POST['register'])) {

    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $epass = password_hash($password, PASSWORD_DEFAULT);

    $insert = mysqli_query($koneksi, "INSERT INTO tb_user (nama,telepon,alamat,email,password) values ('$nama','$telepon','$alamat','$email','$epass')");

    if ($insert) {
        //berhasil
        header('location:index.php');
    } else {
        //gagal
        echo '
        <script>
        alert("Registrasti gagal");
        window.location.href="register.php";
        </script>
        ';
    }
}

//login
if (isset($_POST['login'])) {
    ob_start();
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $cekdb = mysqli_query($koneksi, "SELECT * FROM tb_user where email='$email'");
    $hitung = mysqli_num_rows($cekdb);
    $data = mysqli_fetch_object($cekdb);
    $passwordsekarang = $data->password;

    if ($hitung > 0) {
        //ada
        if (password_verify($password, $passwordsekarang)) {
            //pw benar
            $d = mysqli_fetch_array($cekdb);
            $_SESSION['status_login'] = true;
            $_SESSION['user'] = $data;
            $_SESSION['id_user'] = $data->id_user;
            header('location:home.php');
        } else {
            //pw salah
            echo '
            <script>
            alert("Passwor Salah");
            window.location.href="index.php";
            </script>
            ';
        }
    } else {
        //gagal
        echo '
        <script>
        alert("Login gagal");
        window.location.href="index.php";
        </script>
        ';
    }
}

//jual barang
if (isset($_POST['submit'])) {
    $id_user = $_POST['id_user'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];
    $tempname = $_FILES['gambar']['tmp_name'];
    $folder = "./assets/images/" . $gambar;

    $insert = mysqli_query($koneksi, "INSERT INTO data_barang (id_user, nama_barang, harga_barang, kategori, deskripsi, gambar) VALUES ('$id_user','$nama_barang','$harga_barang','$kategori','$deskripsi','$gambar')");

    if (move_uploaded_file($tempname, $folder)) {
        echo '
        <script>
        alert("Data berhasil ditambahkan");
        window.location.href="toko.php";
        </script>
        ';
    } else {
        echo '
        <script>
        alert("Penambahan data gagal");
        window.location.href="tambah.php";
        </script>
        ';
    }
}
