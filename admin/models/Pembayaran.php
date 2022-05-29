<?php
class Pembayaran{
    //member1 var
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function simpan($data){
        $sql = "INSERT INTO tb_pembayaran(calon_siswa_id,tagihan,status_bayar,metode_pembayaran,konfirmasi)
                VALUES (?,?,?,?,?)";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE tb_pembayaran SET calon_siswa_id=?,tagihan=?,status_bayar=?,metode_pembayaran=? WHERE id_pembayaran=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM tb_pembayaran WHERE id_pembayaran=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }

}