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
    <section class="content-header">
        <h1>
            Tambah Admin
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('/dashboard'); ?>"><i class="fa fa-person"></i>Dashboard</a></li>
            <li class="active">Tambah Admin</li>
        </ol>
    </section>
    <form class="" action="<?= base_url('/admin/tambah/aksi'); ?>" method="post">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="idlayanan">Jenis Layanan</label>
            <select class="form-control" name="idlayanan" required>
                <option value="">Pilih Layanan</option>
                <option value="1">Pospay</option>
                <option value="2">Rspos</option>
                <option value="3">Fdpos</option>
                <option value="4">Ipos</option>
                <option value="5">Admin</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tanggal Kejadian</label>
            <input type="text" class="form-control" name="nama_user" value="" required>
        </div>
        <div class="form-group">
            <label>Permasalahan</label>
            <input type="text" class="form-control" name="nama_user" value="" required>
        </div>
        <div class="form-group">
            <label>Dampak Akibat</label>
            <input type="text" class="form-control" name="nama_user" value="" required>
        </div>
        <div class="form-group">
            <label for="idlayanan">Kategori Gangguan</label>
            <select class="form-control" name="idlayanan" required>
                <option value="">Pilih Layanan</option>
                <option value="1">Pospay</option>
                <option value="2">Rspos</option>
                <option value="3">Fdpos</option>
                <option value="4">Ipos</option>
                <option value="5">Admin</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tindak Lanjut</label>
            <input type="email" class="form-control" name="email" value="" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Selesai</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Output hasil</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="" required>
        </div>
        <div class="form-group">
            <label for="idlayanan">Ditambahkan Oleh</label>
            <select class="form-control" name="idlayanan" required>
                <option value="">Pilih Layanan</option>
                <option value="1">Pospay</option>
                <option value="2">Rspos</option>
                <option value="3">Fdpos</option>
                <option value="4">Ipos</option>
                <option value="5">Admin</option>
            </select>
        </div>
        <div class="form-group">
            <div class="float-right">
                <a class="btn btn-secondary" href="/csadmin" role="button">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>