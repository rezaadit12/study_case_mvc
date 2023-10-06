<?php

class Pinjam_model{

    private $table = 'pinjam_barang';   
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getName()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getDataBy($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahData($data)
    {
        

        $tglMulai = $data['tglMulai'];
        $tglSelesai = date('Y-m-d H:i:s', strtotime($tglMulai . ' +2 days'));

        $query = "INSERT INTO $this->table
                    VALUE
                    ('', :nama, :jenis, :nomor, :tglMulai, :tglSelesai)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('nomor', $data['nomor']);
        $this->db->bind('tglMulai', $data['tglMulai']);
        $this->db->bind('tglSelesai', $tglSelesai);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editData($data)
    {
        $query = "UPDATE $this->table
                    SET
                    nama_peminjam = :nama,
                    jenis_barang = :jenis,
                    no_barang = :nomor,
                    tgl_pinjam = :tglMulai,
                    tgl_kembali = :tglSelesai
                    WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('nomor', $data['nomor']);
        $this->db->bind('tglMulai', $data['tglMulai']);
        $this->db->bind('tglSelesai', $data['tglSelesai']);
        $this->db->bind('id', $data['id']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusById($id)
    {
        $this->db->query("DELETE FROM $this->table WHERE id = :id");
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariData()
    {
        $keyword = $_POST['keyword'];

        $query = "SELECT * FROM $this->table WHERE nama_peminjam LIKE :keyword || jenis_barang LIKE :keyword";
        
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%"); 

        return $this->db->resultSet();
    }



}

