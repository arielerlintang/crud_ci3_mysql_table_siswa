<?php 
class Msiswa extends CI_Model
{
	function tampil()
	{
		$ambil = $this->db->get("siswa");
		$siswa = $ambil->result_array();
		
		return $siswa;

	}
	function hapus($id_siswa)
	{

		$this->db->where("id_siswa", $id_siswa);
		$foto = $this->db->get("siswa")->row_array();
		$fotosiswa = $foto['foto_siswa'];

		unlink('assets/files/'.$fotosiswa);

		$this->db->where("id_siswa", $id_siswa);
		$this->db->delete("siswa");

		redirect("siswa/tampil");

	}
	function tambah($inputan)
	{
		$config['upload_path']          = './assets/files/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library("upload", $config);

		$ngupload = $this->upload->do_upload("foto_siswa");

		if ($ngupload) {
			$inputan['foto_siswa'] = $this->upload->data("file_name");
		}

		$this->db->insert("siswa", $inputan);


	}
	function detail($id_siswa)
	{
		$this->db->where("id_siswa", $id_siswa);
		$detail = $this->db->get("siswa")->row_array();

		return $detail;
	}
	function ubah($inputan,$id_siswa)
	{
		$config['upload_path']          = './assets/files/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library("upload", $config);

		$ngupload = $this->upload->do_upload("foto_siswa");

		if ($ngupload) {
			$inputan['foto_siswa'] = $this->upload->data("file_name");
		}

		$this->db->where("id_siswa", $id_siswa);
		$this->db->update("siswa", $inputan);		
	}
}

?>


