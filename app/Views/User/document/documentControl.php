<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <section class="container">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Document Control</h1>
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
                    <a class="btn btn-success" href="<?= base_url('/user/document/tambah') ?>" role="button">Tambah Document</a>
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
                            <th>No</th>
                            <th>Nama Aplikasi</th>
                            <th>Layanan</th>
                            <th>Penanggung Jawab</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <?php if (!empty($listDocument)) : ?>
                        <tr>
                            <?php $no = 1;
                            foreach ($listDocument as $row) : ?>
                                <td><?php echo $no++ ?></td>
                                <td><?= $row->namaaplikasi ?></td>
                                <td><?= $row->idlayanan ?></td>
                                <td><?= $row->penanggungjawab ?></td>
                                <td><?= $row->tanggalmulai ?></td>
                                <td><?= $row->tanggalselesai ?></td>
                                <td>
                                    <a class="btn btn-primary" href="<?= '/document/detail/' . $row->iddocument ?>" role="button">Detail</a>
                                </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <!-- <div class="text-center">
                        <div class="alert alert-danger" role="alert">
                          <strong>No Data</strong>
                        </div>
                      </div> -->
                <?php endif; ?>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<?= $this->endSection(); ?>