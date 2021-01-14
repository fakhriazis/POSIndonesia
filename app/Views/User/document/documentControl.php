<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Document Control</h3>
            </div>
            <!-- /.card-header -->
            <div class="tabble-title">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="my-3">
                            <a class="btn btn-success" href="<?= base_url('user/document/tambah') ?>" role="button">Tambah Dokumen</a>
                        </div>
                    </div>
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