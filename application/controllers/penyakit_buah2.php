<?php 
	
class Penyakit_buah2 extends CI_Controller
{	
	public function __construct()
	{
		parent::  __construct();
		$this->load->helper('url');
	}

public function pertanyaan1()
	{
		$data['daun'] = 'Apakah pada buah tomat terdapat bercak cekung dan berwarna coklat..?';
		$data['url'] = 'Penyakit_buah2/pertanyaan1';
		$this->load->view('templates/header');
		$this->load->view('halaman/rule', $data);

		$input =  $this->input->post('pertanyaan');
		if ($input == "ya"){
			redirect('Penyakit_buah2/pertanyaan2');
		}elseif ($input == "tidak"){
			redirect('Penyakit_buah3/pertanyaan1');
		}

	}

public function pertanyaan2()
	{
		$data['daun'] = 'Apakah bercak tersebut semakin melebar..?';
		$data['url'] = 'Penyakit_buah2/pertanyaan2';
		$this->load->view('templates/header');
		$this->load->view('halaman/rule', $data);

		$input =  $this->input->post('pertanyaan');
		if ($input == "ya"){
			redirect('Penyakit_buah2/pertanyaan3');
		}elseif ($input == "tidak"){
			redirect('Penyakit_buah3/pertanyaan1');
		}

	}

	public function pertanyaan3()
	{
		$data['daun'] = 'Apakah bercak tersebut berwarna coklat tua..?';
		$data['url'] = 'Penyakit_buah2/pertanyaan3';
		$this->load->view('templates/header');
		$this->load->view('halaman/rule', $data);

		$input =  $this->input->post('pertanyaan');
		if ($input == "ya"){
			redirect('Penyakit_buah2/pertanyaan4');
		}elseif ($input == "tidak"){
			redirect('Penyakit_buah3/pertanyaan1');
		}

	}

	public function pertanyaan4()
	{
		$data['daun'] = 'Apakah dibagian tengah buah terjadi keretakan..?';
		$data['url'] = 'Penyakit_buah2/pertanyaan4';
		$this->load->view('templates/header');
		$this->load->view('halaman/rule', $data);

		$input =  $this->input->post('pertanyaan');
		if ($input == "ya"){
			redirect('Penyakit_buah2/hasil');
		}

	}


public function hasil(){
	echo "Penyakit pada tomat anda berwarna BUSUK BUAH RIZOCTONIA";
}
	


}

	
 ?>