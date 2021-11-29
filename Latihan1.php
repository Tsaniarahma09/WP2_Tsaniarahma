<?php
class Latihan1 extends CI_Controller
{
	public function index()
	{
		echo "<b><h2>Selamat Datang.. Selamat belajar web programming</h2><b>";
	}

	public function penjumlahan($nil1, $nil2)
	{
		/*$this->load->model('model_Latihan1');
		$hasil = $this->model_Latihan1->jumlah($nil1, $nil2);
		echo "Hasil penjumlahan dari " . $nil1 . " + " . $nil2 . " = " . $hasil;
		*/

		$this->load->model('model_Latihan1');
		$data['nilai1'] = $nil1;
		$data['nilai2'] = $nil2;
		$data['hasil'] = $this->model_Latihan1->jumlah($nil1, $nil2);

		$this->load->view('view-Latihan1' , $data);
	}
}