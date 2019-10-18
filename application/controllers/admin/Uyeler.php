<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {
	public function __construct()
    {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				
				if(!$this->session->userdata("admin_session"))//login olup olmadığının kontrolü
				redirect(base_url().'admin/login');
    }
	public function index()
	{
		$query=$this->db->query("SELECT * FROM uyeler ORDER BY adsoy");
		$data["veriler"]=$query->result();
	    $this->load->view('admin\uyeler_liste',$data);
	}
	public function ekle()
	{
		
	    $this->load->view('admin\uyeler_ekle');
	}
	public function ekle_kaydet()
	{
		//Form Verilerini alıyoruz
	    $data=array(
		     'adsoy' => $this->input->post('adsoy'),
			 'email' => $this->input->post('email'),
			 'sehir' => $this->input->post('sehir'),
			 'tel' => $this->input->post('tel'),
			 'adres' => $this->input->post('adres'),
			 'durum' => $this->input->post('durum'),
			 'yetki' => $this->input->post('yetki'),
			 'sifre' => $this->input->post('sifre')
	    );
		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi");
		redirect(base_url().'admin/uyeler');
	}
	public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM uyeler WHERE id=$id");
		$data["veri"]=$query->result();
	    $this->load->view('admin\uyeler_duzenle_formu',$data);
	}
	public function guncelle($id)
	{
		//Form Verilerini alıyoruz
	    $data=array(
		     'adsoy' => $this->input->post('adsoy'),
			 'email' => $this->input->post('email'),
			 'sehir' => $this->input->post('sehir'),
			 'tel' => $this->input->post('tel'),
			 'adres' => $this->input->post('adres'),
			 'durum' => $this->input->post('durum'),
			 'yetki' => $this->input->post('yetki'),
			 'sifre' => $this->input->post('sifre')
	    );
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("uyeler",$data,$id);
		
		redirect(base_url().'admin/uyeler');
	}
	public function sil($id)
	{
		$this->db->query("DELETE FROM uyeler WHERE id=$id");
		
		redirect(base_url().'admin/uyeler');
	}
	public function admin_liste()
	{
		$query=$this->db->query("SELECT * FROM admin ");
		$data["veriler"]=$query->result();
	    $this->load->view('admin\adminler_liste',$data);
	}
	public function adminekle()
	{
	    $this->load->view('admin\adminler_ekle');
	}
	public function admin_ekle()
	{
		//Form Verilerini alıyoruz
	    $data=array(
		     'adsoy' => $this->input->post('adsoy'),
			 'email' => $this->input->post('email'),
			 'durum' => $this->input->post('durum'),
			 'yetki' => $this->input->post('yetki'),
			 'sifre' => $this->input->post('sifre')
	    );
		$this->db->insert("admin",$data);
		$this->session->set_flashdata("mesaj","Admin kaydı gerçekleştirildi");
		redirect(base_url().'admin\uyeler\admin_liste');
	}
}
?>