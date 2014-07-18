<?php
$sid=session_id();
$sql=mysql_query("select sum(jumlah*harga) as total, sum(jumlah) as totaljumlah from orders_temp, produk where id_session='$sid' and orders_temp.id_produk=produk.id_produk");

while($r=mysql_fetch_array($sql)){
    if($r['totaljumlah']!=""){
        $total_rp=format_rupiah($total);
        echo"<span class='keranjangitem'>$r[totaljumlah]<span class='keranjang3'>&nbsp; item pemesanan<br/>";
        echo "<a href='cart-pesan.html'><span class='keranjang'>Lihat Pemesanan</span></a><br/>
              <a href='selesai-pesan.html'><span class='keranjang'>Pemesanan Selesai</span></a><br/>";
    }
    else{
        echo"<span class='keranjang2'>0<span class='keranjang3'>&nbsp;item pemesanan<br/>
             <span class='border_cart'></span>";
    }
}

?>
