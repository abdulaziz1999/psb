<?php
class Pegawai{
    //member1 var
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    //member3 method CRUD
    public function dataPegawai(){
        $sql = "SELECT *,tb_divisi.nama as nama_divisi,tb_pegawai.id as id_pegawai,tb_pegawai.nama FROM tb_pegawai
                INNER JOIN tb_divisi ON tb_divisi.id = tb_pegawai.iddivisi
                ORDER BY tb_pegawai.id DESC";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getPegawai($id){
        $sql = "SELECT *,tb_divisi.nama as nama_divisi,tb_pegawai.id as id_pegawai,tb_pegawai.nama FROM tb_pegawai
                INNER JOIN tb_divisi ON tb_divisi.id = tb_pegawai.iddivisi
                WHERE tb_pegawai.id = ?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function dataDivisi(){
        $sql = "SELECT * FROM tb_divisi ";
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