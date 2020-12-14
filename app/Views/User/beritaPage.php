<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Berita</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Tanggal Posting</th>
                            <th>Diposting oleh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?= $i = 1; ?> -->
                        <?php foreach ($berita as $row) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row->judul ?></td>
                                <td><?= $row->tgl_posting ?></td>
                                <td><?= $row->iduser ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<?= $this->endSection(); ?>