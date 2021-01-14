<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <section class="container">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Info Gangguan</h1>
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
                    <a class="btn btn-success" href="<?= base_url('/user/gangguan/info_gangguan/tambah') ?>" role="button">Tambah Info Gangguan</a>
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
                            <th>Nama Mitra</th>
                            <th>Respon Code</th>
                            <th>Status Gangguan</th>
                            <th>Estimasi</th>
                            <th>Status</th>
                            <th>Tanggal Gangguan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?= $i = 1; ?> -->
                        <?php foreach ($gangguan as $row) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row->idmitra ?></td>
                                <td><?= $row->idresponcode ?></td>
                                <td><?= $row->statusgangguan ?></td>

                                <td><?= $row->estimasi ?></td>
                                <td><?= $row->statusinfo ?></td>
                                <td><?= $row->tgl_gangguan ?></td>
                                <td>
                                    <a href="?modul=info&act=editinfo&id=32" title="edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="script/info/delete.php?id=32" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" title="hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
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