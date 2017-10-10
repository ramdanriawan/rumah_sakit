<?php
include('../konfig.php');
if ($_POST) {
    $q = $_POST['search'];
    $sql_res = mysql_query("select no_rm,nama_pasien, alamat from tbl_pasien where no_rm like '%$q%' or nama_pasien like '%$q%' order by no_rm LIMIT 5");
    while ($row = mysql_fetch_array($sql_res)) {
        $id_pasien = $row['no_rm'];
        $nama = $row['nama_pasien'];
        $alamat = $row['alamat'];
        $b_id_pasien = '<strong>' . $q . '</strong>';
        $b_nama = '<strong>' . $q . '</strong>';
        $final_id_pasien = str_ireplace($q, $b_id_pasien, $id_pasien);
        $final_nama = str_ireplace($q, $b_nama, $nama);
        ?>
        <div class="show" align="left">
            <span class="id"><?php echo $final_id_pasien; ?></span>&nbsp;<br/>
            <span class="nama"><?php echo $final_nama ?></span>, <?php echo $alamat; ?><br/>
        </div>
        <?php
    }
}
?>

