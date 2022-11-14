<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}
//Data Siswa----------------------------------------------------------------------
	public function DataSiswa()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_siswa','nis',$nis)->row();
			$data['detail']['nis']= $tampil->nis;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['alamat']= $tampil->alamat;
			$data['content']='VFormUpdateSiswa';
		}
		else
		{	
			$data['DataSiswa']=$this->MSudi->GetData('tbl_siswa');
			$data['content']='VSiswa';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSiswa()
	{
		$data['content']='VFormAddSiswa';
		$this->load->view('VBackend',$data);
	}
	public function AddDataSiswa()
	{
		 $add['nis']=$this->input->post('nis');
         	 $add['nama']= $this->input->post('nama');
         	 $add['alamat']= $this->input->post('alamat');  
        	 $this->MSudi->AddData('tbl_siswa',$add);
        	 redirect(site_url('Welcome/DataSiswa'));
	}



	public function UpdateDataSiswa()
	{
		 $nis=$this->input->post('nis');
		 $update['nama']= $this->input->post('nama');
         	 $update['alamat']= $this->input->post('alamat');
          	 $this->MSudi->UpdateData('tbl_siswa','nis',$nis,$update);
		 redirect(site_url('Welcome/DataSiswa'));
	}


	public function DeleteDataSiswa()
	{
		 $nis=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_siswa','nis',$nis);
        	 redirect(site_url('Welcome/DataSiswa'));
	}
	
//Data Profile----------------------------------------------------------------------
public function DataProfile()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_profile=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_profile','id_profile',$id_profile)->row();
			$data['detail']['id_profile']= $tampil->id_profile;
            		$data['detail']['nama_profile']= $tampil->nama_profile;
			$data['content']='VFormUpdateProfile';
		}
		else
		{	
			$data['DataProfile']=$this->MSudi->GetData('tbl_profile');
			$data['content']='VProfile';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddProfile()
	{
		$data['content']='VFormAddProfile';
		$this->load->view('VBackend',$data);
	}
	public function AddDataProfile()
	{
		 $add['id_profile']=$this->input->post('id_profile');
         	 $add['nama_profile']= $this->input->post('nama_profile');  
        	 $this->MSudi->AddData('tbl_profile',$add);
        	 redirect(site_url('Welcome/DataProfile'));
	}



	public function UpdateDataProfile()
	{
		 $id_profile=$this->input->post('id_profile');
		 $update['nama_profile']= $this->input->post('nama_profile');
          	 $this->MSudi->UpdateData('tbl_profile','id_profile',$id_profile,$update);
		 redirect(site_url('Welcome/DataProfile'));
	}


	public function DeleteDataProfile()
	{
		 $id_profile=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_profile','id_profile',$id_profile);
        	 redirect(site_url('Welcome/DataProfile'));
	}

//Data Kontak----------------------------------------------------------------------
	public function DataKontak()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_kontak=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_kontak','id_kontak',$id_kontak)->row();
			$data['detail']['id_kontak']= $tampil->id_kontak;
            		$data['detail']['nama_kontak']= $tampil->nama_kontak;
			$data['content']='VFormUpdateKontak';
		}
		else
		{	
			$data['DataKontak']=$this->MSudi->GetData('tbl_kontak');
			$data['content']='VKontak';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddKontak()
	{
		$data['content']='VFormAddKontak';
		$this->load->view('VBackend',$data);
	}
	public function AddDataKontak()
	{
		 $add['id_kontak']=$this->input->post('id_kontak');
         	 $add['nama_kontak']= $this->input->post('nama_kontak');  
        	 $this->MSudi->AddData('tbl_kontak',$add);
        	 redirect(site_url('Welcome/DataKontak'));
	}



	public function UpdateDataKontak()
	{
		 $id_kontak=$this->input->post('id_kontak');
		 $update['nama_kontak']= $this->input->post('nama_kontak');
          	 $this->MSudi->UpdateData('tbl_kontak','id_kontak',$id_kontak,$update);
		 redirect(site_url('Welcome/DataKontak'));
	}


	public function DeleteDataKontak()
	{
		 $id_kontak=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_kontak','id_kontak',$id_kontak);
        	 redirect(site_url('Welcome/DataProfile'));
	}
//Data Berita----------------------------------------------------------------------
public function DataBerita()
{

	

	if($this->uri->segment(4)=='view')
	{
		$id_berita=$this->uri->segment(3);
		$tampil=$this->MSudi->GetDataWhere('tbl_berita','id_berita',$id_berita)->row();
		$data['detail']['id_berita']= $tampil->id_berita;
				$data['detail']['nama_berita']= $tampil->nama_berita;
		$data['content']='VFormUpdateBerita';
	}
	else
	{	
		$data['DataBerita']=$this->MSudi->GetData('tbl_berita');
		$data['content']='VBerita';
	}


	$this->load->view('VBackend',$data);
}


public function VFormAddBerita()
{
	$data['content']='VFormAddBerita';
	$this->load->view('VBackend',$data);
}
public function AddDataBerita()
{
	 $add['id_berita']=$this->input->post('id_berita');
		  $add['nama_berita']= $this->input->post('nama_berita');  
		 $this->MSudi->AddData('tbl_berita',$add);
		 redirect(site_url('Welcome/DataBerita'));
}



public function UpdateDataBerita()
{
	 $id_berita=$this->input->post('id_berita');
	 $update['nama_berita']= $this->input->post('nama_berita');
		   $this->MSudi->UpdateData('tbl_berita','id_berita',$id_berita,$update);
	 redirect(site_url('Welcome/DataBerita'));
}


public function DeleteDataBerita()
{
	 $id_berita=$this->uri->segment('3');
		 $this->MSudi->DeleteData('tbl_berita','id_berita',$id_berita);
		 redirect(site_url('Welcome/DataBerita'));
}

//Data Guru----------------------------------------------------------------------
public function DataGuru()
{

	

	if($this->uri->segment(4)=='view')
	{
		$nip=$this->uri->segment(3);
		$tampil=$this->MSudi->GetDataWhere('tbl_guru','nip',$nip)->row();
		$data['detail']['nip']= $tampil->nip;
				$data['detail']['nama']= $tampil->nama;
				$data['detail']['no_hp']= $tampil->no_hp;
				$data['detail']['email']= $tampil->email;
		$data['content']='VFormUpdateGuru';
	}
	else
	{	
		$data['DataGuru']=$this->MSudi->GetData('tbl_guru');
		$data['content']='VGuru';
	}


	$this->load->view('VBackend',$data);
}


public function VFormAddGuru()
{
	$data['content']='VFormAddGuru';
	$this->load->view('VBackend',$data);
}
public function AddDataGuru()
{
	 $add['nip']=$this->input->post('nip');
		  $add['nama']= $this->input->post('nama');  
		  $add['no_hp']= $this->input->post('no_hp');  
		  $add['email']= $this->input->post('email');  
		 $this->MSudi->AddData('tbl_guru',$add);
		 redirect(site_url('Welcome/DataGuru'));
}



public function UpdateDataGuru()
{
	 $nip=$this->input->post('nip');
	 $update['nama']= $this->input->post('nama');
	 $update['no_hp']= $this->input->post('no_hp');
	 $update['email']= $this->input->post('email');
		   $this->MSudi->UpdateData('tbl_guru','nip',$nip,$update);
	 redirect(site_url('Welcome/DataGuru'));
}


public function DeleteDataGuru()
{
	 $nip=$this->uri->segment('3');
		 $this->MSudi->DeleteData('tbl_guru','nip',$nip);
		 redirect(site_url('Welcome/DataGuru'));
}

//Data Matpel----------------------------------------------------------------------
public function DataMatpel()
{

	

	if($this->uri->segment(4)=='view')
	{
		$id_matpel=$this->uri->segment(3);
		$tampil=$this->MSudi->GetDataWhere('tbl_matpel','id_matpel',$id_matpel)->row();
		$data['detail']['id_matpel']= $tampil->id_matpel;
				$data['detail']['nama_matpel']= $tampil->nama_matpel;
				$data['detail']['kkm']= $tampil->kkm;
		$data['content']='VFormUpdateMatpel';
	}
	else
	{	
		$data['DataMatpel']=$this->MSudi->GetData('tbl_matpel');
		$data['content']='VMatpel';
	}


	$this->load->view('VBackend',$data);
}


public function VFormAddMatpel()
{
	$data['content']='VFormAddMatpel';
	$this->load->view('VBackend',$data);
}
public function AddDataMatpel()
{
	 $add['id_matpel']=$this->input->post('id_matpel');
		  $add['nama_matpel']= $this->input->post('nama_matpel');  
		  $add['kkm']= $this->input->post('kkm');  
		 $this->MSudi->AddData('tbl_matpel',$add);
		 redirect(site_url('Welcome/DataMatpel'));
}



public function UpdateDataMatpel()
{
	 $id_matpel=$this->input->post('id_matpel');
	 $update['nama_matpel']= $this->input->post('nama_matpel');
	 $update['kkm']= $this->input->post('kkm');

		   $this->MSudi->UpdateData('tbl_matpel','id_matpel',$id_matpel,$update);
	 redirect(site_url('Welcome/DataMatpel'));
}


public function DeleteDataMatpel()
{
	 $id_matpel=$this->uri->segment('3');
		 $this->MSudi->DeleteData('tbl_matpel','id_matpel',$id_matpel);
		 redirect(site_url('Welcome/DataMatpel'));
}

//Data Kelas----------------------------------------------------------------------
public function DataKelas()
{

	

	if($this->uri->segment(4)=='view')
	{
		$id_kelas=$this->uri->segment(3);
		$tampil=$this->MSudi->GetDataWhere('tbl_kelas','id_kelas',$id_kelas)->row();
		$data['detail']['id_kelas']= $tampil->id_kelas;
				$data['detail']['nama_kelas']= $tampil->nama_kelas;
				
		$data['content']='VFormUpdateKelas';
	}
	else
	{	
		$data['DataKelas']=$this->MSudi->GetData('tbl_kelas');
		$data['content']='VKelas';
	}


	$this->load->view('VBackend',$data);
}


public function VFormAddKelas()
{
	$data['content']='VFormAddKelas';
	$this->load->view('VBackend',$data);
}
public function AddDataKelas()
{
	 $add['id_kelas']=$this->input->post('id_kelas');
		  $add['nama_kelas']= $this->input->post('nama_kelas');
		  
		 $this->MSudi->AddData('tbl_kelas',$add);
		 redirect(site_url('Welcome/DataKelas'));
}



public function UpdateDataKelas()
{
	 $id_kelas=$this->input->post('id_kelas');
	 $update['nama_kelas']= $this->input->post('nama_kelas');
		  
		   $this->MSudi->UpdateData('tbl_kelas','id_kelas',$id_kelas,$update);
	 redirect(site_url('Welcome/DataKelas'));
}


public function DeleteDataKelas()
{
	 $id_kelas=$this->uri->segment('3');
		 $this->MSudi->DeleteData('tbl_kelas','id_kelas',$id_kelas);
		 redirect(site_url('Welcome/DataKelas'));
}

//Data Jadwal----------------------------------------------------------------------
public function DataJadwal()
{

	

	if($this->uri->segment(4)=='view')
	{
			$data['GetKelas']=$this->MSudi->GetData('tbl_kelas');
	$data['GetMatpel']=$this->MSudi->GetData('tbl_matpel');
	$data['GetGuru']=$this->MSudi->GetData('tbl_guru');
		$id_jadwal=$this->uri->segment(3);
		$tampil=$this->MSudi->GetDataWhere('tbl_jadwal','id_jadwal',$id_jadwal)->row();
		$data['detail']['id_jadwal']= $tampil->id_jadwal;
				$data['detail']['id_kelas']= $tampil->id_kelas;
				$data['detail']['id_matpel']= $tampil->id_matpel;
				$data['detail']['nip']= $tampil->nip;
		$data['content']='VFormUpdateJadwal';
	}
	else
	{	
		$data['DataJadwal']=$this->MSudi->JoinJadwal();
		$data['content']='VJadwal';
	}


	$this->load->view('VBackend',$data);
}


public function VFormAddJadwal()
{
	$data['GetKelas']=$this->MSudi->GetData('tbl_kelas');
	$data['GetMatpel']=$this->MSudi->GetData('tbl_matpel');
	$data['GetGuru']=$this->MSudi->GetData('tbl_guru');
	$data['content']='VFormAddJadwal';
	$this->load->view('VBackend',$data);
}
public function AddDataJadwal()
{
	 $add['id_jadwal']=$this->input->post('id_jadwal');
		  $add['id_kelas']= $this->input->post('id_kelas');  
		  $add['id_matpel']= $this->input->post('id_matpel');  
		  $add['nip']= $this->input->post('nip');  
		 $this->MSudi->AddData('tbl_jadwal',$add);
		 redirect(site_url('Welcome/DataJadwal'));
}



public function UpdateDataJadwal()
{

	 $id_jadwal=$this->input->post('id_jadwal');
	 $update['id_kelas']= $this->input->post('id_kelas');
	 $update['id_matpel']= $this->input->post('id_matpel');
	 $update['nip']= $this->input->post('nip');
		   $this->MSudi->UpdateData('tbl_jadwal','id_jadwal',$id_jadwal,$update);
	 redirect(site_url('Welcome/DataJadwal'));
}


public function DeleteDataJadwal()
{
	 $id_jadwal=$this->uri->segment('3');
		 $this->MSudi->DeleteData('tbl_jadwal','id_jadwal',$id_jadwal);
		 redirect(site_url('Welcome/DataJadwal'));
}

	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}
