<?php $this->load->view('meta') ?>
  <div class="wrapper">
    <?php $this->load->view('navbar') ?>
    <?php $this->load->view('sidebar') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1><?php echo $title ?></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#"><?php echo $module ?></a></li>
					<li class="active"><?php echo $title ?></li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12">
						<div class="box box-primary">
              <div class="box-body">
								<?php echo validation_errors() ?>
								<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
								<?php echo form_open_multipart($action);?>
									<div class="form-group"><label>Nama Buah</label>
										<?php echo form_input($nama_buah, $produk->nama_buah);?>
									</div>
									<div class="form-group"><label>Deskripsi Buah</label>
										<?php echo form_textarea($deskripsi, $produk->deskripsi);?>
									</div>
                  <div class="row">
                    <div class="col-lg-4"><label>Harga Beli</label>
											<?php echo form_input($harga_beli, $produk->harga_beli);?><br>
										</div>
										<div class="col-lg-4"><label>Harga Jual</label>
											<?php echo form_input($harga_jual, $produk->harga_jual);?><br>
										</div>
										<div class="col-lg-4"><label>Harga Reseller</label>
											<?php echo form_input($harga_reseller, $produk->harga_reseller);?><br>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6"><label>Stok</label>
											<?php echo form_input($stok, $produk->stok);?><br>
										</div>
										<div class="col-lg-6"><label>Satuan</label>
											<?php echo form_input($satuan, $produk->satuan);?><br>
										</div>
									</div>
                  <div class="row">
                    <div class="col-lg-6" class="form-group">
                              <label>Tanggal Datang</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input name="tgl_datang" type="date" value="<?php echo $produk->tgl_datang  ?>" class="form-control pull-right">
                              </div>
                            </div>

                            <div class="col-lg-6" class="form-group">
                              <label>Tanggal Kadaluarsa</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input name="kadaluarsa" type="date"  value="<?php echo $produk->kadaluarsa ?>" class="form-control pull-right" >
                              </div>
                            </div>
                    
                  </div>
                  <div  class="row">
                    <div class="col-lg-6">
    									<div class="form-group"><label>Gambar Sebelumnya</label><br>
    										<img src="<?php echo base_url('assets/images/produk/'.$produk->foto.$produk->foto_type.'') ?>" width="200px"/>
    									</div>
    									<div class="form-group"><label>Gambar</label>
    										<input type="file" class="form-control" name="foto" id="foto" onchange="tampilkanPreview(this,'preview')"/>
    										<br><p><b>Preview Gambar</b><br>
    										<img id="preview" src="" alt="" width="350px"/>
    									</div>
                  </div>
                  <div class="col-lg-6" class="form-group"><label>Nama Supplier</label>
                    <?php echo form_dropdown('', $ambil_supplier, '', $supplier_id); ?>
                    </div>
                </div>
									<?php echo form_input($id_buah,$produk->id_buah);?>
									<button type="submit" name="submit" class="btn btn-success"><?php echo $button_submit ?></button>
									<button type="reset" name="reset" class="btn btn-danger"><?php echo $button_reset ?></button>
								<?php echo form_close(); ?>
							</div>
						</div>
          </div><!-- ./col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php $this->load->view('footer') ?>
  </div><!-- ./wrapper -->
  <?php $this->load->view('js') ?>
  <script src="<?php echo base_url('assets/plugins/jquery/angka.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/tinymce/js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
  tinymce.init({
    selector: "textarea",

    // ===========================================
    // INCLUDE THE PLUGIN
    // ===========================================

    plugins: [
      "advlist autolink lists link image charmap print preview anchor",
      "searchreplace visualblocks code fullscreen",
      "insertdatetime media table contextmenu paste jbimages"
    ],

    // ===========================================
    // PUT PLUGIN'S BUTTON on the toolbar
    // ===========================================

    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",

    // ===========================================
    // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
    // ===========================================

    relative_urls: false,
    remove_script_host : false,
    convert_urls : true,

  });

  function tampilkanPreview(foto,idpreview)
  { //membuat objek gambar
    var gb = foto.files;
    //loop untuk merender gambar
    for (var i = 0; i < gb.length; i++)
    { //bikin variabel
      var gbPreview = gb[i];
      var imageType = /image.*/;
      var preview=document.getElementById(idpreview);
      var reader = new FileReader();
      if (gbPreview.type.match(imageType))
      { //jika tipe data sesuai
        preview.file = gbPreview;
        reader.onload = (function(element)
        {
          return function(e)
          {
            element.src = e.target.result;
          };
        })(preview);
        //membaca data URL gambar
        reader.readAsDataURL(gbPreview);
      }
        else
        { //jika tipe data tidak sesuai
          alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
        }
    }
  }

  function tampilSubkat()
  {
    kat_id = document.getElementById("kat_id").value;
    $.ajax({
      url:"<?php echo base_url();?>admin/produk/pilih_subkategori/"+kat_id+"",
      success: function(response){
        $("#subkat_id").html(response);
      },
      dataType:"html"
    });
    return false;
  }

  function tampilSuperSubkat()
  {
    subkat_id = document.getElementById("subkat_id").value;
    $.ajax({
      url:"<?php echo base_url();?>admin/produk/pilih_supersubkategori/"+subkat_id+"",
      success: function(response){
        $("#supersubkat_id").html(response);
      },
      dataType:"html"
    });
    return false;
  }

  function titik()
  {
    var angka = bersihPemisah(bersihPemisah(bersihPemisah(bersihPemisah(document.getElementById('harga').value)))); //input ke dalam angka tanpa titik
    if (document.getElementById('harga').value == "")
    {
      alert("Jangan Dikosongi");
      document.getElementById('harga').focus();
      return false;
    }
      else
      if (angka >= 1)
      {
        alert("angka aslinya : "+angka);
        document.getElementById('harga').focus();
        document.getElementById('harga').value = tandaPemisahTitik(angka);
        return false;
      }
  }
  </script>
</body>
</html>
