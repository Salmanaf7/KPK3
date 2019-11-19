<?php
      
include 'PHPExcel/PHPExcel.php';
include 'aksi_koneksi.php';
  $tgl_sekarang = date("d F Y");
  $obj = new PHPExcel();

  $obj->setActiveSheetIndex(0);

  $obj->getActiveSheet()
    ->setCellValue('A1', 'Data Transaksi');
  $obj->getActiveSheet()->mergeCells('A1:D1');
  $obj->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
  $obj->getActiveSheet()->getStyle('A1')->getFont()->setSize(18); // Set font size 15 untuk kolom A1
  $obj->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
  
  $obj->getActiveSheet()
    ->setCellValue('A2', "$tgl_sekarang")
    ->setCellValue('A3', 'ID NELAYAN')
    ->setCellValue('B3', 'TGL TRANSAKSI')
    ->setCellValue('C3', 'JAM KELUAR')
    ->setCellValue('D3', 'PEMBAYARAN');

    $numrow = 4;

    $q = "SELECT * FROM pemantauan";
    $result = mysqli_query($koneksi,$q);
    while($row = mysqli_fetch_array($result)){
      $obj->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $row[1]);
      $obj->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $row[2]);
      $obj->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $row[3]);
      $obj->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $row[4]);
      $numrow++;
    }

$obj->getActiveSheet()->getColumnDimension('A')->setWidth(25); // Set width kolom A
$obj->getActiveSheet()->getColumnDimension('B')->setWidth(25); // Set width kolom B
$obj->getActiveSheet()->getColumnDimension('C')->setWidth(20); // Set width kolom C
$obj->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D

    $obj->getActiveSheet()->setTitle('Data Transaksi'); 
  $file = 'Data Transaksi';

  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment;filename="'.$file.'.xlsx"');

  $output = PHPExcel_IOFactory::createWriter($obj, 'Excel2007');
  $output -> save('php://output');
?>