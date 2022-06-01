<?php
session_destroy();
unset($_SESSION['MEMBER']);
echo '<script>
    window.setTimeout(function() {
        window.location.href = "'.$base_url.'/psb/admin";
    }, 1);
    </script>';
?>