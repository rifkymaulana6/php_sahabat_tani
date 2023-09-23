<?php require 'function.php'; ?>

<?php include 'layout/template.php'; ?>

<?php include 'layout/navbar.php'; ?>

<div class="container">

    <div class="row mt-3">
        <div class="col">
            <h1>Jual Barang</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="kategori" class="form-label">ID Anda</label>
                    <input class="form-control" aria-label="Default select example" name="id_user" value="<?php echo $_SESSION['user']->id_user ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                </div>
                <div class="mb-3">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input type="number" class="form-control" id="harga_barang" name="harga_barang">
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori">
                        <option value="Pupuk">Pupuk</option>
                        <option value="Obat Tanaman">Obat Tanaman</option>
                        <option value="Hasil Tani">Hasil Tani</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Foto Barang</label>
                    <input type="file" name="gambar" class="form-control" id="gambar" value="Tambah Gambar">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            </form>
        </div>
    </div>

</div>