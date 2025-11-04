<?php
session_start();
if(session_destroy()) {
    echo "<script>alert('Berjaya Log Keluar'); window.location.href = 'lgpg.php';</script>";
}
?>
