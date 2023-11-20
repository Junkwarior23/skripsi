<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Daftar Mustahiq</h1>
            <a href="/create" class="btn btn-primary">Tambah data</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Surveyor</th>
                        <th scope="col">Area</th>
                        <th scope="col">Zona</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mustahiq as $m) : ?>
                        <tr>
                            <th scope="row"><?= $m['id']; ?></th>
                            <td><?= $m['nama']; ?></td>
                            <td><?= $m['alamat']; ?></td>
                            <td><?= $m['surveyor']; ?></td>
                            <td><?= $m['area']; ?></td>
                            <td><?= $m['zona']; ?></td>
                            <td><?= $m['kriteria']; ?></td>
                            <td>
                                <a href="/<?= $m['id']; ?>" class="btn btn-dark"> Detail</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>