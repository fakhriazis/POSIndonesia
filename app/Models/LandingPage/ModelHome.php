<?php

namespace App\Models\LandingPage;

use CodeIgniter\Model;

class ModelHome extends Model
{
	public function TampilInfoGangguan()
	{
		$query = $this->db->table('help_infosementara');
		$query->select('*');
		$query->join('help_layanan', 'help_infosementara.idlayanan = help_layanan.idlayanan', 'left');
		$query->orderBy('idinfo_sementara', 'DESC');
		$query->limit('8');
		return $query->get();;
	}

	public function TampilBerita()
	{
		$query = $this->db->table('help_berita');
		$query->select('*');
		$query->join('help_user', 'help_berita.iduser = help_user.iduser', 'left');
		$query->orderBy('idberita', 'DESC');
		$query->limit('3');
		return $query->get();;
	}

	public function TampilGangguanLengkap()
	{
		$query = $this->db->table('help_info');
		$query->select('*');
		$query->join('help_responcode', 'help_info.idresponcode = help_responcode.idresponcode', 'left');
		$query->join('help_mitra', 'help_info.idmitra = help_mitra.idmitra', 'left');
		$query->join('help_layanan', 'help_info.idlayanan = help_layanan.idlayanan', 'left');
		$where = "help_info.statusinfo='1'";
		$query->where($where);
		$query->orderBy('estimasi', 'DESC');
		return $query->get();;
	}
}
