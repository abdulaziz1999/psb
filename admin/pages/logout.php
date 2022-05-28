<?php
session_destroy();
unset($_SESSION['MEMBER']);
?>
<script>
window.location.replace("http://localhost/psb/admin");
</script>
<?php