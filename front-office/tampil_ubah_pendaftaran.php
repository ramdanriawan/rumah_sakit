<?php
if (isset($_GET)) {
    include './konfig.php';
    $id_ubah_pasien = $_GET['id_pasien'];
    $query = "SELECT * FROM pendaftaran where id_pasien = '$id_ubah_pasien'";
    $result = mysql_query($query);
    if (mysql_num_rows($result)) {
        while ($row = mysql_fetch_array($result)) {
            ?>
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Edit Biodata Pasien</h4>
            </div>
            <div class="modal-body">
                <form name="edit_pasien" id="edit_pasien" method="POST" action="front-office/aksi_ubah_pendaftaran.php" class="form-horizontal">


                    <input type="hidden" name="id_pasien" value="<?php echo $id_ubah_pasien; ?>"/>
                    <div class="form-group">
                         <label class="col-md-4 control-label">No RM</label>
                         <div class='col-md-8'>
                        <input type="text" name="no_rm" placeholder="No RM" class="form-control input-lg" value="<?php echo $row['no_rm'] ?>" required autofocus  />
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="col-md-4 control-label">Nama Pasien</label>
                         <div class='col-md-8'>
                        <input type="text" name="nama_pasien" placeholder="Nama Pasien" class="form-control input-lg" value="<?php echo $row['nama_pasien'] ?>" required autofocus  />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Tanggal Daftar
                        </label>
                        <div class='col-md-8'>
                            <input type="date" name="tgl_daftar" id="tgl_daftar" placeholder="Tanggal Daftar"  value="<?php echo $row['tgl_daftar'];?>"class="form-control" required autofocus  />
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label">Jenis Pasien
                        </label><div class='col-md-8'>
                        <select name="jenis_pasien" id="jenis_pasien" class='form-control'>
                            <option <?php echo ($row['jenis_pasien']=='ASKES') ? 'selected' : '';?>>ASKES</option>
                            <option <?php echo ($row['jenis_pasien']=='UMUM') ? 'selected' : '';?>>UMUM</option>
                            <option <?php echo ($row['jenis_pasien']=='Anak (PT.CMP)') ? 'selected' : '';?>>Anak (PT.CMP)</option>
                            <option <?php echo ($row['jenis_pasien']=='Karyawan (PT.CMP)') ? 'selected' : '';?>>Karyawan (PT.CMP)</option>
                            <option <?php echo ($row['jenis_pasien']=='Keluarga (PT.CMP)') ? 'selected' : '';?>>Keluarga (PT.CMP)</option>
                            <option <?php echo ($row['jenis_pasien']=='Anak (PT.Pindad)') ? 'selected' : '';?>>Anak (PT.Pindad)</option>
                            <option <?php echo ($row['jenis_pasien']=='Karyawan (PT.Pindad)') ? 'selected' : '';?>>Karyawan (PT.Pindad)</option>
                            <option <?php echo ($row['jenis_pasien']=='Keluarga (PT.Pindad)') ? 'selected' : '';?>>Keluarga (PT.Pindad)</option>
                          </select> 
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Jenis Tindakan</label>
                        <div class='col-md-8'>
                        <select name="jenis_tindakan" id="jenis_tindakan" class='form-control'>
                            <option <?php echo ($row['jenis_tindakan']=='THORAX') ? 'selected' : '';?>>THORAX</option>
                            <option <?php echo ($row['jenis_tindakan']=='USG') ? 'selected' : '';?>>USG</option>
                            <option <?php echo ($row['jenis_tindakan']=='RONGENT') ? 'selected' : '';?>>RONGENT</option>
                            <option <?php echo ($row['jenis_tindakan']=='CT-SCAN') ? 'selected' : '';?>>CT-SCAN</option>
                          </select>
                          </div>
                    </div><div class="form-group">
                        <label class="col-md-4 control-label">Jenis Pelayanan</label>
                        <div class='col-md-8'>
                        <select name="jenis_pelayanan" id="jenis_pelayanan" class='form-control'>
                        <option <?php echo ($row['jenis_pelayanan']=='Rawat Jalan') ? 'selected' : '';?>>Rawat Jalan</option>
                        <option <?php echo ($row['jenis_pelayanan']=='Rawat Inap') ? 'selected' : '';?>>Rawat Inap</option>
                        <option <?php echo ($row['jenis_pelayanan']=='IGD') ? 'selected' : '';?>>IGD</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tempat Daftar
                        </label>
                        <div class='col-md-8'>
                        <input type="text" name="tempat_daftar" value="<?php echo $row['tempat_daftar'];?>" placeholder="tempat_daftar" class="form-control input-lg" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Ukuran
                        </label>
                        <div class='col-md-8'>
                        <input type="text" name="ukuran" value="<?php echo $row['ukuran'];?>" placeholder="Ukuran" class="form-control input-lg" required />
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
<script type="text/javascript">
window.onload = function () {
        new JsDatePick({
            useMode: 2,
            target: "tgl_daftar",
            dateFormat: "%Y-%m-%d",
            yearsRange: [2000, 2025]
        });
    };
</script>