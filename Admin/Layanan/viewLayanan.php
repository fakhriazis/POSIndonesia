<?= $this->extend('admin/layout/template'); ?>

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
                               <a class="btn btn-primary" href="<?= base_url('admin/csadmin/deletelayanan/'.$row->idlayanan)?>" role="button">Delete</a>
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
                  <h3 class="card-title">Tambah Layanan</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?=base_url('Admin/CSAdmin/TambahLayanan');?>" method="POST">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Layanan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="namalayanan" placeholder="Nama Layanan" name="namalayanan">
                      </div>
                    </div>                                        
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                    <!-- <a href=# class="btn btn-default float-right">Cancel</a> -->
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
              <!-- /.card -->
          </div>
</div>

<?= $this->endSection(); ?>
