<?php

include 'konfig.php';
session_start();
if ($_SESSION['hak_akses'] == 'Departemen') {
    ?>
    <html>
        <head>
            <title>Halaman Departemen</title>
            <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
            <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="font-awesome-4.1.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/jquery.dataTables.min.css">
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#datatable').dataTable();
                });
            </script>
        </head>

        <body>
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="-webkit-box-shadow: 0px 0px 10px #888888;">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Sistem Informasi Pelaporan Kegiatan Radiologi</a>
                </div>
                <p class="navbar-text">Petugas Radiologi</p>
                <div>
                    <ul class="nav navbar-nav">
                        <li <?php if (isset($_GET['view'])) {
        echo $_GET['view'] == 'tampil_pembayaran' || $_GET['view'] == 'ubah_pembayaran' ? 'class="active"' : '';
    } ?>><a href="?view=tampil_pembayaran">Pembayaran &nbsp;
                               </a>
                        </li>
                       

                    </ul>

                    <p class="navbar-text navbar-right"><?php echo $_SESSION['username']; ?> login sebagai <?php echo $_SESSION['hak_akses']; ?> bagian <?php echo $_SESSION['grup']; ?> | <a class="btn btn-default btn-xs" href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a>  &nbsp;</p>
                </div>

            </nav>
            <div class="container">
                <div class="col-lg-12">
                    <div class="panel panel-default"> 
                        <div class="panel-body">
                            <?php
                            if (isset($_GET['view'])) {
                                $view = $_GET['view'];
                  include 'departemen/' . $view . '.php';
                            } else {
                                $_GET['view'] = 'tampil_petugas';
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <footer align="center">
                    
                </footer>
        </body>

    </html>
    <?php
} else {
    echo "<script>
        alert('Forbidden access');
	location.href='index.php';
	</script>";
    exit();
}
?>

