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
    <center><h1>PANDUAN APLIKASI RESELLER BUAH</h1> </center>
    <h2>Struktur Menu</h2> <br>
    <?php
    echo img('buah/login.jpg');
    ?>
    1. Pada bagian dashboard terdapat tampilan jumlah produk yang sudah tersedia dan jumlah penjualan. <br>
    Fitur yang disediakan : blog, supplier, produk, user, slider, admin, logout, dan buku panduan. <br>
    2. Pada bagian blog anda dapat melihat data blog dan menambahkan data blog <br>
    3. Pada bagian supplier anda dapat melihat data supplier dan menambahkan data supplier <br>
    4. Pada baigian produk anda dapat melihat data produk dan menambahkan data produk <br>
    5. Pada bagian user anda dapat melihat data user yaitu reseller dan pembeli <br>
    6. Pada bagian slider anda dapat melihat data slider dan menambahkan data slider <br>
    7. Pada bagian logout dipergunakan untuk keluar dari dashboard <br>
    8.Pada bagian buku panduan berfungsi untuk menampilkan panduan menggunakan aplikasi <br>
    <br>
    <h2>Cara Penggunaan</h2> <br>
    1. Melakukan login dengan memasukkan username dan password <br>
    2. Melakukan penambahan data produk dengan cara memilih fitur produk dan memilih tambah data kemudian memasukkan data produk. <br>
    3. Untuk menambahkan data blog dapat memilih fitur blok kemudian pilih tambah blog dan masukkan data kesemua kolom yang di sediakan. Data yang telah di tambahkan dapat dilihat pada fitur data blog

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
