<?php
session_start();
@$user = $_SESSION['MEMBER'];
@$role = $user['role'];
$base_url = "http://localhost/";


if(@$_GET['hal'] != 'logout'){
  if (!$user) {
    echo '<script>
    alert("Anda tidak memiliki akses kesini");
    window.setTimeout(function() {
        window.location.href = "'.$base_url.'/psb/admin";
    }, 1);
    </script>';
  }
}

?>
  <?php require_once 'config/database.php'?>
  <?php include_once 'views/layout/script_atas.php'?>
  <?php include_once 'views/layout/aside.php'?>
  <main class="main-content position-relative border-radius-lg ">
    <?php include_once 'views/layout/nav.php'?>
    <?php include_once 'views/hal/main.php'?>
    <?php include_once 'views/layout/footer.php'?>
  </main>
  <?php include_once 'views/layout/setting.php'?>
  <?php include_once 'views/layout/script_bawah.php'?>
 
  