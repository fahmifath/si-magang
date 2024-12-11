<?php
include '../library/prodiAct.php';
$id =$_GET['id'];
$db = new Crud;
$db->DeleteData($id);
header('location:prodiData.php');
?>