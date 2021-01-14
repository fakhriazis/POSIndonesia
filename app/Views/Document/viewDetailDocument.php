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
                            <li class="breadcrumb-item"><a href="<?= base_url('/document'); ?>">Document</a></li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="card">
            <div class="card-header">
                <h3><?= $aplikasi; ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Author</th>
                            <th>Perencanaan</th>
                            <th>Pengembangan</th>
                            <th>Pengujian</th>
                            <th>Plotting</th>
                            <th>Implementasi</th>
                            <th>Closing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($listDetailDocument)) : ?>
                            <tr>
                                <?php $no = 1;
                                foreach ($listDetailDocument as $row) : ?>
                                    <td><?php echo $no++ ?></td>
                                    <td><?= $row->author ?></td>
                                    <td><?= $row->perencanaan ?></td>
                                    <td><?= $row->pengembangan ?></td>
                                    <td><?= $row->pengujian ?></td>
                                    <td><?= $row->plotting ?></td>
                                    <td><?= $row->implementasi ?></td>
                                    <td><?= $row->closing ?></td>
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