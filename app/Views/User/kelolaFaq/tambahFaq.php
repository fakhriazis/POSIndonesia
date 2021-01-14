<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah FAQ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah FAQ</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <form action="<?= base_url('User/Admin/tambahFAQ') ?>" method="POST">
                            <div class="mb-3">
                                <label for="pertanyaan">Pertanyaan</label>
                                <input name="pertanyaan" type="textarea" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="jawaban">Jawaban</label>
                                <input name="jawaban" type="textarea" class="textarea">
                                <!-- <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea> -->
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info float-right">Submit</button>
                                <button href="<?= base_url('/user/kelolaFaq') ?>" class="btn btn-default float-right">Cancel</button>
                            </div>
                            <!-- /.card-footer -->
                            <!-- <p class="text-sm mb-0">
                            Editor <a href="https://github.com/summernote/summernote">Documentation and license
                                information.</a>
                        </p> -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>