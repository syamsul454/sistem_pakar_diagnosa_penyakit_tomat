<?php  

class Halaman extends CI_Controller
{

	public function __construct()
 	{
 		parent:: __construct();
 		
 		$this->load->helper('url');
 	}
	
	public function index()
	{

		$data['daun'] = 'apalah penyakit tomat terjakit pada daun .. ?';
		$data['url'] = 'inputdata';

		$this->load->view('templates/header');
		$this->load->view('halaman/index', $data);
		$this->load->view('templates/footer');
	}

	public function inputdata()
	{
		
		$tomat =  $this->input->post('pertanyaan');

		if ($tomat == 'daun') {
			

		redirect('penyakit_daun/penyakit_pada_daun');
	

		} elseif ($tomat == 'buah') {

	redirect('halaman/buah');
			}
	}

	

}