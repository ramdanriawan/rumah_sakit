<?php
if (isset($_GET)) {
    include './konfig.php';
    $id_ubah_pasien = $_GET['id_pasien'];
    $query = "SELECT * FROM tbl_pasien where no_rm = '$id_ubah_pasien'";
    $result = mysql_query($query);
    if (mysql_num_rows($result)) {
        while ($row = mysql_fetch_array($result)) {
            ?>
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Edit Pemeriksaan</h4>
            </div>
            <div class="modal-body">
                <form name="edit_pasien" id="edit_pasien" method="POST" action="front-office/aksi_ubah_pasien.php" class="form-horizontal">


                    <input type="hidden" name="id_pasien" value="<?php echo $id_ubah_pasien; ?>"/>
                    <div class="form-group">
                         <label class="col-md-4 control-label">Nama Pasien</label>
                         <div class='col-md-8'>
                        <input type="text" name="nama" placeholder="Nama Pasien" class="form-control input-lg" value="<?php echo $row['nama_pasien'] ?>" required autofocus  />
                        </div>
                    </div>
                    <div class="form-group ">
                    <label class="col-md-4 control-label">Nama Petugas</label>
                       <div class='col-md-8'>
                        <input type="text" name="nama_petugas" value="<?php echo $row['nama_petugas'];?>" placeholder="nama_petugas" class="form-control input-lg" required />
                    </div>
                   <div class="form-group">
 <label class="col-md-4 control-label">Nama Pasien</label>
                         <div class='col-md-8'>
                        <input type="text" name="nama" placeholder="Nama Pasien" class="form-control input-lg" value="<?php echo $row['nama_pasien'] ?>" required autofocus  />
</div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Hasil</label>
                        <div class='col-md-8'>
                        <input type="text" name="hasil" value="<?php echo $row['hasil'];?>" placeholder="hasil" class="form-control input-lg" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tanggal Kunjungan</label>
                        <div class='col-md-8'>
                       <input type="tgl_daftar" name="tgl_daftar" value="<?php echo $row['tgl_daftar'];?>" placeholder="tgl_daftar" class="form-control input-lg" required /> 
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Tindakan</label>
                        <div class='col-md-8'>
                        <input type="text" name="kode_tindakan" value="<?php echo $row['kode_tindakan'];?>" placeholder="kode_tindakan" class="form-control input-lg" required />
                          </div>
                    </div><div class="form-group">
                        <label class="col-md-4 control-label">Jumlah Tindakan</label>
                        <div class='col-md-8'>
                        <input type="jml_tindakan" name="jmlh_tindakan" value="<?php echo $row['jml_tindakan'];?>" placeholder="jmlh_tindakan" class="form-control input-lg" required />
                      </div>
                    </div> 

                    <div align="center">
                        <button type="reset" class="btn btn-inverse btn-lg"> Reset </button>
                        <button type="simpan" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-floppy-disk"></i>  Simpan </button>
                    </div>
                </form>
            </div>





            <?php
        }
    }
}
?>