<?php
include '../layouts/header.php';
// include 'layouts/nav.php';
include '../library/mahasiswaAct.php';

$db = new Crud;
$prodi = $db->ShowDataProdi();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $db->InsertData($nama, $npm, $prodi, $alamat, $email);
    header('location:mahasiswaData.php'); ?>
<?php
}
?>


<?php
include '../layouts/footer.php';
?>