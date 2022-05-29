<?php
session_start();
@$user = $_SESSION['MEMBER'];
@$role = $user['role'];
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
 
  