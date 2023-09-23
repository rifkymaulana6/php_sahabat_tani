<?php include 'layout/template.php'; ?>

<?php include 'layout/navbar.php'; ?>

<div class="container">

    <div class="row mt-3">
        <div class="col">
            <h1>Toko Saya</h1>
        </div>
        <div class="col">
            <a class="btn btn-primary ps-5 pe-5" href="tambah.php" role="button" style="margin-left: 350px;">Jual Barang</a>
        </div>
    </div>

    <div class="table mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Hapus Dari Toko</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'function.php';
                $query = mysqli_query($koneksi, 'SELECT * FROM data_barang');
                while ($data = mysqli_fetch_array($query)) {
                    if ($data['id_user'] == $_SESSION['id_user']) {
                ?>
                        <tr>
                            <td><?= $data['nama_barang']; ?></td>
                            <td>Rp. <?= $data['harga_barang']; ?></td>
                            <td><?= $data['kategori']; ?></td>
                            <td>
                                <a href="hapusdata.php?idbarang=<?= $data['id_barang'] ?>" class="btn btn-danger">hapus</a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>

        </table>
    </div>


</div>