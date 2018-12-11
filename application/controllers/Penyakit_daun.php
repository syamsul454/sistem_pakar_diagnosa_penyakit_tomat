<?php  

/**
 * 
 */
/**class Penyakit_daun extends CI_Controller
{
	
	public function __construct()
	{
		parent::  __construct();
		$this->load->helper('url');
	}

	public function penyakit_pada_daun()
	{
		$data['daun'] = 'apakah di pagi hari tanaman menjadi layu .. ?';
		$data['url'] = 'penyakit_pada_daun';
		$this->load->view('templates/header');
		$this->load->view('halaman/daun', $data);

		if ($this->input->post('pertanyaan') == '') {
			redirect('penyakit_daun/pertanyaan2');
		}else{
<<<<<<< HEAD
			redirect('Penyakit_daun/pertanyaan2');
=======
			redirect('Penyakit_daun');
>>>>>>> 7873f49bff5c3ec3e6ed70bf57d0a12d9ff7f3ff
		}
	}

	public function pertanyaan2()
	{
		$data['daun'] = 'apakah di sore dan malam hari tanaman tomat segar .. ?';
		$data['url'] = 'pertanyaan2';
		$this->load->view('templates/header');
		$this->load->view('halaman/daun', $data);

		if ($this->input->post('pertanyaan') == 'ya') {
			redirect('penyakit_daun/pertanyaan3');
		}
	}

	public function pertanyaan3()
	{
		$data['daun'] = 'apakah lama kelaman tanaman tomatnya menjadi mati ?';
		$data['url'] = 'pertanyaan3';
		$this->load->view('templates/header');
		$this->load->view('halaman/daun', $data);

		if ($this->input->post('pertanyaan') == 'ya') {
			redirect('penyakit_daun/penyakit_tomat');
		}
	}

	public function penyakit_tomat()
	{
		echo "testing contribute penyakitnya adalah layu Pusaruim";
	}

}
