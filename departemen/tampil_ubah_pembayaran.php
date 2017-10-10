<?php
if (isset($_GET)) {
    include './konfig.php';
    $id_ubah_pasien = $_GET['id_bayar'];
    $query = "SELECT * FROM pembayaran where id_bayar = '$id_ubah_pasien'";
    $result = mysql_query($query);
    if (mysql_num_rows($result)) {
        while ($row = mysql_fetch_array($result)) {
            ?>
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Edit Pembayaran</h4>
            </div>
            <div class="modal-body">
                <form name="edit_pasien" id="edit_pasien" method="POST" action="departemen/aksi_ubah_pembayaran.php">


                    <input type="hidden" name="id_bayar" value="<?php echo $id_ubah_pasien; ?>"/>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Cara Bayar</label>
                        <div class='col-md-8'>
                         <select name="cara_bayar" id="cara_bayar" class='form-control'>
                            <option <?php echo ($row['cara_bayar']=='ASKES') ? 'selected':'';?>>ASKES</option>
                            <option <?php echo ($row['cara_bayar']=='BPJS') ? 'selected':'';?>>BPJS</option>
                            <option <?php echo ($row['cara_bayar']=='UMUM') ? 'selected':'';?>>UMUM</option>
                            <option <?php echo ($row['cara_bayar']=='JAMKESMAS') ? 'selected':'';?>>JAMKESMAS</option>
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
                        <button type="simpan" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan </button>
                    </div>
                </form>
            </div>





            <?php
        }
    }
}
?>