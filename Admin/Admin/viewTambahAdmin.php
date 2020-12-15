<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
  <!-- Horizontal Form -->
  <div class="content-wrapper">
  <div class="container">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Tambah Admin</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" action="<?=base_url('/admin/csadmin/tambahadmin');?>" method="post">
        <div class="card-body">
          <?= csrf_field(); ?>
          <div class="form-group row">
            <label for="InputName" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input name="nama_user" type="text" class="form-control" id="InputName" placeholder="Nama" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
            </div>
          </div>
          <div class="form-group row">
          <label for="idlayanan" class = "col-sm-2 col-form-label">Layanan</label>
          <div class="col-sm-10">
            <select class="form-control" name="idlayanan" required>
              <option value="">Pilih Layanan</option>
              <option value="1">Pospay</option>
              <option value="2">Rspos</option>
              <option value="3">Fdpos</option>
              <option value="4">Ipos</option>
              <option value="5">Admin</option>
            </select>
          </div>
        </div>
      <div class="form-group row">
         <label for="idAkses" class = "col-sm-2 col-form-label">Hak Akses</label>
         <div class="form-group">
           <div class="form-check-inline">
             <label class="form-check-label">
               <input type="radio" name="idakses" class="form-check-input" value="1" required>Admin
             </label>
           </div>
           <div class="form-check-inline">
             <label class="form-check-label">
               <input type="radio" name="idakses" class="form-check-input" value="2" required>User
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
          <button type="submit" class="btn btn-primary float-right">Submit</button>
          <a href="<?=base_url("/admin");?>" class="btn btn-default float-right">Cancel</a>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
