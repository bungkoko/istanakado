<?php
if($_GET['module']=='store'){
	echo "<span class='current'>Beranda</span>";
}
elseif($_GET['module']=='profilkami'){
	echo "<span class='current'>Profil</span>";
}
elseif($_GET['module']=='carabeli'){
	echo "<span class='current'>Cara Pembelian</span>";
}
elseif($_GET['module']=='semuaproduk'){
	echo "<span class='current'>Semua Produk</span>";
}

elseif($_GET['module']=='keranjangbelanja'){
	echo "<span class='current'>Keranjang Belanja</span>";
}
elseif($_GET['module']=='hubungikami'){
	echo "<span class='current'>Hubungi Kami</span>";
}
elseif($_GET['module']=='hubungiaksi'){
	echo "<span class='current'>Hubungi Kami</span>";
}
elseif($_GET['module']=='hasilcari'){
	echo "<span class='current'>Hasil Pencarian</span>";
}
elseif($_GET['module']=='selesaibelanja'){
	echo "<span class='current'>Data Pembeli</span>";
}
elseif($_GET['module']=='simpantransaksi'){
	echo "<span class='current'>Transaksi Selesai</span>";
}

elseif($_GET['module']=='detailproduk'){
	$detail	=mysql_query("SELECT * FROM produk,kategori
                      WHERE kategori.id_kategori=produk.id_kategori
                      AND id_produk='$_GET[id]'");
	$d		= mysql_fetch_array($detail);
	echo "<span class=judul_head><a href='store'>Beranda</a> &#187; $d[nama_produk]</span>";
}

?>
