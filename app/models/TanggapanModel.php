<?php

class TanggapanModel extends Controller 
{
    private $table = 'tanggapan';
    private $tabelPetugas = 'petugas';
    public function __construct() {
        $this->db = new Database;
    }
    public function ambilSemuaTanggapan()
    {
        $this->db->query("SELECT * FROM ". $this->table);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function ambilSemuaTanggapanDanPetugasnya()
    {

        $query = "SELECT * FROM 
        `".$this->table."`,
        `".$this->tabelPetugas."`
         WHERE
          `".$this->table."`.`id_petugas` = `".$this->tabelPetugas."`.`id_petugas`";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
}
