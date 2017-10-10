<?php
if (isset($_GET)) {
    include './konfig.php';
    $id_ubah_pasien = $_GET['id_dokter'];
    $query = "SELECT * FROM dokter where id_dokter = '$id_ubah_pasien'";
    $result = mysql_query($query);
    if (mysql_num_rows($result)) {
        while ($row = mysql_fetch_array($result)) {
            ?>
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Edit Biodata Pasien</h4>
            </div>
            <div class="modal-body">
                <form name="edit_pasien" id="edit_pasien" method="POST" action="admin/aksi_ubah_dokter.php">


                    <input type="hidden" name="id_dokter" value="<?php echo $id_ubah_pasien; ?>"/>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Dokter
                        </label>
                        <div class='col-md-8'>
                            <input type="text" name="nama_dokter" placeholder="Nama Dokter" class="form-control" required autofocus value="<?php echo $row['nama_dokter'];?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Alamat
                        </label>
                        <div class='col-md-8'>
                        <input type="text" name="alamat" value="" placeholder="Alamat" class="form-control input-lg" required value="<?php echo $row['alamat'];?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">No Telepon
                        </label>
                        <div class='col-md-8'>
                        <input type="text" name="no_tlp" value="" placeholder="Nomor Telepon" class="form-control input-lg" required value="<?php echo $row['no_tlp'];?>"/>
                        </div>
                    </div>
                    <div align="center">
                        <button type="reset" class="btn btn-inverse btn-lg"><i class="glyphicon glyphicon-refresh"></i> Reset </button>
                        <button type="submit" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-floppy-disk"></i>  Simpan </button>
                    </div>
                </form>
            </div>





            <?php
        }
    }
}
?>