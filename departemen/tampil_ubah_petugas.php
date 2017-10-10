<?php
if (isset($_GET)) {
    include './konfig.php';
    $nip = $_GET['nip'];
    $query = "SELECT * FROM petugas_radiografer where nip_radiografer = '$nip'";
    $result = mysql_query($query);
    if (mysql_num_rows($result)) {
        while ($row = mysql_fetch_array($result)) {
            ?>
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Edit Petugas</h4>
            </div>
            <div class="modal-body">
                <form name="edit_pasien" id="edit_pasien" method="POST" action="admin/aksi_ubah_petugas.php">


                    <input type="hidden" name="nip" value="<?php echo $nip; ?>"/>
                    <div class="input-group input-lg">
                        <span class="input-group-addon">Kode Petugas
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input type="text" name="kode_petugas" placeholder="kode petugas" class="form-control input-lg" value="<?php echo $row['kode_petugas'] ?>" required autofocus  />
                    </div>
                    <div class="input-group input-lg ">

                        <span class="input-group-addon">Nama Petugas
                        <i class="glyphicon glyphicon-user"></i>
                            
                        </span>
                        <input type="text" name="nama_petugas" placeholder="Nama Petugas" class="form-control input-lg" value="<?php echo $row['nama_petugas'] ?>" required autofocus  />  
                    </div>
                    
                    <div class="input-group input-lg">
                        <span class="input-group-addon">Pendidikan
                            <i class="glyphicon glyphicon-pencil"></i>
                        </span>
                        <input type="text" name="pendidikan" value="<?php echo $row['pendidikan']; ?>" placeholder="pendidikan" class="form-control input-lg" required />
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