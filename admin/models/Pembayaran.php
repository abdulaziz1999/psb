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

    function tahunajarActive(){
        $sql = "SELECT id_tahun_ajar FROM tahun_ajar WHERE status = 'active'";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id_tahun_ajar'];
    }

    public function getPembayaran(){
        $sql = "SELECT id_tahun_ajar FROM tb_tahun_ajar WHERE status = 'active'";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $ta = $data['id_tahun_ajar'];

        $sql = "SELECT * FROM tb_pembayaran p 
        JOIN tb_calon_siswa c ON p.calon_siswa_id = c.id_calon_siswa 
        JOIN tb_data_siswa d ON c.siswa_id = d.id_siswa 
        WHERE c.tahun_ajar_id = $ta";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getByPembayaran($id){
        $sql = "SELECT id_tahun_ajar FROM tb_tahun_ajar WHERE status = 'active'";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $ta = $data['id_tahun_ajar'];

        $sql = "SELECT * FROM tb_pembayaran p 
        JOIN tb_calon_siswa c ON p.calon_siswa_id = c.id_calon_siswa 
        JOIN tb_data_siswa d ON c.siswa_id = d.id_siswa 
        WHERE c.tahun_ajar_id = $ta" AND "p.id_pembayaran = $id";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function getBySiswaPembayaran($id){
        $sql = "SELECT id_tahun_ajar FROM tb_tahun_ajar WHERE status = 'active'";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $ta = $data['id_tahun_ajar'];

        $sql = "SELECT * FROM tb_pembayaran p 
        JOIN tb_calon_siswa c ON p.calon_siswa_id = c.id_calon_siswa 
        JOIN tb_data_siswa d ON c.siswa_id = d.id_siswa 
        WHERE c.tahun_ajar_id = $ta" AND "p.calon_siswa_id = $id";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO tb_pembayaran(calon_siswa_id,tagihan,status_bayar,metode_pembayaran)
                VALUES (?,?,?,?)";
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