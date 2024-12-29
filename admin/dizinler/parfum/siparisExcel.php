<?php
include("../../php/connect3.php");
require_once 'PHPExcel/PHPExcel.php';


$objPHPExcel = new PHPExcel();
$styleArray = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => 'e74c3c'),
    ));
$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('C1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('D1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('E1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('F1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('G1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('H1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('I1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('J1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('K1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('L1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('M1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('N1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('O1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('P1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('Q1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('R1')->applyFromArray($styleArray);

$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth('15');
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth('12');
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth('50');
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth('15');
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth('100');


$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Isım');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Ilce');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Il');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Adres');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Telefon');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Kurye');
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'Mus_Barkod');
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'Fiyat');
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'Urun_Adi');
$objPHPExcel->getActiveSheet()->setCellValue('J1', 'Adet');
$objPHPExcel->getActiveSheet()->setCellValue('K1', 'Desi');
$objPHPExcel->getActiveSheet()->setCellValue('L1', 'Ambalaj');
$objPHPExcel->getActiveSheet()->setCellValue('M1', 'Tahsilat');
$objPHPExcel->getActiveSheet()->setCellValue('N1', 'Odeme');
$objPHPExcel->getActiveSheet()->setCellValue('O1', 'KDV');
$objPHPExcel->getActiveSheet()->setCellValue('P1', 'Siparis_No');
$objPHPExcel->getActiveSheet()->setCellValue('Q1', 'Ptt veya ups veya aras barkod');
$objPHPExcel->getActiveSheet()->setCellValue('R1', 'Plasiyer');

/*İçerik */
$tur = 2;
$query = $conn->query("SELECT * FROM parfum WHERE kayitYontemi='onay'", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){


     	$urunler = "";
		$urunler = str_replace("_"," ",str_replace("__"," - ",$row["urun"]))." - ".str_replace("_"," ",str_replace("__"," - ",$row["hediye"]));	

     	$objPHPExcel->getActiveSheet()->setCellValue("A$tur", $row["adSoyad"]);
		$objPHPExcel->getActiveSheet()->setCellValue("B$tur", $row["ilce"]);
		$objPHPExcel->getActiveSheet()->setCellValue("C$tur", $row["sehir"]);
		$objPHPExcel->getActiveSheet()->setCellValue("D$tur", $row["adres"]);
		$objPHPExcel->getActiveSheet()->setCellValue("E$tur", $row["telefon"]);
		$objPHPExcel->getActiveSheet()->setCellValue("F$tur", "BEY");
		$objPHPExcel->getActiveSheet()->setCellValue("G$tur", " ");
		$objPHPExcel->getActiveSheet()->setCellValue("H$tur", $row["siparisTutar"]);
		$objPHPExcel->getActiveSheet()->setCellValue("I$tur", $urunler);
		$objPHPExcel->getActiveSheet()->setCellValue("J$tur", "1");
		$objPHPExcel->getActiveSheet()->setCellValue("K$tur", " ");
		$objPHPExcel->getActiveSheet()->setCellValue("L$tur", "2");
		$objPHPExcel->getActiveSheet()->setCellValue("M$tur", "6");
		$objPHPExcel->getActiveSheet()->setCellValue("N$tur", " ");
		$objPHPExcel->getActiveSheet()->setCellValue("O$tur", "8");
		$objPHPExcel->getActiveSheet()->setCellValue("P$tur", " ");
		$objPHPExcel->getActiveSheet()->setCellValue("Q$tur", " ");
		$objPHPExcel->getActiveSheet()->setCellValue("R$tur", " ");
		$tur++;
    }
}

$tarih = date("d-m-Y");
$tarih = $tarih.".xlsx";

$objPHPExcel->getActiveSheet()->setTitle('Siparisler');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename='.$tarih);
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');

?>