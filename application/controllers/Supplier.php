<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Supplier_model');

    $this->data['module'] = 'Supplier';

    if($this->session->userdata('logedin') != 'TRUE'){ redirect('auth/login', 'refresh');}
  }

  public function index()
  {
    $this->data['title'] = 'Data '.$this->data['module'];
    $this->load->view('supplier/supplier_list', $this->data);
  }

  public function ajax_list()
	{
		//get_datatables terletak di model
    $list = $this->Supplier_model->get_datatables();
    $data = array();
		$no = $_POST['start'];

    // Membuat loop/ perulangan
    foreach ($list as $data_supplier) {
			$no++;
			$row = array();
      $row[] = '<p style="text-align: center">'.$no.'</p>';
      $row[] = '<p style="text-align: left">'.$data_supplier->name.'</p>';
      $row[] = '<p style="text-align: left">'.$data_supplier->phone.'</p>';
      $row[] = '<p style="text-align: left">'.$data_supplier->email.'</p>';
      $row[] = '<p style="text-align: left">'.$data_supplier->address.'</p>';
      // Penambahan tombol edit dan hapus
      $row[] = '
      <p style="text-align: center">
        <a class="btn btn-sm btn-warning" href="'.base_url('supplier/update/').$data_supplier->id.'" title="Edit"><i class="fa fa-pencil"></i></a>
        <a class="btn btn-sm btn-danger" href="'.base_url('supplier/delete/').$data_supplier->id.'" title="Hapus" onclick="javasciprt: return confirm(\'Apakah Anda yakin ?\')"><i class="fa fa-remove"></i></a>
			</p>';

      $data[] = $row;
    }

    $output = array(
              "draw" => $_POST['draw'],
              "recordsTotal" => $this->Supplier_model->count_all(),
              "recordsFiltered" => $this->Supplier_model->count_filtered(),
              "data" => $data
              );
    //output to json format
    echo json_encode($output);
  }

  public function create()
  {
    $this->data['title']          = 'Tambah Data '.$this->data['module'];
    $this->data['action']         = site_url('supplier/create_action');
    $this->data['button_submit']  = 'Simpan';
    $this->data['button_reset']   = 'Reset';

    $this->data['name'] = array(
      'name'  => 'name',
      'id'    => 'name',
      'placeholder' => 'Silahkan isi nama supplier',
      'class' => 'form-control',
      'value' => $this->form_validation->set_value('name'),
    );

    $this->data['phone'] = array(
      'name'  => 'phone',
      'id'    => 'phone',
      'type'        => 'number',
      'placeholder' => 'Silahkan isi number saja',
      'class' => 'form-control',
      'value' => $this->form_validation->set_value('phone'),
    );

    $this->data['email'] = array(
      'name'  => 'email',
      'id'    => 'email',
      'placeholder' => 'Silahkan isi email supplier',
      'class' => 'form-control',
      'value' => $this->form_validation->set_value('email'),
    );

    $this->data['alamat'] = array(
      'name'  => 'alamat',
      'id'    => 'alamat',
      'rows' => '4',
      'class' => 'form-control',
      'value' => $this->form_validation->set_value('alamat'),
    );

    $this->load->view('supplier/supplier_add', $this->data);
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
      $data = array(
          'name'  => $this->input->post('name'),
          'phone'      => $this->input->post('phone'),
          'email'  => $this->input->post('email'),
          'address'      => $this->input->post('alamat')
        );

        // eksekusi query INSERT
        $this->Supplier_model->insert($data);
        // set pesan data berhasil disimpan
        $this->session->set_flashdata('message', '
        <div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
          <i class="ace-icon fa fa-bullhorn green"></i> Data berhasil disimpan
        </div>');
        redirect(site_url('supplier'));
    }
  }

  public function update($id)
  {
    $row = $this->Supplier_model->get_by_id($id);
    $this->data['supplier'] = $this->Supplier_model->get_by_id($id);

    if ($row)
    {
      $this->data['title']          = 'Ubah Data '.$this->data['module'];
      $this->data['action']         = site_url('supplier/update_action');
      $this->data['button_submit']  = 'Simpan';
      $this->data['button_reset']   = 'Reset';

      $this->data['id'] = array(
        'name'  => 'id',
        'id'    => 'id',
        'type'  => 'hidden',
      );

      $this->data['name'] = array(
        'name'  => 'name',
        'id'    => 'name',
        'class' => 'form-control',
      );
      $this->data['phone'] = array(
        'name'  => 'phone',
        'id'    => 'phone',
        'class' => 'form-control',
      );

      $this->data['email'] = array(
        'name'  => 'email',
        'id'    => 'email',
        'class' => 'form-control',
      );
      $this->data['alamat'] = array(
        'name'  => 'alamat',
        'id'    => 'alamat',
        'rows' => '4',
        'class' => 'form-control',
      );

      $this->load->view('supplier/supplier_edit', $this->data);
    }
      else
      {
        $this->session->set_flashdata('message', '
        <div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
          <i class="ace-icon fa fa-bullhorn green"></i> Data tidak ditemukan
        </div>');
        redirect(site_url('supplier'));
      }
  }

  public function update_action()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE)
    {
      $this->update($this->input->post('id_supplier'));
    }
      else
      {
        $data = array(
              'name'  => $this->input->post('name'),
              'phone'    => $this->input->post('phone'),
              'email'  => $this->input->post('email'),
              'address'    => $this->input->post('alamat')
            );

            $this->Supplier_model->update($this->input->post('id'), $data);
            $this->session->set_flashdata('message', '
            <div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
              <i class="ace-icon fa fa-bullhorn green"></i> Data berhasil disimpan
            </div>');
            redirect(site_url('supplier'));
      }
  }

  public function delete($id)
  {
    $delete = $this->Supplier_model->del_by_id($id);

     $this->Supplier_model->delete($id);

      $this->session->set_flashdata('message', '
      <div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
        <i class="ace-icon fa fa-bullhorn green"></i> Data berhasil dihapus
      </div>');
      redirect(site_url('supplier'));
  }

  public function _rules()
  {
    $this->form_validation->set_rules('name', 'Nama supplier', 'trim|required');

    // set pesan form validasi error
    $this->form_validation->set_message('required', '{field} wajib diisi');

    $this->form_validation->set_rules('id_supplier', 'id_supplier', 'trim');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert">', '</div>');
  }

}
