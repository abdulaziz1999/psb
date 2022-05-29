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

    public function getJadwal(){
        $sql = "SELECT * FROM tb_jadwal_tes j JOIN tb_tahun_ajar t ON j.idtahunajar = t.id_tahun_ajar";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getByJadwal($id){
        $sql = "SELECT * FROM tb_jadwal_tes j JOIN tb_tahun_ajar t ON j.idtahunajar = t.id_tahun_ajar WHERE id_jadwal = ?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
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