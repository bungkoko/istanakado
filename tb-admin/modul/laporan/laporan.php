<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
   echo "<h2>Laporan Transaksi</h2>
          <form method=POST action='modul/laporan/pdf.php'>
          <table>
          <tr><td>Dari Tanggal</td><td> : ";        
          combotgl(1,31,'tgl_mulai',$tgl_skrg);
          combonamabln(1,12,'bln_mulai',$bln_sekarang);
          combothn(2000,2020,'thn_mulai',$thn_sekarang);

    echo "</td></tr>
          <tr><td>s/d Tanggal</td><td> : ";
          combotgl(1,31,'tgl_selesai',$tgl_skrg);
          combonamabln(1,12,'bln_selesai',$bln_sekarang);
          combothn(2000,2020,'thn_selesai',$thn_sekarang);

    echo "</td></tr>
          <tr><td colspan=2><input type=submit class=tombol value=Proses>
          <input type=button class=tombol value=Batal onclick=self.history.back()></td></tr>
          </table>
          </form>";
    break;
  

}
?>
