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
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Edit Biodata Pasien</h4>
            </div>
            <div class="modal-body">
                <form name="edit_pasien" id="edit_pasien" method="POST" action="admin/aksi_ubah_pasien.php">


                    <input type="hidden" name="id_pasien" value="<?php echo $id_ubah_pasien; ?>"/>
                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input type="text" name="nama" placeholder="Nama Pasien" class="form-control input-lg" value="<?php echo $row['nama_pasien'] ?>" required autofocus  />
                    </div><div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <input type="text" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control input-lg" value="<?php echo $row['tgl_lahir'] ?>" required autofocus  />
                    </div>
                    <div class="input-group input-lg ">

                        <span class="input-group-addon">
                            <h3>
                                <input type="radio" name="jenis_kelamin" value="L" required <?php
            if ($row['jenis_kelamin'] == 'L') {
                echo 'checked';
            }
            ?>><span class="label label-danger">Laki-Laki</span></input>
                                <input type="radio" name="jenis_kelamin" value="P" required <?php
                                       if ($row['jenis_kelamin'] == 'P') {
                                           echo 'checked';
                                       }
                                       ?>><span class="label label-info">Perempuan</span></input>
                            </h3>     
                        </span>

                    </div>
                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" placeholder="Alamat" class="form-control input-lg" required />
                    </div>
                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-phone"></i>
                        </span>
                        <input type="text" name="no_telepon" value="<?php echo $row['no_telepon']; ?>" placeholder="Nomor Telepon" class="form-control input-lg" required />
                    </div><div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-phone"></i>
                        </span>
                        <input type="text" name="jenis_pasien" value="<?php echo $row['jenis_pasien']; ?>" placeholder="Jenis Pasien" class="form-control input-lg" required />
                    </div><div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-phone"></i>
                        </span>
                        <input type="text" name="jenis_tindakan" value="<?php echo $row['jenis_tindakan']; ?>" placeholder="Jenis Tindakan" class="form-control input-lg" required />
                    </div><div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-phone"></i>
                        </span>
                        <input type="text" name="jenis_pelayanan" value="<?php echo $row['jenis_pelayanan']; ?>" placeholder="Jenis Pelayanan" class="form-control input-lg" required />
                    </div>
                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-phone"></i>
                        </span>
                        <input type="text" name="cara_bayar" value="<?php echo $row['cara_bayar']; ?>" placeholder="Cara Bayar" class="form-control input-lg" required />
                    </div>
                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <input type="text" name="keterangan" value="<?php echo $row['keterangan']; ?>" placeholder="Keterangan" class="form-control input-lg" required />
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