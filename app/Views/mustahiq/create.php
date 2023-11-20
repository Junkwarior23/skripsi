<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Input Data Mustahiq</h1>

            <form action="/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="surveyor" class="col-sm-2 col-form-label">Surveyor</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="surveyor" name="surveyor" value="<?= old('surveyor'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="area" class="col-sm-2 col-form-label">Area</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="area" name="area" value="<?= old('area'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="zona" class="col-sm-2 col-form-label">Zona</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="zona" name="zona" value="<?= old('zona'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kriteria" class="col-sm-2 col-form-label">Kriteria</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kriteria" name="kriteria" value="<?= old('kriteria'); ?>">
                    </div>
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>