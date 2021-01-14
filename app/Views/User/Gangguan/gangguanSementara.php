<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
?= $this->section('content'); ?>
<!-- Horizontal Form -->
<div class="content-wrapper">
    <div class="container">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Tambah Info Gangguan Sementara </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Gangguan Sementara</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Simpan</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
            </form>
        </div>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Info Gangguan Sementara</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?= $i = 1; ?> -->
                        <?php foreach ($gsModel as $row) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row->statusgangguan_sementara ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card-footer -->
    </div>
</div>
<?= $this->endSection(); ?>