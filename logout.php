<?php
session_start();
session_destroy(); // Hapus semua sesi
header("Location: login1.php"); // Redirect ke halaman login
exit;
?>


