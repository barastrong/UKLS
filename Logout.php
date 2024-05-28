<?php
session_start();
session_destroy();
echo "<script>
    alert('Omedetōgozaimasu, Anda Telah Logout');
    window.location.href = 'index.php';
</script>";
?>
