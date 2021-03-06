<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->model('Blog_model');
		$this->load->model('Cart_model');
		$this->load->model('Ion_auth_model');
		$this->load->model('Kontak_model');
		$this->load->model('Produk_model');
		$this->load->model('Slider_model');

		

		//if (!$this->ion_auth->logged_in()){redirect('auth/login', 'refresh');}
		if($this->session->userdata('logedin') != 'TRUE'){ redirect('auth/login', 'refresh');}
		else
		{
			$this->data = array(
	      'title' 									=> 'Dashboard',
				'get_bulan' 							=> $this->Cart_model->get_bulan(),
				'total_transaksi' 				=> $this->Cart_model->total_rows(),
				'top5_transaksi' 					=> $this->Cart_model->top5_transaksi(),
				'total_produk' 						=> $this->Produk_model->total_rows(),
				'total_slider' 						=> $this->Slider_model->total_rows(),
			);

			$this->load->view('dashboard',$this->data);
		}


	}



}
