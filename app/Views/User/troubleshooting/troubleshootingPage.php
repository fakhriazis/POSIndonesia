<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Horizontal Form -->
<div class="content-wrapper">
    <div class="container">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Form Kelola Troubleshooting</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Respon Code</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="idlayanan" required>
                                <option value="">Pilih Respon Code</option>
                                <option value="1">Pospay</option>
                                <option value="2">Rspos</option>
                                <option value="3">Fdpos</option>
                                <option value="4">Ipos</option>
                                <option value="5">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Mitra/Produk</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="idlayanan" required>
                                <option value="">Pilih Mitra/Produk</option>
                                <option value="1">Pospay</option>
                                <option value="2">Rspos</option>
                                <option value="3">Fdpos</option>
                                <option value="4">Ipos</option>
                                <option value="5">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jawaban">Solusi UPT</label>
                        <input name="jawaban" type="textarea" class="textarea">
                        <!-- <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea> -->
                    </div>
                    <div class="mb-3">
                        <label for="jawaban">Solusi HOS</label>
                        <input name="jawaban" type="textarea" class="textarea">
                        <!-- <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea> -->
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Sign in</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>