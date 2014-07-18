<?php
error_reporting(0);
session_start();
include "config/koneksi.php";
include "config/fungsi_indotgl.php";
include "config/class_paging.php";
include "config/fungsi_combobox.php";
include "config/library.php";
include "config/fungsi_autolink.php";
include "config/fungsi_rupiah.php";
include "hapus_orderfiktif.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <title>Template roti</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="robots" content="index, follow">
        <meta name="description" content="Template roti">
        <meta name="keywords" content="Template roti">
        <meta http-equiv="Copyright" content="ZStudio">
        <meta name="author" content="Rizal Faizal">
        <meta http-equiv="imagetoolbar" content="no">
        <meta name="language" content="Indonesia">
        <meta name="revisit-after" content="7">
        <meta name="webcrawlers" content="all">
        <meta name="rating" content="general">
        <meta name="spiders" content="all">


        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

        <!--// Stylesheet //-->
        <link href="asset/css/produk_style.css" rel="stylesheet" type="text/css" />
        <link href="asset/css/contentslider.css" rel="stylesheet" type="text/css" />
        <link href="asset/css/default.advanced.css" rel="stylesheet" type="text/css" />
        <link href="asset/css/jquery.ad-gallery.css" rel="stylesheet" type="text/css" />
        <link href="asset/css/jquery.fancybox-1.3.1.css" rel="stylesheet" type="text/css" />
        <link href="asset/css/style.css" rel="stylesheet" type="text/css" />
        <link href="asset/css/slider.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="asset/css/sliderman.css" />
        <!--// Javascript //-->
        <script type="text/javascript" src="asset/js/jquery.js"></script>
        <script type="text/javascript" src="asset/js/clearbox.js"></script>
        <script type="text/javascript" src="asset/js/jquery.min.js"></script>
        <script type="text/javascript" src="asset/js/jquery.min14.js"></script>
        <script type="text/javascript" src="asset/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="asset/js/anythingslider.js"></script>
        <script type="text/javascript" src="asset/js/jquery.anythingslider.js"></script>
        <script type="text/javascript" src="asset/js/jquery.easing.1.2.js"></script>
        <script type="text/javascript" src="asset/js/jquery.fancybox-1.3.1.js"></script>
        <script type="text/javascript" src="asset/js/contentslider.js"></script>
        <script type="text/javascript" src="asset/js/cufon-yui.js"></script>
        <script type="text/javascript" src="asset/js/jquery.ad-gallery.js"></script>
        <script type="text/javascript" src="asset/js/lightbox.js"></script>
        <script type="text/javascript" src="asset/js/thumbgallery.js"></script>
        <script type="text/javascript" src="asset/js/eurofurence_500-eurofurence_700.font_9bc22cbd.js"></script>
        <script type="text/javascript" src="asset/js/cufon.js"></script>
        <script type="text/javascript" src="asset/js/sliderman.1.3.7.js"></script>
        <script type="text/javascript" src="asset/js/newsticker.js"></script>

        <!--[if lte IE 7]>
        <script type="text/javascript" src="js/jquery.dropdown.js"></script>
        <![endif]-->


        <script type="text/javascript" src="asset/js/easy.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $.easy.tooltip();
            });
        </script>






        <meta charset="UTF-8">

        <style type="text/css">
            <!--
            .style1 {color: #FF6600}
            -->
        </style>
    </head>

    <body>
        <a name="top"></a>
        <div id="wrapper_sec">
            <div id="head">
                <div class="logo">
                    <a href="store"><img src="asset/images/logo-6.png" alt="" /></a>
                </div>
                <div class="navigation">
                     <ul id="nav" class="dropdown dropdown-linear dropdown-columnar">
                     <li><b><a href='store'>Home</a></b></li>
                     <li><b><a href="cara-pembelian.html">Cara Pembelian</a></b></li>
                    </ul>
                     
                </div>
                <div class="clear"></div>
                <div id="crumb" style="margin-bottom:-15px;">
                    <ul class="left">
                        <li><p>anda berada di:</p></li>
                    </ul>
                    <ul class="left2">
                        <?php include "breadcrumb.php";?>

                    </ul>
                    <ul class="search right"><form method="POST" action="hasil-pencarian.html">
                            <li><input name="kata" type="text" value="cari produk"  class="bar" /></li>
                            <li><input type="submit" class="go" value="cari" /></li></form>
                    </ul>
                </div>


                <div class="clear"></div>
                <div id="slider_container" style="background-image:../images/bg_.gif;background-repeat:no-repeat;">

                    <div id="Slider" class="SliderName">
                        <img src="asset/images/banner/banner5.png" />

                        <img src="asset/images/banner/banner1.png" />
                        <img src="asset/images/banner/banner2.png" />
                        <img src="asset/images/banner/banner3.png" />
                        <img src="asset/images/banner/banner8.png" />
                    </div>
                    <div class="c"></div>

                    <div class="c"></div>
                    <script type="text/javascript">

                        Effect1 = {name: 'myEffect31', left: true, move: true, duration: 2000};

                        effects = [Effect1,'blinds'];

                        var Slider = Sliderman.slider({container: 'Slider', width: 940, height: 325, effects: effects, display: {autoplay: 6000,loading: {background: '#000000', opacity: 0.5, image: 'images/slider/loading.gif'},
                                buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev', label: ''}, next: {className: 'SliderNameNext', label: ''}},
                                description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},}});
                    </script>

                </div>
                <div class="clear"></div>
                <div id="content_sec" style="border:1px #ddd9d9 solid; margin-top:-15px;">
                    <div class="col1">

                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="images/spacer.gif" width="1" height="20" /></td>
                            </tr>
                            <tr>
                                <td><span class="center_content2">
                                        <?php include "produk_front.php";?>
                                    </span>
                                </td>
                            </tr>
                        </table>
                        <div class="clear"></div>
                    </div>
                    <div class="col2">

                        <div class="mycart">
                            <div class="small_heading">
                                <h3 style="color:#FFFFFF;margin-top:5px;">Keranjang Pemesanan</h3>
                            </div>

                            <table width="81%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="27%">
                                        <?php require_once "cart_item.php";?>
                                    </td>
                                <tr>
                            </table>
                        </div>
                                               
                        <div class="poll">
                            <div class="small_heading">
                                <h3 style="color:#FFFFFF;margin-top:5px;">Bank Pembayaran </h3>
                            </div>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                               
                               <tr>
                                     <?php
                                 $tampil=mysql_query("SELECT * FROM mod_bank ORDER BY id_bank DESC");
                                  $no=1;
                                  while ($r=mysql_fetch_array($tampil))
    {
echo" <td><div align='center'><span class='border_box'>
                                            </span><img src=img_bank/$r[gambar]><br>No rekening : $r[no_rekening] <br>
    Atas Nama : $r[pemilik]</div></td>   ";
 }


                                      ?>
                                   
                                 
                               </tr>
                             
                            </table>
                        </div>

                        <div class="poll">
                            <div class="small_heading">
                                <h3 style="color:#FFFFFF;margin-top:5px;">Statistik Pengunjung  </h3>
                            </div>
                            <table width="111%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="11%">&nbsp;</td>
                                    <td width="89%">

                                        <div align="left">
                                        </div></td></tr>
                            </table>
                        </div>
                       

                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div id="footer">
                    <div class="aboutus">
                        <h5>Tentang Kami</h5>
                        <p>Toko roti Ibu Basuki adalah salah satu toko roti yang terdapat di kota Klaten. Toko roti Ibu Basuki yang berlokasi di kota Klaten ini sudah berdiri sejak tahun 1985 ini salah satu toko roti yang terkenal di kota Klaten. Toko roti Ibu Basuki menyediakan berbagai jenis roti basah.
</p>                            
                    </div>
                    <div class="contactus">
                        <h5>Kontak Kami </h5>
                        <ul>
                            <li><span class="bold">Alamat : Jonggrangan Klaten Utara </span></li>
                            <li><span class="bold">No. Telp : 0272 - 3100919 / 081931175343</span>  </li>
                            
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div class="copyright_network">
                        <p>Copyright @ 2012</p>
                        <ul>
                            <li><a href="#top" class="top">ke atas</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div style="display: none;">
                <div id="inline1" style="width:400px;">
                    <h2>LOGIN ANGGOTA</h2>
                    <div class="clear"></div>
                    <p>Anda anggota? bila tidak <a href="daftar.html" class="colr2">DAFTAR</a>, di sini.</p>
                    <div class="clear"></div>
                    <a href="#" class="left"><img src="images/signup.gif" alt="" /></a> &nbsp;<a href="#" class="left"><img src="images/forgot.gif" alt="" /></a>
                    <div class="clear marg_bot">&nbsp;</div>
                    <ul class="forms">
                        <li class="txt">User Name</li>
                        <li class="inputfield"><input type="text" value="" class="bar" /></li>
                    </ul>
                    <ul class="forms">
                        <li class="txt">Password</li>
                        <li class="inputfield"><input type="text" value="" class="bar" /></li>
                    </ul>
                    <ul class="forms marg_top">
                        <li class="txt"><a href="#" class="simplebtn">Login</a>&nbsp;&nbsp; <a href="#" class="simplebtn">Batal</a></li>
                    </ul>
                </div>
            </div>
    </body>
</html>

