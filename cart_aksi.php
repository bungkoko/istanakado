<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
error_reporting(0);
include"config/koneksi.php";
include"config/library.php";

$module=$_GET[module];
$act=$_GET[act];

/*Fungsi untuk mendelete cart 1 hari kemaren*/
function deleteAbandonedCart() {
    $kemarin=date('Y-m-d',mktime(0,0,0, date('m'),date('d')-1, date('Y')));
    mysql_query("DELETE From orders_temp where tgl_order_temp<'$kemarin'");
}

if($module=='keranjang' and $act=='tambah') {
    $sid=session_id();
    $query=mysql_query("select stok from produk where id_produk='$_GET[id]'");
    $d=mysql_fetch_array($query);
    $stok=$d[stok];
    if($stok==0) {
        echo"stok habis";
    }
    else {
        $query=mysql_query("select id_produk from orders_temps where id_produk='$_GET[id]' and id_session='$sid'");
        $ketemu=mysql_num_rows($query);
        if($ketemu==0) {
            mysql_query("insert into orders_temp(id_produk,jumlah,
                                                id_session, tgl_order_temp,
                                                jam_order_temp, stok_temp)
                          values('$_GET[id]',1,'$sid','$tgl_sekarang','$jam_sekarang','$stok')
                ");
        }
        else {
            mysql_query("update orders_temp
                         set jumlah=jumlah+1
                         where id_session='$sid' and id_produk='$_GET[id]'");
        }
        deleteAbandonedCart();
        header('Location:cart-pesan.html');
    }
}
elseif($module=='keranjang' and $act=='hapus') {
    mysql_query("delete from orders_temp where id_orders_temp='$_GET[id]'");
    header('location:cart-pesan.html');
}
elseif ($module=='keranjang' AND $act=='update') {
    $id       = $_POST[id];
    $jml_data = count($id);
    $jumlah   = $_POST[jml]; // quantity
    for ($i=1; $i <= $jml_data; $i++) {
        $sql2 = mysql_query("SELECT stok_temp FROM orders_temp	WHERE id_orders_temp='".$id[$i]."'");
        while($r=mysql_fetch_array($sql2)) {
            if ($jumlah[$i] > $r[stok_temp]) {
                echo "<script>window.alert('Jumlah yang dibeli melebihi stok yang ada');
window.location=('cart-pesan.html')</script>";
            }
            elseif($jumlah[$i] == 0) {
                echo "<script>window.alert('Anda tidak boleh menginputkan angka 0 atau mengkosongkannya!');
window.location=('cart-pesan.html')</script>";
            } // tambahan update ada disini
            else {
                mysql_query("UPDATE orders_temp SET jumlah = '".$jumlah[$i]."'
WHERE id_orders_temp = '".$id[$i]."'");
                header('Location:cart-pesan.html');
            }
        }
    }
}
?>
