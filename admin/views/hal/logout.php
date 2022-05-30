<?php
session_destroy();
unset($_SESSION['MEMBER']);
?>
<script>
window.location.replace($base_url."/psb/admin");
</script>
<?php