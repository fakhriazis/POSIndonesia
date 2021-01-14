<?= $this->extend('admin/layout/template'); ?>
<!-- Select2 -->
<link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
<?= $this->section('content'); ?>
<!-- Horizontal Form -->
<div class="content-wrapper">
  <div class="container">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Tambah Document</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" action="<?= base_url('/admin/csadmin/tambahdocument'); ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">
          <?= csrf_field(); ?>
          <div class="form-group row">
            <label for="InputName" class="col-sm-2 col-form-label">Nama Aplikasi</label>
            <div class="col-sm-10">
              <input name="nama_aplikasi" type="text" class="form-control" id="InputName" placeholder="Nama Aplikasi" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="idlayanan" class="col-sm-2 col-form-label">Layanan</label>
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
            <label class="col-sm-2 col-form-label">Penanggung Jawab</label>
            <div class="col-sm-10">
              <input name="penanggungjawab" type="text" class="form-control" placeholder="Penanggung Jawab" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-font-label">Tanggal Mulai</label>
            <div class="col-sm-10">
              <input class="form-control" type="date" name="tanggalmulai" value="" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-font-label">Tanggal Selesai</label>
            <div class="col-sm-10">
              <input class="form-control" type="date" name="tanggalselesai" value="" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-font-label">File</label>
            <div class="col-sm-10">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Pilih Dokumen</label>
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
          <a href="<?= base_url("/admin"); ?>" class="btn btn-default float-right">Cancel</a>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Page script -->
<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
      'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
      'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
      format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function() {
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>