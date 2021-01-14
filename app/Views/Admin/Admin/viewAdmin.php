<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
  <div class="container">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card">
      <div class="card-header">
        <div class="my-3">
          <a class="btn btn-success" href="<?= base_url('/admin/tambah') ?>" role="button">Tambah Admin</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>User ID</th>
              <th>Nama User</th>
              <th>Email</th>
              <th>Hak Akses</th>
              <th>Layanan</th>
              <th>Kelola</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($listAdmin)) : ?>
              <tr>
                <?php $no = 1;
                foreach ($listAdmin as $row) : ?>
                  <td><?php echo $no++ ?></td>
                  <td><?= $row->iduser ?></td>
                  <td><?= $row->nama_user ?></td>
                  <td><?= $row->email ?></td>
                  <td><?= $row->idakses ?></td>
                  <td><?= $row->idlayanan ?></td>
                  <td>
                    <a class="btn btn-primary" href="<?= base_url('admin/csadmin/viewEditAdmin/' . $row->iduser) ?>" role="button">Edit</a>
                    <a class="btn btn-primary" href="<?= base_url('admin/csadmin/deleteAdmin/' . $row->iduser) ?>" role="button">Delete</a>
                  </td>
              </tr>
            <?php endforeach; ?>
          <?php else : ?>
          <?php endif; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<?= $this->endSection(); ?>