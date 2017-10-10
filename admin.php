<?php

include './konfig.php';
session_start();
if ($_SESSION['hak_akses'] == 'admin') {
    ?>
    <html>
        <head>
            <title>Halaman Front Office</title>
            <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
            <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="font-awesome-4.1.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/jquery.dataTables.min.css">
            <link rel="stylesheet" type="text/css" media="all" href="jsdatepick-calendar/jsDatePick_ltr.min.css" />
            <script type="text/javascript" src="jsdatepick-calendar/jsDatePick.jquery.min.1.3.js"></script>
            <style type="text/css">
                /*  #searchid
                        {
                                width:500px;
                                border:solid 1px #000;
                                padding:10px;
                                font-size:14px;
                        }*/
                #result
                {
                    position:absolute;
                    width:300px;
                    padding:5px;
                    display:none;
                    margin-top:40px;
                    border-top:0px;
                    overflow:hidden;
                    border:1px #CCC solid;
                    background-color: white;
                    z-index: 10;
                    font-size: 14px;
                    border-radius: 2px;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
                    -webkit-box-shadow: 0 2px 4px rgba(0,0,0,0.2);
                }
                .show
                {
                    padding:10px; 
                    border-bottom:1px #999 dashed;
                    /*      font-size:12px; */
                    height:50px;
                }
                .show:hover
                {
                    background:#428bca;
                    color: #fff;
                    cursor:pointer;
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#datatable').dataTable();
                });
            </script>
        </head>

        <body>
            <nav class="navbar navbar-default navbar-static-top" role="navigation"  style="-webkit-box-shadow: 0px 0px 10px #888888;">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Sistem Informasi Pelaporan Kegiatan Radiologi</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li <?php if (isset($_GET['view'])) {
                                echo $_GET['view'] == 'tampil_user' || $_GET['view'] == 'tampil_ubah_user' ? 'class="active"' : '';
                            } ?>><a href="admin.php?view=tampil_user">User &nbsp;
                                        <!-- <span class="label label-success" style="border-radius: 50px;"> 
                                            <?php
                                            $hitung_pasien = mysql_query("select * from tbl_user");
                                            echo mysql_num_rows($hitung_pasien);
                                        ?></span> -->

                                    </a>
                        </li>  
                        <!-- <li <?php if (isset($_GET['view'])) {
                                        echo $_GET['view'] == 'tampil_pasien' || $_GET['view'] == 'tampil_ubah_pasien' ? 'class="active"' : '';
                                    } ?>><a href="admin.php?view=tampil_pasien">Pasien &nbsp;
                                        <span class="label label-success" style="border-radius: 50px;"> 
                                            <?php
                                            $hitung_pasien = mysql_query("select * from tbl_pasien");
                                            echo mysql_num_rows($hitung_pasien);
                                            ?></span>
                                    </a>
                        </li>   -->
                        <li <?php if (isset($_GET['view'])) {
                                        echo $_GET['view'] == 'tampil_prj' || $_GET['view'] == 'tampil_ubah_petugas' ? 'class="active"' : '';
                                    } ?>><a href="admin.php?view=tampil_petugas">Petugas Radiografer &nbsp; 
                                        <!-- <span class="label label-info" style="border-radius: 50px;"> 
                                            <?php
                                            $hitung_pri = mysql_query("select * from tbl_prj");
                                            echo mysql_num_rows($hitung_pri);
                                            ?></span> -->
                                    </a>
                        </li>
                        <li <?php if (isset($_GET['view'])) {
                                                echo $_GET['view'] == 'tampil_dokter' || $_GET['view'] == 'tampil_ubah_dokter' ? 'class="active"' : '';
                                            } ?>><a href="admin.php?view=tampil_dokter">Dokter &nbsp;
                                            <!-- <span class="label label-warning" style="border-radius: 50px;"> 
                                                <?php
                                                $hitung_pri = mysql_query("select * from dokter");
                                                echo mysql_num_rows($hitung_pri);
                                                ?>
                                            </span> -->
                                            </a>
                        </li> <li <?php if (isset($_GET['view'])) {
                                                echo $_GET['view'] == 'tampil_tindakan' || $_GET['view'] == 'tampil_ubah_tindakan' ? 'class="active"' : '';
                                            } ?>><a href="admin.php?view=tampil_tindakan">Tindakan &nbsp;
                                            <!-- <span class="label label-warning" style="border-radius: 50px;"> 
                                                <?php
                                                $hitung_pri = mysql_query("select * from jenis_tindakan");
                                                echo mysql_num_rows($hitung_pri);
                                                ?>
                                            </span> -->
                                            </a>
                        </li> 
                        </ul>
                                    <p class="navbar-text navbar-right"><?php echo $_SESSION['username']; ?> login sebagai <?php echo $_SESSION['hak_akses']; ?> | <a class="btn btn-default btn-xs" href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a>  &nbsp;</p>
                                    </div>


                                    </nav>
                                    <div class="container">
                                        <div class="col-lg-12">
                                            <div class="panel panel-default"> 
                                                <div class="panel-body">
                                                    <?php
                                                    if (isset($_GET['view'])) {
                                                        $view = $_GET['view'];
                                                        include 'admin/' . $view . '.php';
                                                    } else {
                                                        header("location:admin.php?view=tampil_pasien");
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

