<?php
include '../library/mahasiswaAct.php';
$id = $_GET['id'];
$db = new Crud;
$db->DeleteData($id);
header('location:mahasiswaData.php');
?>