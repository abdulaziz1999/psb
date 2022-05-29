<?php
    @$hal = $_REQUEST['hal'];
    if(empty($hal)){
        include_once 'dashboard.php';
    }elseif ($hal == 'dashboard' || 
             $hal == 'profile' || 
             $hal == 'data_siswa' || 
             $hal == 'data_ortu' || 
             $hal == 'data_lulus' || 
             $hal == 'data_pembayaran' || 
             $hal == 'data_tahunajar' || 
             $hal == 'data_user' || 
             $hal == 'logout') {
        include_once $hal . '.php';
    } else {
        include_once '404.php';
    } 
    ?>
