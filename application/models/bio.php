<?php
class Bio extends CI_Model {
	public function getdata()
	{
		$biodata = array(
			'nama' => "Muhammad Satria Ramadhana Pratama",
			'panggilan' => "Satria",
			'ign' => "str404, whoami",
			'ttl' => "Malang, 18 Januari 1998",
			'umur' => "20 tahun",
			'anak' => "1",
			'saudara' => "4",
			'alamat' => "Villa Sengkaling Blok GG-21",
			'hobi' => "Membaca, bermain game",
			'pendidikan' => "SD(MIN Malang 1), SMP(MTsN Malang 1), SMA(SMAN 9 Malang), D3(Politeknik Negeri Malang)"
		 	
		 );
		return $biodata;
	}
}
?>