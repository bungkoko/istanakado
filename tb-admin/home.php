<?php
session_start();
error_reporting(0);
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<link href='css/screen.css' rel='stylesheet' type='text/css'><link href='css/reset.css' rel='stylesheet' type='text/css'>


 <center><br><br><br><br><br><br>Maaf, untuk masuk <b>Halaman Administrator</b><br>
  <center>anda harus <b>Login</b> dahulu!<br><br>";
    echo "<div> <a href='index.php'><img src='images/kunci.png'  height=176 width=143></a>
             </div>";
    echo "<input type=button class=simplebtn value='LOGIN DI SINI' onclick=location.href='index.php'></a></center>";
}
else {
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description"  content=""/>
        <meta name="keywords" content=""/>
        <meta name="robots" content="ALL,FOLLOW"/>
        <meta name="Author" content="Mr.X"/>
        <meta http-equiv="imagetoolbar" content="no"/>
        <title>.::Halaman Administrator::.</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <link rel="stylesheet" href="css/reset.css" type="text/css"/>
        <link rel="stylesheet" href="css/screen.css" type="text/css"/>
        <link rel="stylesheet" href="css/fancybox.css" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.wysiwyg.css" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.ui.css" type="text/css"/>
        <link rel="stylesheet" href="css/visualize.css" type="text/css"/>
        <link rel="stylesheet" href="css/visualize-light.css" type="text/css"/>


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.visualize.js"></script>
        <script type="text/javascript" src="js/jquery.wysiwyg.js"></script>
        <script type="text/javascript" src="js/tiny_mce/jquery.tinymce.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox.js"></script>
        <script type="text/javascript" src="js/jquery.idtabs.js"></script>
        <script type="text/javascript" src="js/jquery.datatables.js"></script>
        <script type="text/javascript" src="js/jquery.jeditable.js"></script>
        <script type="text/javascript" src="js/jquery.ui.js"></script>

        <script type="text/javascript" src="js/excanvas.js"></script>
        <script type="text/javascript" src="js/cufon.js"></script>
        <script type="text/javascript" src="js/Geometr231_Hv_BT_400.font.js"></script>

        <script language="javascript" type="text/javascript">
            tinyMCE_GZ.init({
                plugins : 'style,layer,table,save,advhr,advimage, ...',
                themes  : 'simple,advanced',
                languages : 'en',
                disk_cache : true,
                debug : false
            });
        </script>
        <script language="javascript" type="text/javascript"
        src="../tinymcpuk/tiny_mce_src.js"></script>
        <script type="text/javascript">
            tinyMCE.init({
                mode : "textareas",
                theme : "advanced",
                plugins : "table,youtube,advhr,advimage,advlink,emotions,flash,searchreplace,paste,directionality,noneditable,contextmenu",
                theme_advanced_buttons1_add : "fontselect,fontsizeselect",
                theme_advanced_buttons2_add : "separator,preview,zoom,separator,forecolor,backcolor,liststyle",
                theme_advanced_buttons2_add_before: "cut,copy,paste,separator,search,replace,separator",
                theme_advanced_buttons3_add_before : "tablecontrols,separator,youtube,separator",
                theme_advanced_buttons3_add : "emotions,flash",
                theme_advanced_toolbar_location : "top",
                theme_advanced_toolbar_align : "left",
                theme_advanced_statusbar_location : "bottom",
                extended_valid_elements : "hr[class|width|size|noshade]",
                file_browser_callback : "fileBrowserCallBack",
                paste_use_dialog : false,
                theme_advanced_resizing : true,
                theme_advanced_resize_horizontal : false,
                theme_advanced_link_targets : "_something=My somthing;_something2=My somthing2;_something3=My somthing3;",
                apply_source_formatting : true
            });

            function fileBrowserCallBack(field_name, url, type, win) {
                var connector = "../../filemanager/browser.html?Connector=connectors/php/connector.php";
                var enableAutoTypeSelection = true;

                var cType;
                tinymcpuk_field = field_name;
                tinymcpuk = win;

                switch (type) {
                    case "image":
                        cType = "Image";
                        break;
                    case "flash":
                        cType = "Flash";
                        break;
                    case "file":
                        cType = "File";
                        break;
                }

                if (enableAutoTypeSelection && cType) {
                    connector += "&Type=" + cType;
                }

                window.open(connector, "tinymcpuk", "modal,width=600,height=400");
            }
        </script>

        <style type="text/css">
            <!--
            .style3 {
                color: #62A621;
                font-weight: bold;
            }
            -->
        </style>
    </head>

    <body>

        <div class="sidebar">

            <div class="menu">
                <ul>
					<li>
						<a href="#">MENU UTAMA</a>
							<ul><?php
                              
                                echo "<li><a href='?module=produk'><b>Produk</b></a></li>";
                                echo "<li><a href='?module=order'><b>Order Masuk</b></a></li>";
                                echo "<li><a href='?module=hubungi'><b>Pesan Masuk</b></a></li>";
                                echo "<li><a href='?module=laporan'><b>Laporan Transaksi</b></a></li>";
                                echo "<li><a href='?module=bank'><b> Rekening Bank</b></a></li>";
                                ?>
							</ul>
					</li>
					<li><a href="#">Manajemen Admin </a>
                        <ul>
                                <?php echo "<li><a href='?module=password'><b>Ganti Password</b></a></li>";
                                ?>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>


        <div class="main"> <!-- *** mainpage layout *** -->
            <div class="main-wrap">
                <div class="header clear">
                    <ul class="links clear">
                        <li>:::: <strong>Selamat Datang <?=$_SESSION[namalengkap]?></strong>&nbsp;::::&nbsp;</li>
                        <li><a href="?module=home"><img src="images/home.png" alt="" class="icon" /> <span class="text">Beranda</span></a></li>
                        <li><a href="logout.php"><img src="images/ico_logout_24.png" alt="" class="icon" /> <span class="text">Keluar</span></a></li>
                    </ul>
                </div>

                <div class="page clear">
                    <!-- MODAL WINDOW -->
                    <div id="modal" class="modal-window">
                        <!-- <div class="modal-head clear"><a onclick="$.fancybox.close();" href="javascript:;" class="close-modal">Close</a></div> -->


                    </div>

                    <!-- CONTENT BOXES -->
                    <!-- end of content-box -->
                    <div class="notification note-success">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="2%">&nbsp;</td>
                                <td width="95%"><?php include "content.php"; ?></td>
                                <td width="3%">&nbsp;</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </body>

    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
</html>
<?php
}
?>