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
                <h3 class="card-title">Form Input Catatan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('/user/catatan/tambah/aksi'); ?>">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="permasalahan" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul" placeholder="Judul">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi">Catatan</label>
                        <input name="deskripsi" type="textarea" class="textarea">
                        <!-- <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea> -->
                    </div>
                    <div class="form-group row">
                        <label for="output_hasil" class="col-sm-2 col-form-label">Publish</label>
                        <div class="form-group clearfix">
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r3" checked id="radioSuccess1">
                                <label for="radioSuccess1">
                                    Ya
                                </label>
                            </div>
                            <div class="icheck-danger d-inline">
                                <input type="radio" name="r3" id="radioSuccess2">
                                <label for="radioSuccess2">
                                    Tidak
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Submit</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>


    <?= $this->endSection(); ?>