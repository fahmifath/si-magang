<?php
include '../layouts/header.php';
// include 'layouts/nav.php';
include '../library/prodiAct.php';

$db = new Crud;

if (isset($_POST['submit'])) {
    $prodi = $_POST['prodi'];
    $jenjang = $_POST['jenjang'];
    $db->InsertData($prodi, $jenjang);
    header('location:prodiData.php'); ?>
<?php
}
?>

<?php
include '../layouts/footer.php';
?>