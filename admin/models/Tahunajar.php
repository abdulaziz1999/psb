<?php
class Tahunajar{
    //member1 var
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function getTahunajar(){
        $sql = "SELECT * FROM tb_tahun_ajar";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getByTahunajar($id){
        $sql = "SELECT * FROM tb_tahun_ajar WHERE id_tahun_ajar = ?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO tb_tahun_ajar (tahun_ajar,status)
                VALUES (?,?)";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE tb_tahun_ajar SET tahun_ajar=?,status=? WHERE id_tahun_ajar=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM tb_tahun_ajar WHERE id_tahun_ajar=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }

    
}