<?= $this->extend('user/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="container">
        <h1>Halaman Kelola Faq</h1>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nooooo</th>
                <th scope="col">Pertanyaan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- <?= $i = 1; ?> -->
            <?php foreach ($faq as $row) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->pertanyaan ?></td>
                    <td>Aksi</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>