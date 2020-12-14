<?php namespace App\Models\Admin;

use CodeIgniter\Model;

Class AdminModel extends Model
{
  public function readAll($table)
  {
    $query = $this->db->table($table);
    $query->select('*');
    return $query->get();;
  }

  public function read($table, $id_table, $id)
  {
    $query = $this->db->table($table);
    $query->select('*');
    $query->where([$id_table =>$id]);
    return $query->get();;
  }

  public function tambah($table, $data)
  {
    $builder = $this->db->table($table);
    $query = $builder->insert($data);
  }

  public function hapus($table, $id_table, $id)
  {
    $builder = $this->db->table($table);
    $query = $builder->delete([$id_table => $id]);
  }

  public function ubah($table, $id_table, $id, $data)
  {
    $builder = $this->db->table($table);
    $query = $builder->update($data, [$id_table => $id]);
  }


	// public function TampilInfoGangguan()
	// {
	// 	$query = $this->db->table('help_infosementara');
	// 	$query->select('*');
	// 	$query->join('help_layanan', 'help_infosementara.idlayanan = help_layanan.idlayanan','left');
	// 	$query->orderBy('idinfo_sementara', 'DESC');
	// 	$query->limit('8');
	// 	return $query->get();;
	// }
  //
	// public function TampilBerita()
	// {
	// 	$query = $this->db->table('help_berita');
	// 	$query->select('*');
	// 	$query->join('help_user', 'help_berita.iduser = help_user.iduser','left');
	// 	$query->orderBy('idberita', 'DESC');
	// 	$query->limit('3');
	// 	return $query->get();;
	// }
  //
	// public function TampilGangguanLengkap()
	// {
	// 	$query = $this->db->table('help_info');
	// 	$query->select('*');
	// 	$query->join('help_responcode', 'help_info.idresponcode = help_responcode.idresponcode','left');
	// 	$query->join('help_mitra', 'help_info.idmitra = help_mitra.idmitra','left');
	// 	$query->join('help_layanan', 'help_info.idlayanan = help_layanan.idlayanan','left');
	// 	$where = "help_info.statusinfo='1'";
	// 	$query->where($where);
	// 	$query->orderBy('estimasi', 'DESC');
	// 	return $query->get();;
	// }

}
