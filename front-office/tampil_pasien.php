<div align="center">
    <h1><label class="label label-success">Data Pasien Terdaftar</label></h1>
    <br>
    <button class="btn btn-primary btn-large" data-toggle="modal" data-target="#tambahModal">
        <i class="glyphicon glyphicon-plus-sign"></i> Tambah Data Pasien
    </button>
	<button class="btn btn-info btn-large" data-toggle="modal" data-target="#cetakModal">
        <i class="glyphicon glyphicon-plus-sign"></i> Cetak Laporan
    </button>
</div>
<br>
<table id="datatable" class="display stripe">
    <thead>
    <th>No</th>
    <th>No RM</th>
    <th>Nama Pasien</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Telepon</th>
    <th>Aksi</th>
</thead>
<tbody>
    <?php
    $query = "SELECT * FROM tbl_pasien order by no_rm desc";
    $result = mysql_query($query);
    if (mysql_num_rows($result)) {
        //echo"ada isinya";	
        $no = 1;
        while ($row = mysql_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $no; ?> </td>
                <td><?php echo $row['no_rm']; ?> </td>
                <td><?php echo $row['nama_pasien']; ?> </td>
                <td><?php echo $row['jenis_kelamin']; ?> </td>
                <td><?php echo $row['alamat']; ?> </td>
                <td><?php echo $row['no_telepon']; ?> </td>
                <td><?php echo "<a class='btn btn-info btn-sm' href='front-office.php?view=tampil_ubah_pasien&id_pasien=" . $row['no_rm'] . "'><i class='glyphicon glyphicon-edit'></i></a> | 
                    <a class='btn btn-danger btn-sm' href='front-office.php?view=aksi_hapus_pasien&id_pasien=" . $row['no_rm'] . "' onclick='return confirm(&quot;Apakah anda yakin akan menghapus data pasien tersebut?&quot;)'><i class='glyphicon glyphicon-trash'></i></a>";
            ?></td>
        </tr>
        <?php
        $no ++;
    }
} else {
    echo"kosong";
}
?>
</tbody>
<tfoot><th>No</th>
<th>No RM</th>
<th>Nama Pasien</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>Telepon</th>
<th>Aksi</th></tfoot>
</table>

<!---------------------------- tambah ------------------------->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Biodata Pasien Baru</h4>
            </div> 
            <div class="modal-body">
                <form class='form-horizontal' name="tambah_pasien" id="tambah_pasien" method="POST">
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Pasien
                        </label>
                        <div class='col-md-8'>
                            <input type="text" name="nama" placeholder="Nama Pasien" class="form-control" required autofocus  />
                        </div>
                    </div>

                    <div class="form-group ">

                        <label class="col-md-4 control-label">Jenis Kelamin</label>
                          <div class='col-md-8'>  
                                <select name="jenis_kelamin" id="jenis_kelamin" class='form-control'>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                              </select>
                                
                        </div>

                    </div>
                   <div class="form-group">
                        <label class="col-md-4 control-label">Alamat
                        </label>
                        <div class='col-md-8'>
                        <input type="text" name="alamat" value="" placeholder="Alamat" class="form-control input-lg" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">No Telepon
                        </label>
                        <div class='col-md-8'>
                        <input type="text" name="no_telepon" value="" placeholder="Nomor Telepon" class="form-control input-lg" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Jenis Pasien
                        </label><div class='col-md-8'>
                        <select name="jenis_pasien" id="jenis_pasien" class='form-control'>
                            <option>ASKES</option>
                            <option>UMUM</option>
                            <option>Anak (PT.CMP)</option>
                            <option>Karyawan (PT.CMP)</option>
                            <option>Keluarga (PT.CMP)</option>
                            <option>Anak (PT.Pindad)</option>
                            <option>Karyawan (PT.Pindad)</option>
                            <option>Keluarga (PT.Pindad)</option>
                          </select> 
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Jenis Tindakan</label>
                        <div class='col-md-8'>
                        <select name="jenis_tindakan" id="jenis_tindakan" class='form-control'>
                            <option>THORAX</option>
                            <option>USG</option>
                            <option>RONGENT</option>
                            <option>CT-SCAN</option>
                          </select>
                          </div>
                    </div><div class="form-group">
                        <label class="col-md-4 control-label">Jenis Pelayanan</label>
                        <div class='col-md-8'>
                        <select name="jenis_pelayanan" id="jenis_pelayanan" class='form-control'>
                        <option>Rawat Jalan</option>
                        <option>Rawat Inap</option>
                        <option>IGD</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Cara Bayar</label>
                        <div class='col-md-8'>
                         <select name="cara_bayar" id="cara_bayar" class='form-control'>
                            <option>ASKES</option>
                            <option>BPJS</option>
                            <option>UMUM</option>
                            <option>JAMKESMAS</option>
                          </select>
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Keterangan</label>
                        <div class='col-md-8'>
                        <input type="text" name="keterangan"  placeholder="Keterangan" class="form-control input-lg" required />
                        </div>
                    </div>

                </form>

            </div>
            <div class="modal-footer"> 
                <button type="reset" class="btn btn-inverse"><i class="glyphicon glyphicon-refresh"></i> Reset </button>
                <button type="submit" class="btn btn-primary" id="submit"><i class="glyphicon glyphicon-floppy-disk"></i>  Simpan </button>

            </div>

        </div> 
    </div><!-- /.modal-content --> 
</div><!-- /.modal -->
<!------------------------- edit -------------------->

<!------cetak laporan -->
<div class="modal fade" id="cetakModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Cetak Laporan</h4>
            </div> 
            <div class="modal-body">
                <form class='form-horizontal' name="tambah_pasien" id="tambah_pasien" method="POST">
                    
                    

                </form>

            </div>
            <div class="modal-footer"> 
                <button type="reset" class="btn btn-inverse"><i class="glyphicon glyphicon-refresh"></i> Reset </button>
                <button type="submit" class="btn btn-primary" id="submit"><i class="glyphicon glyphicon-floppy-disk"></i>  Simpan </button>

            </div>

        </div> 
    </div><!-- /.modal-content --> 
</div><!-- /.modal -->
<!---end cetak --->

<script type="text/javascript">
    $(document).ready(function () {
        $("button#submit").click(function () {
            $.ajax({
                type: "POST",
                url: "front-office/aksi_tambah_pasien.php",
                data: $('form#tambah_pasien').serialize(),
                success: function (msg) {
                    $("#tambahModal").modal('hide')
                    location.href = 'front-office.php?view=tampil_pasien';
                    ;
                },
                error: function () {
                    alert("Gagal menambah pasien baru");
                }
            });
        });
    });
</script>

