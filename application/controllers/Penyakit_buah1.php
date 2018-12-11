<?php 
	
class Penyakit_buah1 extends CI_Controller
{	
	public function __construct()
	{
		parent::  __construct();
		$this->load->helper('url');
	}

public function pertanyaan1()
	{
		$data['daun'] = 'Apakah pada buah tomat terdapat bercak kecil dan berair..?';
		$data['url'] = 'Penyakit_buah1/pertanyaan1';
		$this->load->view('templates/header');
		$this->load->view('halaman/index', $data);

		$input =  $this->input->post('pertanyaan');
		if ($input == "ya"){
			redirect('Penyakit_buah1/pertanyaan2');
		}elseif ($input == "tidak"){
			redirect('Penyakit_buah2/pertanyaan1');
		}

	}

public function pertanyaan2(){
	$data['daun'] = 'Apakah bercak tersebut berwarna coklat..?';
		$data['url'] = 'penyakit_buah1/pertanyaan2';
		$this->load->view('templates/header');
		$this->load->view('halaman/rule', $data);

		$input =  $this->input->post('pertanyaan');
		if ($input == "ya"){
			redirect('Penyakit_buah1/pertanyaan3');
		}elseif ($input == "tidak"){
			redirect('Penyakit_buah2/pertanyaan1');
		}

}

public function pertanyaan3(){
	$data['daun'] = 'Apakah ukuran bercak semakin membesar..?';
		$data['url'] = 'penyakit_buah1/pertanyaan3';
		$this->load->view('templates/header');
		$this->load->view('halaman/rule', $data);
$input =  $this->input->post('pertanyaan');
		if ($input == "ya"){
			redirect('Penyakit_buah1/pertanyaan4');
		}elseif ($input == "tidak"){
			redirect('Penyakit_buah2/pertanyaan1');
		}

}

public function pertanyaan4(){
	$data['daun'] = 'Apakah semakin lama warna bercak tersebut semakin menghitam..?';
		$data['url'] = 'penyakit_buah1/pertanyaan4';
		$this->load->view('templates/header');
		$this->load->view('halaman/rule', $data);
$input =  $this->input->post('pertanyaan');
		if ($input == "ya"){
			redirect('Penyakit_buah1/pertanyaan5');
		}elseif ($input == "tidak"){
			redirect('Penyakit_buah2/pertanyaan1');
		}
}

public function pertanyaan5(){
	$data['daun'] = 'Apakah terdapat juga bercak berwarna ungu di dekat tangkai pada pangkal buah..?';
		$data['url'] = 'penyakit_buah1/pertanyaan5';
		$this->load->view('templates/header');
		$this->load->view('halaman/rule', $data);
$input =  $this->input->post('pertanyaan');
		if ($input == "ya"){
			redirect('Penyakit_buah1/hasil');
		}

}

public function hasil(){
	echo "Penyakit pada tomat anda berwarna BUSUK BUAH ANTRAKNOSA";
}
	


}

	
 ?>