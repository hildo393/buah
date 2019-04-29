<?php $this->load->view('meta') ?>
  <div class="wrapper">
    <?php $this->load->view('navbar') ?>
    <?php $this->load->view('sidebar') ?>
    <?php $this->load->helper('html') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!DOCTYPE html>
    <html>
    <head>
      <title></title>
    </head>
    <body>
    <center><h1>Code Version</h1> </center>
    2.0.0<br>
    1. aplikasi reseller buah <br>
    <br>
    2.0.1 <br>
    1. mengalami eror pada basis data. kesalahan pada nama field yang tidak sama <br>
    2. <br>
<br>
    2.1.2 <br>
    1. Menambahkan fiture buku panduan <br>
    2. Mengalami error pada saat <br>
    <br>
    2.2.2 <br>
    1. Menambahkan fitur Code Version
    <br>
    <br>
    2.0.4 <br>
    2.0.5 <br>
    2.0.6 <br>
    2.0.7 <br>
    2.0.8 <br>
    <?php
    echo img('buah/login.jpg');
    ?>

    </body>
    </html>
      <!-- Main content -->
      <section class="content">
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php $this->load->view('footer') ?>
  </div><!-- ./wrapper -->
  <?php $this->load->view('js') ?>
  <!-- DATA TABLES-->
  <link href="<?php echo base_url('assets/plugins/') ?>datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url('assets/plugins/') ?>datatables/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/plugins/') ?>datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(document).ready(function () {
    $("#datatable").dataTable();
  });
  </script>
</body>
</html>
