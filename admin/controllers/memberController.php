<?php
session_start();
require_once '../config/database.php';
require_once '../models/Member.php';
require_once '../views/hal/host.php';
//1.tangkap request element form
@$username = $_POST['username'];
@$password = $_POST['password'];
//2.menyimpan data2 di atas sebuah array
$data = [
    $username, //? 1
    $password, //? 2
];
//3.proses
$obj = new Member();
$rs = $obj->cekLogin($data);
if(!empty($rs)){
    //simpan session
    $_SESSION['MEMBER'] = $rs;
    @$user = $_SESSION['MEMBER'];
    @$role = $user['role'];
    if($role == 'admin'){
        header('Location:'.$base_url.'/psb/admin/dash.php'); 
    }else{
        header('Location:'.$base_url.'/psb/admin/dash.php'); 
    }
}
else{
    //landing page
    echo '<script>alert("Username atau Password Salah");
    window.setTimeout(function() {
        window.location.href = "'.$base_url.'/psb/admin";
    }, 10);
    </script>';
}
