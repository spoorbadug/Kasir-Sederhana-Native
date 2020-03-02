<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aplikasi Kasir</title>

<link href="asset/css/bootstrap.min.css" rel="stylesheet">
<link href="asset/css/style.css" rel="stylesheet">
<link href="asset/css/bootstrap.css" rel="stylesheet">
<script src="asset/js/jquery-1.11.3.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/nav.js"></script>
</head>
<body style="background: #b592799c">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<header>
				<br>
				<br>
				    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="?page=home">Home</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master Barang <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="?page=barang">Barang</a></li>
                  </ul>
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaksi<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="?page=penjualan">Penjualan</a></li>
                  </ul>
                </li>
				<li>
				<a href="../index.php">Keluar</a>
				</li>
               </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
<!--conten-->           
		   <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
					
                    <?php
                    include "db/koneksi.php";
                   	if (!isset($_GET['page'])) {
					include 'home.php';
					} else {
						switch ($_GET['page']) {
					case 'home':
						include 'home.php';
					break;
					case 'barang':
						include 'barang.php';
					break;
					case 'penjualan':
						include 'transaksi.php';
					break;
					default:	        
						echo "<label>404 Halaman tidak ditemukan</label>";
					break;
		
	}
}

                    ?>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
						
								</nav>
			</header>
		</div>
	</div>
	</body>
<footer class="main-footer">
        <div align="center" class="pull-center hidden-xs">
          <b><strong >Copyright &copy; 2018 <a href="sourcecodeaplikasi.info">Demo by Sourcecodeaplikasi.info</a>.</strong></b>
        </div>        
      </footer>
</html>