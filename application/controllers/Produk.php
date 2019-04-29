<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Produk_model');
    $this->load->model('Supplier_model');
    $this->data['module'] = 'Buah';

    if($this->session->userdata('logedin') != 'TRUE'){ redirect('auth/login', 'refresh');}
  }

  public function index()
  {
    $this->data['title'] = 'Data '.$this->data['module'];
    $this->load->view('produk/produk_list', $this->data);
  }

  public function ajax_list()
	{
    //get_datatables terletak di model
    $list = $this->Produk_model->get_datatables();
    $data = array();
		$no = $_POST['start'];

    // Membuat loop/ perulangan
    foreach ($list as $data_produk) {
			$no++;
			$row = array();
      $row[] = '<p style="text-align: center">'.$no.'</p>';
      $row[] = '<p style="text-align: left">'.$data_produk->nama_buah.'</p>';
      $row[] = '<p style="text-align: center">'.number_format($data_produk->harga_beli).'</p>';
      $row[] = '<p style="text-align: center">'.number_format($data_produk->harga_jual).'</p>';
      $row[] = '<p style="text-align: center">'.number_format($data_produk->harga_reseller).'</p>';
      $row[] = '<p style="text-align: center">'.number_format($data_produk->stok).'</p>';
      $row[] = '<p style="text-align: center">'.$data_produk->tgl_datang.'</p>';
      $row[] = '<p style="text-align: center">'.$data_produk->kadaluarsa.'</p>';

      // Penambahan tombol edit dan hapus
      $row[] = '
      <p style="text-align: center">
      	<a class="btn btn-sm btn-warning" href="'.base_url('produk/update/').$data_produk->id_buah.'" title="Edit"><i class="fa fa-pencil"></i></a>
        <!--<a class="btn btn-sm btn-danger" href="'.base_url('produk/delete/').$data_produk->id_buah.'" title="Hapus" onclick="javasciprt: return confirm(\'Apakah Anda yakin ?\')"><i class="fa fa-remove"></i></a>-->
			</p>';

      $data[] = $row;
    }

    $output = array(
              "draw" => $_POST['draw'],
              "recordsTotal" => $this->Produk_model->count_all(),
              "recordsFiltered" => $this->Produk_model->count_filtered(),
              "data" => $data
              );
    //output to json format
    echo json_encode($output);
  }

  public function create()
  {
    $this->data['title']          = 'Tambah Data '.$this->data['module'];
    $this->data['action']         = site_url('produk/create_action');
    $this->data['button_submit']  = 'Simpan';
    $this->data['button_reset']   = 'Reset';

    $this->data['nama_buah'] = array(
      'name'        => 'nama_buah',
      'id'          => 'nama_buah',
      'class'       => 'form-control',
      'placeholder' => 'Silahkan isi nama buah',
      'value'       => $this->form_validation->set_value('nama_buah'),
    );
    $this->data['deskripsi'] = array(
      'name'        => 'deskripsi',
      'id'          => 'deskripsi',
      'rows' => '7',
      'class'       => 'form-control',
      'placeholder' => 'Ex: bahan, ukuran, benang, spesifikasi lengkap barang',
      'value'       => $this->form_validation->set_value('deskripsi'),
    );
    $this->data['harga_beli'] = array(
      'name'        => 'harga_beli',
      'id'          => 'b',
      'class'       => 'form-control',
      'placeholder'	=> 'Isikan angka saja',
      'onkeyup'			=> 'hitung();',
      'value'       => $this->form_validation->set_value('harga_beli'),
    );
    $this->data['harga_jual'] = array(
      'name'        => 'harga_jual',
      'id'          => 'a',
      'class'       => 'form-control',
      'placeholder'	=> 'Isikan angka saja',
      'onkeyup'			=> 'hitung();',
      'value'       => $this->form_validation->set_value('harga_jual'),
    );
    $this->data['harga_reseller'] = array(
      'name'        => 'harga_reseller',
      'id'          => 'd',
      'class'       => 'form-control',
      'placeholder'	=> 'Isikan angka saja',
      'onkeyup'			=> 'hitung();',
      'value'       => $this->form_validation->set_value('harga_reseller'),
    );
    $this->data['stok'] = array(
      'name'        => 'stok',
      'id'          => 'stok',
      'type'        => 'text',
      'class'       => 'form-control',
      'placeholder'	=> 'Isikan angka saja',
      'onkeypress' => 'return hanyaAngka(event)',
      'value'       => $this->form_validation->set_value('stok'),
    );
    $this->data['satuan'] = array(
      'name'        => 'satuan',
      'id'          => 'satuan',
      'type'        => 'text',
      'class'       => 'form-control',
      'placeholder'	=> 'Isikan data satuan',
      'value'       => $this->form_validation->set_value('satuan'),
    );

    $this->data['supplier_id'] = array(
      'name'  => 'supplier_id',
      'id'    => 'supplier_id',
      'class' => 'form-control',
      'required'    => '',
    );

    $this->data['ambil_supplier'] = $this->Supplier_model->ambil_supplier();

    $this->load->view('produk/produk_add', $this->data);
  }

  public function create_action()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE)
    {
      $this->create();
    }
      else
      {
        /* 4 adalah menyatakan tidak ada file yang diupload*/
        if ($_FILES['foto']['error'] <> 4)
        {
          $nmfile = strtolower(url_title($this->input->post('nama_buah'))).date('YmdHis');

          /* memanggil library upload ci */
          $config['upload_path']      = './assets/images/produk/';
          $config['allowed_types']    = 'jpg|jpeg|png|gif';
          $config['max_size']         = '2548'; // 2 MB
          $config['file_name']        = $nmfile; //nama yang terupload nantinya

          $this->load->library('upload', $config);

          if (!$this->upload->do_upload('foto'))
          {
            //file gagal diupload -> kembali ke form tambah
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert">'.$error['error'].'</div>');

            $this->create();
          }
            //file berhasil diupload -> lanjutkan ke query INSERT
            else
            {
              $foto = $this->upload->data();
              $thumbnail                = $config['file_name'];
              // library yang disediakan codeigniter
              $config['image_library']  = 'gd2';
              // gambar yang akan dibuat thumbnail
              $config['source_image']   = './assets/images/produk/'.$foto['file_name'].'';
              // membuat thumbnail
              $config['create_thumb']   = TRUE;
              // rasio resolusi
              $config['maintain_ratio'] = FALSE;
              // lebar
              $config['width']          = 400;
              // tinggi
              $config['height']         = 400;

              $this->load->library('image_lib', $config);
              $this->image_lib->resize();

              $data = array(
                'nama_buah'    => $this->input->post('nama_buah'),
                'deskripsi'       => $this->input->post('deskripsi'),
                'berat'           => $this->input->post('berat'),
                'harga_jual' 	  => $this->input->post('harga_jual'),
                'harga_beli' 	        => $this->input->post('harga_beli'),
                'harga_reseller' 	  => $this->input->post('harga_reseller'),
                'supplier_id'           => $this->input->post('supplier_id'),
                'stok' 				    => $this->input->post('stok'),
                'satuan' 				  => $this->input->post('satuan'),
                'tgl_datang'            => $this->input->post('tgl_datang'),
                'kadaluarsa'          => $this->input->post('kadaluarsa'),
                'foto'            => $nmfile,
                'foto_type'       => $foto['file_ext']
              );

              // eksekusi query INSERT
              $this->Produk_model->insert($data);
              // set pesan data berhasil dibuat
              $this->session->set_flashdata('message', '<div class="alert alert-success alert">Data berhasil dibuat</div>');
              redirect(site_url('produk'));
            }
        }
        else // Jika file upload kosong
        {
          $data = array(
              'nama_buah'    => $this->input->post('nama_buah'),
              'deskripsi'       => $this->input->post('deskripsi'),
              'berat'           => $this->input->post('berat'),
              'harga_jual'    => $this->input->post('harga_jual'),
              'harga_beli'          => $this->input->post('harga_beli'),
              'harga_reseller'    => $this->input->post('harga_reseller'),
              'supplier_id'           => $this->input->post('supplier_id'),
              'stok'            => $this->input->post('stok'),
              'satuan'           => $this->input->post('satuan'),
              'tgl_datang'            => $this->input->post('tgl_datang'),
              'kadaluarsa'          => $this->input->post('kadaluarsa')
          );

          // eksekusi query INSERT
          $this->Produk_model->insert($data);
          // set pesan data berhasil dibuat
          $this->session->set_flashdata('message', '<div class="alert alert-success alert">Data berhasil dibuat</div>');
          redirect(site_url('produk'));
        }
      }
  }

  public function update($id)
  {
    $row = $this->Produk_model->get_by_id($id);
    $this->data['produk'] = $this->Produk_model->get_by_id($id);

    if ($row)
    {
      $this->data['title']          = 'Ubah Data '.$this->data['module'];
      $this->data['action']         = site_url('produk/update_action');
      $this->data['button_submit']  = 'Simpan';
      $this->data['button_reset']   = 'Reset';

      $this->data['id_buah'] = array(
        'name'  => 'id_buah',
        'id'    => 'id_buah',
        'type'  => 'hidden',
      );
      $this->data['nama_buah'] = array(
        'name'  => 'nama_buah',
        'id'    => 'nama_buah',
        'class' => 'form-control',
      );
      $this->data['keywords'] = array(
        'name'  => 'keywords',
        'id'    => 'keywords',
        'class' => 'form-control',
      );
      $this->data['deskripsi'] = array(
        'name'  => 'deskripsi',
        'id'    => 'deskripsi',
        'class' => 'form-control',
      );
      $this->data['harga_jual'] = array(
        'name'        => 'harga_jual',
        'id'          => 'b',
        'class'       => 'form-control',
        'placeholder'	=> 'Isikan angka saja',
        'onkeyup'			=> 'hitung();',
      );
      $this->data['harga_beli'] = array(
        'name'        => 'harga_beli',
        'id'          => 'a',
        'class'       => 'form-control',
        'placeholder'	=> 'Isikan angka saja',
        'onkeyup'			=> 'hitung();',
      );
      $this->data['harga_reseller'] = array(
        'name'        => 'harga_reseller',
        'id'          => 'd',
        'class'       => 'form-control',
        'placeholder'	=> 'Isikan angka saja',
        'onkeyup'			=> 'hitung();',
      );
      $this->data['stok'] = array(
        'name'        => 'stok',
        'id'          => 'stok',
        'class'       => 'form-control',
        'placeholder'	=> 'Isikan angka saja',
      );
      $this->data['satuan'] = array(
        'name'        => 'satuan',
        'id'          => 'satuan',
        'class'       => 'form-control',
        'placeholder'	=> 'Isikan angka saja',
      );
      $this->data['kat_id'] = array(
        'name'  => 'kat_id',
        'id'    => 'kat_id',
        'class' => 'form-control',
        'onChange' => 'tampilSubkat()',
        'required'    => '',
      );

      
    $this->data['supplier_id'] = array(
      'name'  => 'supplier_id',
      'id'    => 'supplier_id',
      'class' => 'form-control',
      'required'    => '',
    );

      $this->data['ambil_supplier'] = $this->Supplier_model->ambil_supplier();

      $this->load->view('produk/produk_edit', $this->data);
    }
      else
      {
        $this->session->set_flashdata('message', '
        <div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
          <i class="ace-icon fa fa-bullhorn green"></i> Data tidak ditemukan
        </div>');
        redirect(site_url('produk'));
      }
  }

  public function update_action()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE)
    {
      $this->update($this->input->post('id_buah'));
    }
      else
      {
        $nmfile = strtolower(url_title($this->input->post('nama_buah'))).date('YmdHis');
        $id['id_buah'] = $this->input->post('id_buah');

        /* Jika file upload diisi */
        if ($_FILES['foto']['error'] <> 4)
        {
          $nmfile = strtolower(url_title($this->input->post('nama_buah'))).date('YmdHis');

          //load uploading file library
          $config['upload_path']      = './assets/images/produk/';
          $config['allowed_types']    = 'jpg|jpeg|png|gif';
          $config['max_size']         = '2048'; // 2 MB
          $config['file_name']        = $nmfile; //nama yang terupload nantinya

          $this->load->library('upload', $config);

          // Jika file gagal diupload -> kembali ke form update
          if (!$this->upload->do_upload('foto'))
          {
            //file gagal diupload -> kembali ke form update
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert">'.$error['error'].'</div>');

            $this->update($this->input->post('id_buah'));
          }
            // Jika file berhasil diupload -> lanjutkan ke query INSERT
            else
            {
              $delete = $this->Produk_model->del_by_id($this->input->post('id_buah'));

              $dir        = "assets/images/produk/".$delete->foto.$delete->foto_type;
              $dir_thumb  = "assets/images/produk/".$delete->foto.'_thumb'.$delete->foto_type;

              if(file_exists($dir))
              {
                // Hapus foto dan thumbnail
                unlink($dir);
                unlink($dir_thumb);
              }

              $foto = $this->upload->data();
              // library yang disediakan codeigniter
              $thumbnail                = $config['file_name'];
              //nama yang terupload nantinya
              $config['image_library']  = 'gd2';
              // gambar yang akan dibuat thumbnail
              $config['source_image']   = './assets/images/produk/'.$foto['file_name'].'';
              // membuat thumbnail
              $config['create_thumb']   = TRUE;
              // rasio resolusi
              $config['maintain_ratio'] = FALSE;
              // lebar
              $config['width']          = 400;
              // tinggi
              $config['height']         = 400;

              $this->load->library('image_lib', $config);
              $this->image_lib->resize();

              $data = array(
                'nama_buah'    => $this->input->post('nama_buah'),
                'deskripsi'       => $this->input->post('deskripsi'),
                'harga_jual' 	  => $this->input->post('harga_beli'),
                'harga_beli' 	        => $this->input->post('harga_jual'),
                'harga_reseller' 	  => $this->input->post('harga_reseller'),
                'stok' 				    => $this->input->post('stok'),
                'satuan' 				  => $this->input->post('satuan'),
                'tgl_datang'            => $this->input->post('tgl_datang'),
                'kadaluarsa'          => $this->input->post('kadaluarsa'),
                'foto'            => $nmfile,
                'foto_type'       => $foto['file_ext']
              );

              $this->Produk_model->update($this->input->post('id_buah'), $data);
              $this->session->set_flashdata('message', '
              <div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
                <i class="ace-icon fa fa-bullhorn green"></i> Data berhasil disimpan
              </div>');
              redirect(site_url('produk'));
            }
        }
          // Jika file upload kosong
          else
          {
            $data = array(
              'nama_buah'    => $this->input->post('nama_buah'),
                'deskripsi'       => $this->input->post('deskripsi'),
                'harga_beli'    => $this->input->post('harga_beli'),
                'harga_jual'          => $this->input->post('harga_jual'),
                'harga_reseller'    => $this->input->post('harga_reseller'),
                'stok'            => $this->input->post('stok'),
                'satuan'          => $this->input->post('satuan'),
                'tgl_datang'            => $this->input->post('tgl_datang'),
                'kadaluarsa'          => $this->input->post('kadaluarsa')
            );

            $this->Produk_model->update($this->input->post('id_buah'), $data);
            $this->session->set_flashdata('message', '
            <div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
              <i class="ace-icon fa fa-bullhorn green"></i> Data berhasil disimpan
            </div>');
            redirect(site_url('produk'));
          }
      }
  }

  public function delete($id)
  {
    $delete = $this->Produk_model->del_by_id($id);

    // menyimpan lokasi gambar dalam variable
    $dir = "assets/images/produk/".$delete->foto.$delete->foto_type;
    $dir_thumb = "assets/images/produk/".$delete->foto.'_thumb'.$delete->foto_type;

    // Hapus foto
    unlink($dir);
    unlink($dir_thumb);

    // Jika data ditemukan, maka hapus foto dan record nya
    if($delete)
    {
      $this->Produk_model->delete($id);

      $this->session->set_flashdata('message', '
      <div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
        <i class="ace-icon fa fa-bullhorn green"></i> Data berhasil dihapus
      </div>');
      redirect(site_url('produk'));
    }
      // Jika data tidak ada
      else
      {
        $this->session->set_flashdata('message', '
        <div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
          <i class="ace-icon fa fa-bullhorn green"></i> Data tidak ditemukan
        </div>');
        redirect(site_url('produk'));
      }
  }

  public function pilih_subkategori(){
		$this->data['subkategori']=$this->Kategori_model->ambil_subkategori($this->uri->segment(4));
		$this->load->view('produk/v_subkat',$this->data);
	}

  public function pilih_supersubkategori(){
		$this->data['supersubkategori']=$this->Kategori_model->ambil_supersubkategori($this->uri->segment(4));
		$this->load->view('produk/v_supersubkat',$this->data);
	}

  public function _rules()
  {
    $this->form_validation->set_rules('nama_buah', 'Nama BUah', 'trim|required');

    // set pesan form validasi error
    $this->form_validation->set_message('required', '{field} wajib diisi');

    $this->form_validation->set_rules('id_buah', 'id_buah', 'trim');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert">', '</div>');
  }

}
