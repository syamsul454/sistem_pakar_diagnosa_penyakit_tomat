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

		$data['daun'] = 'Pada bagian apa tanaman tomat terjangkit penyakit..?';
		$data['url'] = 'halaman/inputdata';

		$this->load->view('templates/header');
		$this->load->view('halaman/index', $data);
		$this->load->view('templates/footer');
	}




	public function inputdata()
	{
		
		$input =  $this->input->post('pertanyaan');

		if ($input == 'ya') {
		redirect('penyakit_daun/penyakit_pada_daun');


		} elseif ($input == 'tidak') {

		redirect('penyakit_buah1/pertanyaan1');
			}
	}

	

}