<?php
error_reporting(0);
include ('class.ezpdf.php');
include "rupiah.php";
include "../../config/koneksi.php";

$pdf = new Cezpdf();

// Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('fungsiPDF/fonts/Courier.afm');
$all = $pdf->openObject();

// Tampilkan logo
$pdf->setStrokeColor(0, 0, 0, 1);
$pdf->addJpegFromFile('logo.jpg',20,800,69);

// Teks di tengah atas untuk judul header
$pdf->addText(200, 820, 16,'<b>Laporan Data Dosen</b>');
$pdf->addText(90, 800, 14,'<b>AGUS SAPUTRA & ASFA SOLUTION, ASFAMEDIA - ASFA GROUP</b>');
// Garis atas untuk header
$pdf->line(10, 795, 578, 795);
$pdf->addText(50, 780, 8,'<b>Fakultas :</b> '. $_POST[fakultas]);
// Garis bawah untuk footer
$pdf->line(10, 50, 578, 50);
// Teks kiri bawah
$pdf->addText(30,34,8,'Dicetak tgl:' . date( 'd-m-Y, H:i:s'));

$pdf->closeObject();

// Tampilkan object di semua halaman
$pdf->addObject($all, 'all');
$mulai=$_POST[thn_mulai].'-'.$_POST[bln_mulai].'-'.$_POST[tgl_mulai];
$selesai=$_POST[thn_selesai].'-'.$_POST[bln_selesai].'-'.$_POST[tgl_selesai];;
// Query untuk merelasikan kedua tabel
$sql = mysql_query('SELECT orders.id_orders as faktur,DATE_FORMAT(tgl_order, %Y-%m-%d) as tanggal,
                    nama_produk,jumlah,harga
                    FROM orders, orders_detail, produk
                    WHERE (orders_detail.id_produk=produk.id_produk)
                    AND (orders_detail.id_orders=orders.id_orders)
                    AND (orders.status_order=Lunas/Terkirim)
                    AND (tanggal BETWEEN '.$mulai.' AND'.$selesai.')'
                  );

$jml = mysql_num_rows($sql);
$i = 1;
while($r = mysql_fetch_array($sql)) {
$quantityharga=rp($r[jumlah]*$r[harga]);
  $hargarp=rp($r[harga]);
  $faktur=$r[faktur];

  $data[$i]=array('<b>No</b>'=>$i,
                  '<b>Faktur</b>'=>$faktur,
                  '<b>Tanggal</b>'=>$r[tanggal],
                  '<b>Nama Produk</b>'=>$r[nama_produk],
                  '<b>Qty</b>'=>$r[jumlah],
                  '<b>Harga</b>'=>$hargarp,
                  '<b>Sub Total</b>'=>$quantityharga);
	$total = $total+($r[jumlah]*$r[harga]);
	$totqu = $totqu + $r[jumlah];
  $i++;
}

$pdf->ezTable($data, '', '', '');

$pdf->ezText("\n\nTotal keseluruhan : Rp. {$tot}");
$pdf->ezText("\nJumlah yang terjual : {$jml} unit");
$pdf->ezText("Jumlah keseluruhan yg terjual: {$totqu} unit");

// Penomoran halaman
$pdf->ezStartPageNumbers(320, 15, 8);
$pdf->ezStream();


?>