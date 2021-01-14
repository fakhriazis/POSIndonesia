<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
  <div class="container">
    <!-- <h1>
            Data Admin
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?= base_url('/dashboard'); ?>"><i class="fa fa-person"></i>Dashboard</a></li>
            <li class="active">Admin</li>
          </ol>
           -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Document Control</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Document</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card">
      <div class="card-header">
        <div class="my-3">
          <a class="btn btn-success" href="<?= base_url('/document/tambah'); ?>" role="button">Tambah Document</a>
        </div>
      </div>
      <!-- /.card-header -->
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
          <tbody>
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
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<?= $this->endSection(); ?>