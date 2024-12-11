<?php
include '../library/dospemAct.php';
$db = new Crud;
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nidn = $_POST['nidn'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['prodi'];
    $penilaian = $_POST['penilaian'];
    $db->InsertData($nama, $nidn, $nip, $alamat, $prodi, $penilaian);
    header('location:dospemData.php');
}
?>