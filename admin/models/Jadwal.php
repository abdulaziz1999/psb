<?php
class Jadwal{
    //member1 var
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function simpan($data){
        $sql = "INSERT INTO tb_jadwal_tes (tgl,kategori,kuota,info,idtahunajar)
                VALUES (?,?,?,?,?)";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE tb_jadwal_tes SET tgl=?,kategori=?,kuota=?,info=?,idtahunajar=? WHERE id_jadwal=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM tb_jadwal_tes WHERE id_jadwal=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }

    
}