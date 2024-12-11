<?php
include '../library/dospemAct.php';
$id = $_GET['id'];
$db = new Crud;
$db->DeleteData($id);
header('location:dospemData.php');
?>