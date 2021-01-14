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
                <h3 class="card-title">Form Input Gangguan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('/user/catatan/tambah/aksi'); ?>">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="idlayanan" class="col-sm-2 col-form-label"> Nama Mitra/Produk</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="idlayanan" required>
                                <option value="">Pilih Mitra/Produk</option>
                                <option value="1">Pospay</option>
                                <option value="2">Rspos</option>
                                <option value="3">Fdpos</option>
                                <option value="4">Ipos</option>
                                <option value="5">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="idlayanan" class="col-sm-2 col-form-label">Respon Code</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="idlayanan" required>
                                <option value="">Pilih Respon Code</option>
                                <option value="1">UPT</option>
                                <option value="2">Nasional</option>
                                <option value="3">Mitra</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tindak_lanjut" class="col-sm-2 col-form-label">Status Gangguan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tindak_lanjut" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_selesai" class="col-sm-2 col-form-label">Estimasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tgl_selesai" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="output_hasil" class="col-sm-2 col-form-label">Status Info</label>
                        <div class="form-group clearfix">
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r3" checked id="radioSuccess1">
                                <label for="radioSuccess1">
                                    Open
                                </label>
                            </div>
                            <div class="icheck-danger d-inline">
                                <input type="radio" name="r3" id="radioSuccess2">
                                <label for="radioSuccess2">
                                    Close
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
                    <button type="submit" class="btn btn-info float-right">Simpan</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>
    <?= $this->endSection(); ?>