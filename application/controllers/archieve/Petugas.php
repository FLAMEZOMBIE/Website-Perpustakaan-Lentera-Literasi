<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Petugas extends MY_Controller {


	public function _construct()
	{
		session_start();
	}


	public function index(){
		$data['title']='Petugas Home';
		$tmp['content']=$this->load->view('petugas/home',$data, TRUE);
		$this->load->view('petugas/layout',$tmp);
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */