<?php 
	
class Penyakit_buah3 extends CI_Controller
{	
	public function __construct()
	{
		parent::  __construct();
		$this->load->helper('url');
	}

public function pertanyaan1()
	{
		$data['daun'] = 'Apakah buah tomat membusuk dan berwara hitam..?';
		$data['url'] = 'Penyakit_buah3/pertanyaan1';
		$this->load->view('templates/header');
		$this->load->view('halaman/rule', $data);

		$input =  $this->input->post('pertanyaan');
		if ($input == "ya"){
			redirect('Penyakit_buah3/pertanyaan2');
		}elseif ($input == "tidak"){
			redirect('Penyakit_buah1/pertanyaan1');
		}

	}

public function pertanyaan2(){
	$data['daun'] = 'Apakah bunga tomat terjadi keguguran..?';
		$data['url'] = 'penyakit_buah3/pertanyaan2';
		$this->load->view('templates/header');
		$this->load->view('halaman/rule', $data);

		$input =  $this->input->post('pertanyaan');
		if ($input == "ya"){
			redirect('Penyakit_buah3/pertanyaan3');
		}elseif ($input == "tidak"){
			redirect('Penyakit_buah1/pertanyaan1');
		}

}

public function pertanyaan3(){
	$data['daun'] = 'Apakah pembusukan buah tomat berawal dari tangkai buah dengan warna coklat tua kemudian membentuk ckungan..?';
		$data['url'] = 'penyakit_buah3/pertanyaan3';
		$this->load->view('templates/header');
		$this->load->view('halaman/rule', $data);

		$input =  $this->input->post('pertanyaan');
		$input =  $this->input->post('pertanyaan');
		if ($input == "ya"){
			redirect('Penyakit_buah3/hasil');
		}

}

public function hasil(){
	echo "Penyakit pada tomat anda bernama penyakit BERCAK COKLAT";
}

	


}

	
 ?>