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
        // $this->db->where('nim', $id);
        // return $this->db->delete($this->table);

        // bisa juga pakai ini
        $this->db->delete($this->table, ['id' => $id]);
    }
    public function satuData($id)
    {
        return $this->db->where(['id' => $id])->get($this->table)->row_object();
    }
    public function simpanEdit($input_id, $data)
    {
        $this->db->where(['id' => $input_id])->update($this->table, $data);
    }
}
