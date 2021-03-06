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
									<div class="form-group">
										<div class="form-line"><label>Nama Supplier</label>
											<?php echo form_input($name, $supplier->name);?>
										</div>
                    <div class="form-group"><label>Nama CV</label>
                    <?php echo form_input($nama_cv, $supplier->nama_cv);?>
                  </div>
									</div>
                  <div class="form-group"><label>Phone number</label>
                    <?php echo form_input($phone, $supplier->phone);?>
                  </div>
                  <div class="form-group"><label>Email</label>
                    <?php echo form_input($email, $supplier->email);?>
                  </div>
									<div class="form-group">
										<div class="form-line"><label>Alamat</label>
											<?php echo form_textarea($alamat, $supplier->address);?>
										</div>
									</div>
									<?php echo form_input($id,$supplier->id);?>
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
</body>
</html>
