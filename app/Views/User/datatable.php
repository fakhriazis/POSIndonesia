<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel Catatan</h3>
      </div>
      <!-- /.card-header -->
      <div class="tabble-title">
        <div class="row">
          <div class="col-sm-6">
            <div class="my-3">
              <a class="btn btn-success" href="<?= base_url('/user/catatan/tambah') ?>" role="button">Tambah Catatan</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Judul</th>
              <th>Catatan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- <?= $i = 1; ?> -->
            <?php foreach ($catatan as $row) : ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $row->judul ?></td>
                <td><?= $row->catatan ?></td>
                <td>Aksi</td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<?= $this->endSection(); ?>