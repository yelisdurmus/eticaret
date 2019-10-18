<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
		        parent::__construct();
                // Your own constructor code
				$this->load->model('Database_Model');
				$this->load->helper('url');
    }
	public function index()
	{
		$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet" );
		$data["sepet"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler ORDER BY id DESC LIMIT 3");
		$data["yeni"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 6");
		$data["random"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler WHERE kategori='1'");
		$data["telefon"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler WHERE kategori='2'");
		$data["bilgisayar"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler WHERE kategori='3'");
		$data["televizyon"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler WHERE kategori='4'");
		$data["kamera"]=$query->result();
	
	     //------>>>>Header meta tag bilgileri
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Anasayfa";
		$data["menu"]="anasayfa";
		//------<<<<<<------------
		
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_sidebar');
		$this->load->view('_content');		
		$this->load->view('_footer');
	}
	public function hakkimizda()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
		$data["sepet"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Hakkımızda";
		$data["menu"]="hakkimizda";
		
		$this->load->view('_header',$data);
	    $this->load->view('hakkimizda');
		$this->load->view('_footer');
	}
	public function iletisim()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		
		 $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
		$data["sepet"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();		
		$data["sayfa"]="İletişim";
		$data["menu"]="iletisim";
		
	    $this->load->view('iletisim',$data);
	
	}
	public function bize_yazin()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		
		 $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
		$data["sepet"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();		
		$data["sayfa"]="BİZE YAZIN";
		$data["menu"]="bize_yazin";
		
	    $this->load->view('bize_yazin',$data);
	
	}
	public function telefon()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();		
		$data["sayfa"]="Kategoriler | Telefon";
		$data["menu"]="telefon";
		$query=$this->db->query("SELECT * FROM urunler WHERE kategori='1'");
		$data["telefon"]=$query->result();
	    $this->load->view('telefon',$data);
	
	}
	public function bilgisayar()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();		
		$data["sayfa"]="Kategoriler | Bilgisayar";
		$data["menu"]="telefon";
		$query=$this->db->query("SELECT * FROM urunler WHERE kategori='2'");
		$data["bilgisayar"]=$query->result();
	    $this->load->view('bilgisayar',$data);
	
	}
	public function televizyon()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();		
		$data["sayfa"]="Kategoriler | Televizyon";
		$data["menu"]="fotograf";
		$query=$this->db->query("SELECT * FROM urunler WHERE kategori='3'");
		$data["televizyon"]=$query->result();
	    $this->load->view('televizyon',$data);
	
	}
	public function fotograf()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();		
		$data["sayfa"]="Kategoriler | Fotograf & Resim";
		$data["menu"]="fotograf";
		$query=$this->db->query("SELECT * FROM urunler WHERE kategori='4'");
		$data["fotograf"]=$query->result();
	    $this->load->view('fotograf',$data);
	
	}
	
	public function mesaj_kaydet()
	{
		//Form Verilerini alıyoruz
	    $data=array(
		     'adsoy' => $this->input->post('adsoy'),
			 'email' => $this->input->post('eposta'),
			 'tel' => $this->input->post('tel'),
			 'mesaj' => $this->input->post('mesaj'),
			 'ip' => $_SERVER['REMOTE_ADDR']
	    );
		$this->db->insert("mesajlar",$data);
		
		$adsoy=$this->input->post("adsoy");
		$email=$this->input->post("eposta");
		
		//Email ayarlarını veritabanından okuma
		$query=$this->db->get("ayarlar"); //ayarlar tablosunu veri tabanından çek
		$data["veri"]=$query->result();//Sonuçları veri değişkenine yükle
		
		//Email server ayarları
		$config = array(
		 'protocol'=> 'smtp',
		 'smtp_host'=> $data["veri"][0]->smtpserver,
		 'smtp_port'=> $data["veri"][0]->smtpport,
		 'smtp_user'=> $data["veri"][0]->amtpemail,
		 'smtp_pass'=> $data["veri"][0]->password,
		 'mailtype'=>'html',
		 'charset'=>'utf-8',
		 'wordwrap'=>TRUE
		 );
		
		$this->session->set_flashdata("mesaj","<p align='center'>Mesajınız başarılı bir şekilde gönderilmiştir 
		En kısa sürede sizinle iletişime geçilecektir</p>");
		redirect(base_url().'home/bize_yazin');
	}
	public function register()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();		
		$data["sayfa"]="Kayıt Ol";
		$data["menu"]="register";
		
	    $this->load->view('register',$data);
	
	}
	public function login_ol()
	{
		$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
		$data["sepet"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();		
		$data["sayfa"]="Uye Login";
		$data["menu"]="uye";
		
	    $this->load->view('login_ol',$data);
	
	}
	public function login()
	{
		$email=$this->input->post("eposta");
		$sifre=$this->input->post("sifre");
		
		//Zararlı kodlardan temizliyoruz
		echo $email = $this->security->xss_clean($email);
		echo $sifre = $this->security->xss_clean($sifre);
		//exit();
		$this->load->model('Database_Model');
	    $result = $this->Database_Model->login('uyeler',$email,$sifre);
		
		if($result)
		{
		 //kullanıcı var ise bilgileri diziye aktarılıyor
		 $sess_array= array(
		 'id'=> $result[0]->id,
		 'yetki'=> $result[0]->yetki,
		 'email'=> $result[0]->email,
		 'adsoy'=> $result[0]->adsoy,
		 'resim'=> $result[0]->resim
		 );
		 print_r($ses_array);
		 echo "Login oldu";
		 //exit();
		 $this->session->set_userdata("uye_session",$sess_array);
		 redirect(base_url());
        }
		else
		{
			$this->session->set_flashdata("mesaj","Hatalı kullanıcı adı veya sifre !!");
			//echo "Hata var";
			redirect(base_url().'home/login_ol');
		}
    }
	public function login_cik()
	{
		
	    $this->session->unset_userdata("uye_session");
		redirect(base_url());
	
	}
	public function ekle_kaydet()
	{
		//Form Verilerini alıyoruz
	    $data=array(
		     'adsoy' => $this->input->post('adsoy'),
			 'email' => $this->input->post('email'),
			 'sifre' => $this->input->post('sifre')
	    );
		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi");
		redirect(base_url().'home/login_ol');
	}
	public function urundetay($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();		
		$data["menu"]="urun";
		$data["sayfa"]=null;
		
	    $data["veri"]=$this->Database_Model->get_urun($id);
		
		$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id");
		$data["resimler"]= $query->result();
		
		$query=$this->db->query("SELECT * FROM yorumlar WHERE urun_id=$id");
		$data["yorum"]=$query->result();
		
		$this->load->view('urun_detay',$data);
		
	}
	public function siparisler($durum)
	{
		$query=$this->db->query("SELECT * FROM siparis WHERE siparisdurumu='$durum'");
		$data["veriler"]=$query->result();
		$this->load->view('siparisler_listesi',$data); 
		
	}
	 public function yorum_kaydet()
	{
	   //form verileri alınacak
	   $data=array(
	   'adsoy' => $this->input->post('adsoy'),
	   'email' => $this->input->post('eposta'),
	   'yorum' => $this->input->post('yorum'),
	   'musteri_id' => $this->input->post('musteri_id'),
	   'urun_id' => $this->input->post('urun_id')
  
	   );
	   
	   $this->db->insert("yorumlar",$data);

		
		$query=$this->db->get("ayarlar"); //settings tablosunun vertabanından çek
		$data["veri"]=$query->result();
		$this->session->set_flashdata("mesaj","Yorumunuz gönderilmiştir."); 
		redirect(base_url().'home');
	}
	public function yorumlar($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Yorumlarım || ";
		$data["menu"]="uye";
		$query=$this->db->query("SELECT * FROM yorumlar Where musteri_id=$id");
		$data["veriler"]=$query->result();
		
		$this->load->view('yorumlar',$data);
	}
	
		 public function yorum_ekle()
	{
		$data=array(
		'konu' => $this->input->post('konu'),
		'yorum' => $this->input->post('yorum'),
		'urun_id' => $this->input->post('urun_id'),
		'musteri_id' => $this->input->post('musteri_id'),
		'musteri_adi' => $this->input->post('musteri_adi'),
		);
		$this->load->model('Database_Model');
		$this->Database_Model->insert_data("yorumlar",$data);
		
		redirect(base_url().'home');
		
	}
}
?>