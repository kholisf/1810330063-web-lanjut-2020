<?php
class m_mahasiswa extends CI_Model
{
    private $table = 'mahasiswa';
    public function semuadata()
    {
        // di web dasar semsester 4
        // get == select * from mahasiswa
        // result == mysql_fetch_object()
        return $this->db->get($this->table)->result();
    }
    public function simpanData($data)
    {
        $this->db->insert($this->table, $data);
    }
    public function hapusdata($id)
    {
        $this->db->where('nim', $id);
        return $this->db->delete($this->table);
    }
}
