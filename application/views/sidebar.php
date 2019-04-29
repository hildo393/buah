<aside class="main-sidebar">
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image"><img src="<?php echo base_url()?>assets/images/user/<?php echo $this->session->userdata('photo').$this->session->userdata('photo_type') ?>" class="img-circle" alt="User Image" /></div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('name'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <ul class="sidebar-menu">
      <li class="header">MENU UTAMA</li>
      <li <?php if($this->uri->segment(2)=="dashboard"){echo "class='active'";} ?>>
        <a href="<?php echo base_url('dashboard') ?>">
          <i class="fa fa-home"></i> <span>Dashboard</span>
        </a>
      </li>
      <!--
      <?php if ($this->ion_auth->is_superadmin()): ?>
      <li <?php if($this->uri->segment(2)=="penjualan"){echo "class='active'";} ?>>
        <a href="<?php echo base_url('penjualan') ?>">
          <i class="fa fa-money"></i> <span>Penjualan</span>
        </a>
      </li>
      <?php endif ?>
      <li <?php if($this->uri->segment(2) == "blog"){echo "class='active'";} ?>>
        <a href='#'><i class='fa fa-newspaper-o'></i><span> Blog </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if($this->uri->segment(2) == "blog" && $this->uri->segment(3) == "create"){echo "class='active'";} ?>><a href='<?php echo base_url('blog/create') ?>'><i class='fa fa-circle-o'></i> Tambah Blog </a></li>
          <li <?php if($this->uri->segment(2) == "blog" && $this->uri->segment(3) == ""){echo "class='active'";} ?>><a href='<?php echo base_url('blog') ?>'><i class='fa fa-circle-o'></i> Data Blog </a></li>
        </ul>
      </li>
      <li <?php if($this->uri->segment(2) == "portofolio"){echo "class='active'";} ?>>
        <a href='#'><i class='fa fa-image'></i><span> Portofolio </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if($this->uri->segment(2) == "portofolio" && $this->uri->segment(3) == "create"){echo "class='active'";} ?>><a href='<?php echo base_url('portofolio/create') ?>'><i class='fa fa-circle-o'></i> Tambah Portofolio </a></li>
          <li <?php if($this->uri->segment(2) == "portofolio" && $this->uri->segment(3) == ""){echo "class='active'";} ?>><a href='<?php echo base_url('portofolio') ?>'><i class='fa fa-circle-o'></i> Data Portofolio </a></li>
        </ul>
      </li>
      <li <?php if($this->uri->segment(2) == "portofolio"){echo "class='active'";} ?>>
        <a href='#'><i class='fa fa-youtube-play'></i><span> Video Youtube</span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if($this->uri->segment(2) == "video" && $this->uri->segment(3) == "create"){echo "class='active'";} ?>><a href='<?php echo base_url('video/create') ?>'><i class='fa fa-circle-o'></i> Tambah Video </a></li>
          <li <?php if($this->uri->segment(2) == "portofolio" && $this->uri->segment(3) == ""){echo "class='active'";} ?>><a href='<?php echo base_url('video') ?>'><i class='fa fa-circle-o'></i> Data Video </a></li>
        </ul>
      </li>-->
      <li <?php if($this->uri->segment(2) == "blog"){echo "class='active'";} ?>>
        <a href='#'><i class='fa fa-newspaper-o'></i><span> Blog </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if($this->uri->segment(2) == "blog" && $this->uri->segment(3) == "create"){echo "class='active'";} ?>><a href='<?php echo base_url('blog/create') ?>'><i class='fa fa-circle-o'></i> Tambah Blog </a></li>
          <li <?php if($this->uri->segment(2) == "blog" && $this->uri->segment(3) == ""){echo "class='active'";} ?>><a href='<?php echo base_url('blog') ?>'><i class='fa fa-circle-o'></i> Data Blog </a></li>
        </ul>
      </li>
      <li <?php if($this->uri->segment(2) == "supplier"){echo "class='active'";} ?>>
        <a href='#'><i class='fa fa-shopping-cart'></i><span> Supplier </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if($this->uri->segment(2) == "supplier" && $this->uri->segment(3) == "create"){echo "class='active'";} ?>><a href='<?php echo base_url('supplier/create') ?>'><i class='fa fa-circle-o'></i> Tambah Supplier </a></li>
          <li <?php if($this->uri->segment(2) == "supplier" && $this->uri->segment(3) == ""){echo "class='active'";} ?>><a href='<?php echo base_url('supplier') ?>'><i class='fa fa-circle-o'></i> Data Supplier </a></li>
        </ul>
      </li>
      <li <?php if($this->uri->segment(2) == "produk"){echo "class='active'";} ?>>
        <a href='#'><i class='fa fa-shopping-cart'></i><span> Produk </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if($this->uri->segment(2) == "produk" && $this->uri->segment(3) == "create"){echo "class='active'";} ?>><a href='<?php echo base_url('produk/create') ?>'><i class='fa fa-circle-o'></i> Tambah Produk </a></li>
          <li <?php if($this->uri->segment(2) == "produk" && $this->uri->segment(3) == ""){echo "class='active'";} ?>><a href='<?php echo base_url('produk') ?>'><i class='fa fa-circle-o'></i> Data Produk </a></li>
        </ul>
      </li>
      <!--<li <?php if($this->uri->segment(2) == "kategori"){echo "class='active'";} ?>>
        <a href='#'><i class='fa fa-tags'></i><span> Kategori </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if($this->uri->segment(2) == "kategori" && $this->uri->segment(3) == "create"){echo "class='active'";} ?>><a href='<?php echo base_url('kategori/create') ?>'><i class='fa fa-circle-o'></i>Tambah Kategori </a></li>
          <li <?php if($this->uri->segment(2) == "kategori" && $this->uri->segment(3) == ""){echo "class='active'";} ?>><a href='<?php echo base_url('kategori') ?>'><i class='fa fa-circle-o'></i>Data Kategori </a></li>
        </ul>
      </li>
      
      <li <?php if($this->uri->segment(2) == "subkategori"){echo "class='active'";} ?>>
        <a href='#'><i class='fa fa-tags'></i><span> SubKategori </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if($this->uri->segment(2) == "subkategori" && $this->uri->segment(3) == "create"){echo "class='active'";} ?>><a href='<?php echo base_url('subkategori/create') ?>'><i class='fa fa-circle-o'></i> Tambah SubKategori </a></li>
          <li <?php if($this->uri->segment(2) == "subkategori" && $this->uri->segment(3) == ""){echo "class='active'";} ?>><a href='<?php echo base_url('subkategori') ?>'><i class='fa fa-circle-o'></i> Data SubKategori </a></li>
        </ul>
      </li>-->
      <li <?php if($this->uri->segment(2) == "user"){echo "class='active'";} ?>>
        <a href='#'><i class='fa fa-group'></i><span> User </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if($this->uri->segment(2) == "user" && $this->uri->segment(3) == "pembeli"){echo "class='active'";} ?>><a href='<?php echo base_url('user/pembeli') ?>'><i class='fa fa-circle-o'></i> Pembeli </a></li>
          <li <?php if($this->uri->segment(2) == "user" && $this->uri->segment(3) == "reseller"){echo "class='active'";} ?>><a href='<?php echo base_url('user/reseller') ?>'><i class='fa fa-circle-o'></i> Reseller </a></li>
        </ul>
      </li>
      <li <?php if($this->uri->segment(2) == "slider"){echo "class='active'";} ?>>
        <a href='#'><i class='fa fa-newspaper-o'></i><span> Slider </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if($this->uri->segment(2) == "slider" && $this->uri->segment(3) == "create"){echo "class='active'";} ?>><a href='<?php echo base_url('slider/create') ?>'><i class='fa fa-circle-o'></i> Tambah Slider </a></li>
          <li <?php if($this->uri->segment(2) == "slider" && $this->uri->segment(3) == ""){echo "class='active'";} ?>><a href='<?php echo base_url('slider') ?>'><i class='fa fa-circle-o'></i> Data Slider </a></li>
        </ul>
      </li>
      <?php if ($this->ion_auth->is_superadmin()): ?>
      <!--<li <?php if($this->uri->segment(2)=="laporan"){echo "class='active'";} ?>>
        <a href="<?php echo base_url('laporan') ?>">
          <i class="fa fa-file"></i> <span>Laporan</span>
        </a>
      </li>-->
      <?php endif ?>
      <li class="header">SETTING</li>
     <!-- <li><a href='<?php echo base_url() ?>company/update/1'> <i class="fa fa-building"></i> <span>Profil Toko</span> </a> </li>
      <li class='treeview'>
        <a href='<?php $user_id = $this->session->userdata('user_id'); echo base_url('auth/edit_user/'.$user_id.'') ?>'>
          <i class='fa fa-edit'></i><span> Edit Akun </span>
        </a>
      </li>
      <li <?php if($this->uri->segment(2) == "kontak"){echo "class='active'";} ?>>
        <a href='#'><i class='fa fa-phone'></i><span> Kontak </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if($this->uri->segment(2) == "kontak" && $this->uri->segment(3) == "create"){echo "class='active'";} ?>><a href='<?php echo base_url('kontak/create') ?>'><i class='fa fa-circle-o'></i> Tambah Kontak </a></li>
          <li <?php if($this->uri->segment(2) == "kontak" && $this->uri->segment(3) == ""){echo "class='active'";} ?>><a href='<?php echo base_url('kontak') ?>'><i class='fa fa-circle-o'></i> Data Kontak </a></li>
        </ul>
      </li>-->
      <?php if ($this->ion_auth->is_superadmin()): ?>
        <li <?php if($this->uri->segment(2) == "auth"){echo "class='active'";} ?>>
          <a href='#'><i class='fa fa-user'></i><span> Admin </span><i class='fa fa-angle-left pull-right'></i></a>
          <ul class='treeview-menu'>
            <li <?php if($this->uri->segment(2) == "auth" && $this->uri->segment(3) == "create_user"){echo "class='active'";} ?>><a href='<?php echo base_url() ?>auth/create_user'><i class='fa fa-circle-o'></i> Tambah User</a></li>
            <li <?php if($this->uri->segment(2) == "auth" && $this->uri->segment(3) == ""){echo "class='active'";} ?>><a href='<?php echo base_url() ?>auth/'><i class='fa fa-circle-o'></i> Data User</a></li>
          </ul>
        </li>
      <?php endif ?>
      <li> <a href='<?php echo base_url() ?>auth/logout'> <i class="fa fa-sign-out"></i> <span>Logout</span> </a> </li>
       <li> <a href='<?php echo base_url() ?>auth/panduan'> <i class="fa fa-sign-out"></i> <span>Buku Panduan</span> </a> </li>
       <li> <a href='<?php echo base_url() ?>versioning'> <i class="fa fa-sign-out"></i> <span>Source Code Versioning</span> </a> </li>
    </ul>
  </section>
</aside>
