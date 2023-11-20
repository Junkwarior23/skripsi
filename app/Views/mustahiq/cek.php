<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container ">
    <div class="row">
        <div class="col">
            <h1>Daftar Mustahiq</h1>
            <div class="table-responsive">
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Surveyor</th>
                            <th scope="col">Zona</th>
                            <th scope="col">Kriteria</th>
                            <th scope="col">Jumlah Warga</th>
                            <th scope="col">Total Nilai</th>
                            <!-- <th scope="col">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php $tot = 0 ?>
                        <?php $jum = 0 ?>
                        <?php $brs = 1000 ?>
                        <?php foreach ($zonanol as $m) : ?>
                            <tr>
                                <th><?= $i; ?></th>
                                <td><?= $m['surveyor']; ?></td>
                                <td><?= $m['zona']; ?></td>
                                <td><?= $m['kriteria']; ?></td>
                                <td><?= $m['count']; ?></td>
                                <td><?= $m['nilai']; ?></td>
                                <?php $tot = $tot + $m['count'] ?>
                                <?php $jum = $jum + $m['nilai'] ?>
                                <?php $brs = $brs - $m['count'] ?>
                                <?php $i++ ?>
                            </tr>
                        <?php endforeach ?>
                        <?php foreach ($fakir as $m) : ?>
                            <tr>
                                <th><?= $i; ?></th>
                                <td><?= $m['surveyor']; ?></td>
                                <td><?= $m['zona']; ?></td>
                                <td><?= $m['kriteria']; ?></td>
                                <td><?= $m['count']; ?></td>
                                <td><?= $m['nilai']; ?></td>
                                <?php $tot = $tot + $m['count'] ?>
                                <?php $jum = $jum + $m['nilai'] ?>
                                <?php $brs = $brs - $m['count'] ?>
                                <?php $i++ ?>
                            </tr>
                        <?php endforeach ?>
                        <?php foreach ($miskin as $m) : ?>
                            <?php if (($brs - $m['count']) >= 0) : ?>
                                <tr>
                                    <th><?= $i; ?></th>
                                    <td><?= $m['surveyor']; ?></td>
                                    <td><?= $m['zona']; ?></td>
                                    <td><?= $m['kriteria']; ?></td>
                                    <td><?= $m['count']; ?></td>
                                    <td><?= $m['nilai']; ?></td>
                                    <?php $tot = $tot + $m['count'] ?>
                                    <?php $jum = $jum + $m['nilai'] ?>
                                    <?php $i++ ?>
                                    <?php $brs = $brs - $m['count'] ?>
                                </tr>
                            <?php else : ?>
                                <tr>
                                    <td></td>
                                    <!-- <th><del><?= $i; ?></del></th> -->
                                    <td><del><?= $m['surveyor']; ?></del></td>
                                    <td><del><?= $m['zona']; ?></del></td>
                                    <td><del><?= $m['kriteria']; ?></del></td>
                                    <td><del><?= $m['count']; ?></del></td>
                                    <td><del><?= $m['nilai']; ?></del></td>
                                </tr>
                            <?php endif ?>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <td>Sisa Beras</td>
                        <td><?= $brs; ?></td>
                        <td></td>
                        <td>Total</td>
                        <td><?= $tot; ?></td>
                        <td><?= $jum; ?></td>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>