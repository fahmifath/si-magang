<?php
session_start();
session_destroy();
?>
<script>
    alert("Selamat anda berhasil logout");
    location.href = "login.php";
</script>