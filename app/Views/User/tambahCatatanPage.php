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
                        <label for="idlayanan" class="col-sm-2 col-form-label">Jenis Layanan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="idlayanan" required>
                                <option value="">Jenis Layanan</option>
                                <option value="1">Pospay</option>
                                <option value="2">Rspos</option>
                                <option value="3">Fdpos</option>
                                <option value="4">Ipos</option>
                                <option value="5">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="permasalahan" class="col-sm-2 col-form-label">Permasalahan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="permasalahan" placeholder="Permasalahan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dampak" class="col-sm-2 col-form-label">Dampak Akibat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dampak" placeholder="Dampak Akibat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="idlayanan" class="col-sm-2 col-form-label">Kategori Gangguan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="idlayanan" required>
                                <option value="">Kategori Gangguan</option>
                                <option value="1">UPT</option>
                                <option value="2">Nasional</option>
                                <option value="3">Mitra</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="idgangguan" class="col-sm-2 col-form-label">Jenis Gangguan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="idgangguan" required>
                                <option value="">Jenis Gangguan</option>
                                <option value="1">Aplikasi</option>
                                <option value="2">Jaringan</option>
                                <option value="3">SOP</option>
                                <option value="4">Server</option>
                                <option value="5">Database</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tindak_lanjut" class="col-sm-2 col-form-label">Tindak Lanjut</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tindak_lanjut" placeholder="Tindak Lanjut">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_selesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tgl_selesai" placeholder="Tanggal Selesai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="output_hasil" class="col-sm-2 col-form-label">Output Hasil</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="output_hasil" placeholder="Output Hasil">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="iduser" class="col-sm-2 col-form-label">Layanan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="iduser" required>
                                <option value="">Ditambahkan Oleh</option>
                                <option value="1">Sekar</option>
                                <option value="2">Arum Chrysanti</option>
                                <option value="5">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
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