<?php
    session_start();
    if (!isset($_SESSION['user'])){
        header('location:login.php');
    }
    include '../layouts/header.php';
    include '../layouts/nav.php';
?>
<!-- <h1 class="text-gray-900 text-center text-3xl justify-center font-semibold">Selamat datang di website sistem informasi magang</h1> -->
<?php
    include '../layouts/footer.php';
?>