<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Layanan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Layanan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <div class="card">
                      <div class="card-header">
                        <div class="my-3">
                          <a class="btn btn-success" href="<?= base_url('/admin/tambah')?>" role="button">Tambah Admin</a>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Id Layanan</th>
                              <th>Nama Layanan</th>
                              <th>Kelola</th>
                            </tr>
                          </thead>
                          <tbody>
                           <?php if(!empty($listLayanan)):?>
                           <tr>
                             <?php $no = 1;
                             foreach ($listLayanan as $row):?>
                             <td><?php echo $no++ ?></td>
                             <td><?= $row->idlayanan ?></td>
                             <td><?= $row->namalayanan ?></td>
                             <td>
                               <button class="btn btn-primary" href="<?= base_url('layanan/edit/'.$row->idlayanan)?>" role="button">Edit</button>
                               <a class="btn btn-primary" href="<?= base_url('layanan/delete/'.$row->idlayanan)?>" role="button">Delete</a>
                             </td>
                           </tr>
                             <?php endforeach; ?>
                           <?php else: ?>
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
          <!--/.col (left) -->
          <div class="col-md-6">
            <!-- Horizontal Form -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Horizontal Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck2">
                          <label class="form-check-label" for="exampleCheck2">Remember me</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Sign in</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
              <!-- /.card -->
          </div>
</div>

<?= $this->endSection(); ?>
