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
								<?php echo $message;?>
                <div class="table-responsive no-padding">
                  <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="text-align: center">No.</th>
                          <th style="text-align: center">Tanggal</th>
                          <th style="text-align: center">User</th>
                          <th style="text-align: center">Ip Adress</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $start = 0; foreach ($log as $user):?>
                          <tr>
                            <td style="text-align:center"><?php echo ++$start ?></td>
                            <td style="text-align:left"><?php echo $user->tanggal ?></td>
                            <td style="text-align:center"><?php echo $user->login ?></td>
                            <td style="text-align:center"><?php echo $user->ip_address ?></td>
                            </tr>
                          <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
							</div>
						</div>
          </div><!-- ./col -->
        </div><!-- /.row -->
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
