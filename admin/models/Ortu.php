<?php
class Ortu{
    //member1 var
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    
    public function simpan($data){
        $sql = "INSERT INTO tb_data_ortu(`id_ortu`, `idsiswa`, `nik`, `nama`, `ortu`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `pekerjaan`, `pendidikan`)
                VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE tb_data_ortu SET idsiswa=?,nik=?,nama=?,ortu=?,no_hp=?,tempat_lahir=?,tanggal_lahir=?,alamat=?,pekerjaan=?,pendidikan=? WHERE id_ortu=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM tb_data_ortu WHERE id_ortu=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }

    
}