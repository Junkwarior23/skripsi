<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <h2>Detail Mustahiq</h2>
        <h2> </h2>
        <dt class="col-sm-3">Nama :</dt>
        <dd class="col-sm-9"><?= $mustahiq['nama']; ?></dd>
        <dt class="col-sm-3">Alamat :</dt>
        <dd class="col-sm-9"><?= $mustahiq['alamat']; ?></dd>
        <dt class="col-sm-3">Surveyor :</dt>
        <dd class="col-sm-9"><?= $mustahiq['surveyor']; ?></dd>
        <dt class="col-sm-3">Area :</dt>
        <dd class="col-sm-9"><?= $mustahiq['area']; ?></dd>
        <dt class="col-sm-3">Zona :</dt>
        <dd class="col-sm-9"><?= $mustahiq['zona']; ?></dd>
        <dt class="col-sm-3">Kriteria :</dt>
        <dd class="col-sm-9"><?= $mustahiq['kriteria']; ?></dd>
    </div>
    <br>
    <a href="/" class="btn btn-success"> Back </a>
</div>
<?= $this->endsection(); ?>