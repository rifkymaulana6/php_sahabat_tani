<?php include 'layout/template.php'; ?>

<?php include 'layout/navbar.php'; ?>

<div class="container">

    <div class="row mt-3">
        <div class="col">
            <h1>Profil Saya</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <form>
                <fieldset disabled>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">ID</label>
                        <input type="text" id="disabledTextInput" class="form-control" value="<?= $_SESSION['id_user'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nama</label>
                        <input type="text" id="disabledTextInput" class="form-control" value="<?= $_SESSION['user']->nama ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Email</label>
                        <input type="text" id="disabledTextInput" class="form-control" value="<?= $_SESSION['user']->email ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Telepon (WhatsApp)</label>
                        <input type="text" id="disabledTextInput" class="form-control" value="<?= $_SESSION['user']->telepon ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Alamat</label>
                        <input type="text" id="disabledTextInput" class="form-control" value="<?= $_SESSION['user']->alamat ?>">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

</div>