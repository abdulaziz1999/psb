<?php
class Siswa{
    //member1 var
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    //member3 method CRUD
    public function getSiswa(){
        $sql = "SELECT * FROM tb_calon_siswa cs INNER JOIN tb_data_siswa ds ON cs.id_calon_siswa = ds.id_siswa";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getPegawai($id){
        $sql = "SELECT * FROM tb_calon_siswa cs INNER JOIN tb_data_siswa ds ON cs.id_calon_siswa = ds.id_siswa WHERE cs.id_calon_siswa = ?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function detailSiswa(){
        $sql = "SELECT * FROM tb_calon_siswa";
        //fungsi query eksekusi query dan ambil datanya
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO tb_pegawai(nip,nama,email,agama,iddivisi,foto)
                VALUES (?,?,?,?,?,?)";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE tb_pegawai SET nip=?,nama=?,email=?,agama=?,
                iddivisi=?,foto=? WHERE id=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM tb_pegawai WHERE id=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }

    
}