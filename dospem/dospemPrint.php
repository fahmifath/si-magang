<?php

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$activeWorksheet = $spreadsheet->getActiveSheet();


$activeWorksheet->setCellValue('A1', 'DATA DOSEN PEMBIMBING');
$activeWorksheet->setCellValue('A3', 'No');
$activeWorksheet->setCellValue('B3', 'Nama');
$activeWorksheet->setCellValue('C3', 'NIDN');
$activeWorksheet->setCellValue('D3', 'NIP');
$activeWorksheet->setCellValue('E3', 'Alamat');
$activeWorksheet->setCellValue('F3', 'Prodi');
$activeWorksheet->setCellValue('G3', 'Penilaian');

include '../library/dospemAct.php';

$crud = new Crud();
$data = $crud->ShowAllData();

$no = 1;
$baris = 4;
foreach ($data as $key => $value) {
    $activeWorksheet->setCellValue('A' . $baris, $no);
    $activeWorksheet->setCellValue('B' . $baris, $value['nama_dospem']);
    $activeWorksheet->setCellValue('C' . $baris, $value['nidn']);
    $activeWorksheet->setCellValue('D' . $baris, $value['nip']);
    $activeWorksheet->setCellValue('E' . $baris, $value['alamat']);
    $activeWorksheet->setCellValue('F' . $baris, $value['prodi']);
    $activeWorksheet->setCellValue('G' . $baris, $value['penilaian']);

    $no++;
    $baris++;
}

$writer = new Xlsx($spreadsheet);
$writer->save('dospemData.xlsx');
header('Location: dospemData.xlsx');
