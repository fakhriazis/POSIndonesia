<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
  <div class="container">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li class="active"><a href="<?=base_url('/dashboard'); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>    
  </ol>
</section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>buat foreach</h3>
              <p>Admin</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?=base_url("/admin");?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>buat foreach</h3>
              <p>Layanan</p>
            </div>
            <div class="icon">
              <i class=""></i>
            </div>
            <a href="<?=base_url("/layanan");?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>buat foreach</h3>

              <p>Document Control</p>
            </div>
            <div class="icon">
              <i class=""></i>
            </div>
            <a href="<?=base_url("/document");?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <!-- /.nav-tabs-custom -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  </div>
  </div>
  <?= $this->endSection(); ?>
