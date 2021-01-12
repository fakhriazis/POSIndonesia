<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
    <!-- Horizontal Form -->

    <div class="container">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Form Kelola Respon Code</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('/user/catatan/tambah/aksi'); ?>">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="permasalahan" class="col-sm-2 col-form-label">Respon Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="permasalahan" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dampak" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dampak" placeholder="">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>


    <?= $this->endSection(); ?>