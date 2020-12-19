<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Kelola Faq</h3>
            </div>
            <!-- /.card-header -->
            <div class="tabble-title">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="my-3">
                            <a class="btn btn-success" href="<?= base_url('/user/kelolaFaq/tambah') ?>" role="button">Tambah Faq</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
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
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<?= $this->endSection(); ?>