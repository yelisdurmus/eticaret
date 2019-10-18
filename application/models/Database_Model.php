<?php
class Database_Model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
    public function login ($tablo,$email,$sifre)
	{
     $this->db->select("*");
	 $this->db->from($tablo);
	 $this->db->where('email', $email);
	 $this->db->where('sifre', $sifre);
	 $this->db->where('durum',"aktif");
	 $this->db->limit(1);
	 $query = $this->db->get();
	 
	 if($query->num_rows() == 1){
		 return $query->result();
	 }else{
		 return false;
	 }
	}
		public function insert_data($table,$data){
		$this->db->insert($table,$data);
		return true;
		
	}	
	public function update_data($table,$data,$id) //id si ve datası gönderilen verileri günceller
	{   
		$this->db->where('id',$id);
		$this->db->update($table,$data);
		return true;
	}
	function get_urunler()
	{
		$query=$this->db->query('SELECT urunler.*,kategoriler.adi as katadi
		FROM urunler
		LEFT JOIN kategoriler ON urunler.kategori=kategoriler.id
		order by adi' );
		return $query->result();
	}
	function sepet_urunler($id)
	{
		$query=$this->db->query('SELECT sepet.*,urunler.resim as urunresim, urunler.adi as urunadi, urunler.sfiyat as satfiyat
		FROM sepet
		LEFT JOIN urunler ON urunler.id=sepet.urun_id
		WHERE sepet.musteri_id='.$id);
		return $query->result();
	}
	function get_urun($id)
	{
		$query = $this->db->query('SELECT urunler.*, kategoriler.adi as katadi
		FROM urunler
		LEFT JOIN kategoriler ON urunler.kategori=kategoriler.id
		WHERE urunler.id='.$id);
		return $query->result();
	}
	function get_urunx($id)
	{
		$query= $this->db->query('SELECT urunler.* , kategoriler.adi as katadi
		FROM urunler
		INNER JOIN kategoriler ON  urunler.kategori=kategoriler.id
		WHERE urunler.kategori='.$id);
		
		return $query->result();
		
		
	}
}
?>