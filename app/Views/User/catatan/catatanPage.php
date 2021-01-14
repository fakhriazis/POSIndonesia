<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



<div class="content-wrapper">
    <section class="container">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tabel Catatan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </section>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="my-3">
                    <a class="btn btn-success" href="<?= base_url('/user/catatan/tambah') ?>" role="button">Tambah Catatan</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="tabble-title">
                <div class="row">
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Catatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?= $i = 1; ?> -->
                        <?php foreach ($catatan as $row) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row->judul ?></td>
                                <td><?= $row->catatan ?></td>
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