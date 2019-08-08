<?php

# MEMBUAT KONEKSI KE DATABASE
mysql_connect('localhost',"root",'');
mysql_select_db('sekolah');

# MENGAMBIL DATA DARI DATABASE MYSQL
$siswa = mysql_query("SELECT * FROM siswa ");


/** Include PHPExcel */
require_once dirname(__FILE__) . '/PHPExcel/PHPExcel.php';

$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Mastrayasa")
							->setLastModifiedBy("Mastrayasa")
							->setTitle("Data Siswa")
							->setSubject("Siswa")
							->setDescription("Data siswa tahun ajaran 2015/2016")
							->setKeywords("sibangStudio PHPExcel php")
							->setCategory("Umum");
// mulai dari baris ke 2
$row = 2;

// Tulis judul tabel
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$row, 'Nomor Urut')
            ->setCellValue('B'.$row, 'NIS')
            ->setCellValue('C'.$row, 'Nama')
            ->setCellValue('D'.$row, 'Jenis Kelamin')
            ->setCellValue('E'.$row, 'Alamat')
            ->setCellValue('F'.$row, 'Kelas');

$nomor 	= 1; // set nomor urut = 1;

$row++; // pindah ke row bawahnya. (ke row 2)

// lakukan perulangan untuk menuliskan data siswa
while( $data = mysql_fetch_array($siswa)){
	$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$row,  $nomor )
            ->setCellValue('B'.$row, $data['nis'] )
            ->setCellValue('C'.$row, $data['nama'] )
            ->setCellValue('D'.$row, $data['jenis_kelamin'] )
            ->setCellValue('E'.$row, $data['alamat'] )
            ->setCellValue('F'.$row, $data['kelas'] );
			
	$row++; // pindah ke row bawahnya ($row + 1)
	$nomor++;
}

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Siswa');

// Set sheet yang aktif adalah index pertama, jadi saat dibuka akan langsung fokus ke sheet pertama
$objPHPExcel->setActiveSheetIndex(0);


// Download (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 

$objWriter->save('php://output');
exit;

?>