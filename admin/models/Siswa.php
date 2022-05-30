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
        $sql = "SELECT * FROM tb_calon_siswa cs INNER JOIN tb_data_siswa ds ON cs.siswa_id = ds.id_siswa";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getBySiswa($id){
        $sql = "SELECT * FROM tb_calon_siswa cs INNER JOIN tb_data_siswa ds ON cs.siswa_id = ds.id_siswa WHERE cs.id_calon_siswa = $id";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetch();
        return $rs;
    }

    public function detailSiswa(){
        $sql = "SELECT * FROM tb_calon_siswa";
        //fungsi query eksekusi query dan ambil datanya
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    public function idtahunajar(){
        $sql3 = "SELECT id_tahun_ajar FROM tb_tahun_ajar WHERE status = 'active'";
        $stmt = $this->koneksi->prepare($sql3);
        $stmt->execute();
        $data1 = $stmt->fetch(PDO::FETCH_ASSOC);
        $ta = $data1['id_tahun_ajar'];
        return $ta;
    }

    public function idjadwaltes($jenjang){
        $sql3 = "SELECT * FROM tb_jadwal_tes WHERE status = 'active' AND kategori = '$jenjang'";
        $ps = $this->koneksi->prepare($sql3);
        $ps->execute();
        $rs = $ps->fetch();
        $ta = $rs['id_jadwal'];
        return $ta;
    }

    public function simpan($data,$data2){
        $sql = "INSERT INTO tb_data_siswa (nisn, nama, jk, no_hp, tmp_lahir, tgl_lahir, foto, alamat) VALUES (?,?,?,?,?,?,?,?)";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $id = $this->koneksi->lastInsertId();

        $arraySiswa = $data2;
        $arraySiswa['siswa_id'] = $id;
        $sql2 = "INSERT INTO tb_calon_siswa (tahun_ajar_id, jadwaltes_id, siswa_id, jenjang, asal_sekolah) VALUES ('".$arraySiswa['tahun_ajar_id']."','".$arraySiswa['jadwaltes_id']."','".$arraySiswa['siswa_id']."','".$arraySiswa['jenjang']."','".$arraySiswa['asal_sekolah']."')";
        //prepare statement
        $cek = $this->koneksi->prepare($sql2);
        $cek->execute($data);        
    }

    public function ubah($data){
        $sql = "UPDATE tb_data_siswa SET nisn=?, nama=?, jk=?, no_hp=?, tmp_lahir=?, tgl_lahir=?, foto=?, alamat=? WHERE id_siswa=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM tb_data_siswa WHERE id_siswa=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }

    
}