<?php
if (isset($_GET)) {
    include './konfig.php';
    $id_ubah_pasien = $_GET['kode_tindakan'];
    $query = "SELECT * FROM jenis_tindakan where kode_tindakan = '$id_ubah_pasien'";
    $result = mysql_query($query);
    if (mysql_num_rows($result)) {
        while ($row = mysql_fetch_array($result)) {
            ?>
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Edit Biodata Pasien</h4>
            </div>
            <div class="modal-body">
                <form name="edit_pasien" id="edit_pasien" method="POST" action="admin/aksi_ubah_tindakan.php">


                    <input type="hidden" name="kode_tindakan" value="<?php echo $id_ubah_pasien; ?>"/>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Jenis TIndakan
                        </label>
                        <div class='col-md-8'>
                            <select name="jenis_tindakan" id="jenis_tindakan" class='form-control'>
                            <option <?php echo ($row['jenis_tindakan']=='THORAX')?'selected':'';?>>THORAX</option>
                            <option <?php echo ($row['jenis_tindakan']=='USG')?'selected':'';?>>USG</option>
                            <option <?php echo ($row['jenis_tindakan']=='RONGENT')?'selected':'';?>>RONGENT</option>
                            <option <?php echo ($row['jenis_tindakan']=='CT-SCAN')?'selected':'';?>>CT-SCAN</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tarif
                        </label>
                        <div class='col-md-8'>
                        <input type="text" name="tarif" value="<?php echo $row['tarif'];?>" placeholder="Tarif" class="form-control input-lg" required />
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