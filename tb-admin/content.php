<?php
include "../config/koneksi.php";
include "../config/library.php";
include "../config/fungsi_indotgl.php";
include "../config/fungsi_combobox.php";
include "../config/class_paging.php";
include "../config/fungsi_rupiah.php";

// Bagian Home
if ($_GET[module]=='home'){
  if ($_SESSION['leveluser']=='admin'){
  echo "<h2>Selamat Datang</h2>
          <p>Hai <b>$_SESSION[namalengkap]</b>, selamat datang di halaman Administrator.<br> Silahkan klik menu pilihan yang berada 
          di sebelah kiri untuk mengelola konten website anda. </p>
          <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
          <p align=right>Login : $hari_ini, ";
  echo tgl_indo(date("Y m d")); 
  echo " | "; 
  echo date("H:i:s");
  echo " WIB</p>";
  }
}

// Bagian Modul

// Bagian Produk
elseif ($_GET[module]=='produk'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/produk/produk.php";
  }
}
// Bagian Best Seller
elseif ($_GET[module]=='bestseller'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/bestseller/bestseller.php";
  }
}


// Bagian Order
elseif ($_GET[module]=='order'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/order/order.php";
  }
}

// Bagian Profil
elseif ($_GET[module]=='profil'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/profil/profil.php";
  }
}

// Bagian Order
elseif ($_GET[module]=='hubungi'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/hubungi/hubungi.php";
  }
}

// Bagian Cara Pembelian
elseif ($_GET[module]=='carabeli'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/carabeli/carabeli.php";
  }
}

// Modul bank
elseif ($_GET[module]=='bank'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/bank/bank.php";
  }
}



// Bagian Header
elseif ($_GET[module]=='header'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/header/header.php";
  }
}


// Bagian Laporan
elseif ($_GET[module]=='laporan'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/laporan/laporan.php";
  }
}

// Bagian YM
elseif ($_GET[module]=='ym'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/ym/ym.php";
  }
}

// Bagian Selamat Datang
elseif ($_GET[module]=='welcome'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/welcome/welcome.php";
  }
}

// Bagian Sekilas Info
elseif ($_GET['module']=='sekilasinfo'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/sekilasinfo/sekilasinfo.php";
  }
}
// Bagian Password
elseif ($_GET[module]=='password'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/password/password.php";
  }
}

?>
