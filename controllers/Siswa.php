<?php 
class Siswa extends CI_Controller
{
	function tampil()
	{
		$this->load->model("Msiswa");

		$data['siswa'] = $this->Msiswa->tampil();

		$this->load->view("siswa_tampil", $data);
	}
	function hapus($id_siswa)
	{
		$this->load->model("Msiswa");

		$this->Msiswa->hapus($id_siswa);


	}
	function tambah()
	{	
		$inputan = $this->input->post();
		if ($inputan) {
			$this->load->model("Msiswa");

			$this->Msiswa->tambah($inputan);

			redirect("siswa/tampil");
		}
		$this->load->view("siswa_tambah");

	}
	function detail($id_siswa)
	{
		$this->load->model("Msiswa");

		$data['siswa'] = $this->Msiswa->detail($id_siswa);

		$this->load->view("siswa_detail", $data);
	}
	function ubah($id_siswa)
	{
		$this->load->model("Msiswa");

		$data['siswa'] = $this->Msiswa->detail($id_siswa);

		$inputan = $this->input->post();
		if ($inputan) {
			$this->load->model("Msiswa");

			$this->Msiswa->ubah($inputan,$id_siswa);

			redirect("siswa/tampil");
		}

		$this->load->view("siswa_ubah", $data);	
	}
}
?>
