<div align="center">
    <h1><label class="label label-warning">Kelola Pasien Dokter (Pemeriksaan)</label></h1>
    <br>
    <button class="btn btn-primary btn-large" data-toggle="modal" data-target="#editModal">
        <i class="glyphicon glyphicon-plus-sign"></i> Tambah Pemeriksaan
    </button>
    <!-- <a href="?view=cetak_pemeriksaan" target="_blank" class="btn btn-primary btn-large" >
        <i class="glyphicon glyphicon-print"></i> Cetak Pemeriksaan
    </a> -->
</div>
<table id="datatable" class="display stripe">
   <thead>
    <th>No RM</th>
    <th>Nama Petugas</th>
    <th>Nama Pasien</th>
    <th>Hasil</th>
    <th>Tanggal Kunjungan</th>
    <th>Kode Tindakan</th>
    <th>Jumlah Tindakan</th>
    <th>Aksi</th>
</thead>
<tbody>
 <?php
    $query = "SELECT 
	pemeriksaan.kode_tindakan,
	pemeriksaan.nip_radiografer,
	pemeriksaan.no_rm,
	pemeriksaan.tgl_daftar,
	pemeriksaan.hasil,
	pemeriksaan.nama_petugas,
	pemeriksaan.nama_pasien,
	pemeriksaan.jumlah_tindakan,
	jenis_tindakan.kode_tindakan,
	jenis_tindakan.jenis_tindakan,
	FROM pemeriksaan
	INNER JOIN pemeriksaan ON jenis_tindakan.kode_tindakan = pemeriksaan.kode_tindakan
	";
    $result = mysql_query($query);
    if (mysql_num_rows($result)) {
        //echo"ada isinya";	
        while ($row = mysql_fetch_array($result)) {
            ?>
     <tr>
                <td class="no_rm"><?php echo $row['pemeriksaan.no_rm']; ?> </td>
                <td class="nama_petugas"><?php echo $row['pemeriksaan.nama_petugas']; ?> </td>
                <td class="nama_pasien"><?php echo $row['pemeriksaan.nama_pasien']; ?> </td>
                <td class="hasil"><?php echo $row['pemeriksaan.hasil']; ?> </td>
                <td class="tanggal"><?php echo $row['pemeriksaan.tgl_daftar']; ?> </td>
                <td class="tindakan"><?php echo $row['jenis_tindakan.jenis_tindakan']; ?> </td>
                <td class="jmltindakan"><?php echo $row['pemeriksaan.jumlah_tindakan']; ?> </td>
				<td>
                			           <a class='btn btn-info'  href='http://localhost/rumah_sakit/dokter/tampil_ubah_pasien_dokter.php' title='Edit'>
<i class='halflings-icon white edit'></i></a>
<a class='btn btn-danger' href='http://localhost/rumah_sakit/dokter/hapus_pasien_dokter.php' onClick="return confirm('Anda yakin ingin menghapus agenda ini?')" title='Hapus'>
<i class='halflings-icon white trash'></i></a></td>
</td>
            </tr>
            <?php
        }
    } else {
        echo"kosong";
    }
    ?>
</tbody>
<tfoot>    
      <th>No RM</th>
    <th>Nama Petugas</th>
    <th>Nama Pasien</th>
    <th>Hasil</th>
    <th>Tanggal Kunjungan</th>
    <th>Kode Tindakan</th>
    <th>Jumlah Tindakan</th>
    <th>Aksi</th>
</tfoot>
</table>

<!---------------------------- tambah ------------------------->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Tulis Diagnosa Pasien</h4>
            </div> 
            <div class="modal-body">
                <form name="ubah_pasien" id="ubah_pasien" method="POST" action="dokter/aksi_ubah_pasien_dokter.php" class='form-horizontal'>
                    
                    <div class="modal-body">
                <form name="ubah_pasien" id="ubah_pasien" method="POST" action="dokter/aksi_ubah_pasien_dokter.php" class='form-horizontal'>

                    <div class="form-group">
                        <label class="col-md-4 control-label">No RM                      </label>
                        <div class='col-md-8'>
                        <input type="text" id="id_pasien" name="id_pasien" value="" class="form-control input-lg" >
                        </div>
                    </div>
                        <div class='col-md-8'>
                        <input type="no_rm" id="no_rm" name="no_rm" value="" class="form-control input-lg" >
                        </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Petugas</label>
                        <div class='col-md-8'>
                        <input type="nama_petugas" id="nama_petugas" name="nama_petugas" value="" class="form-control input-lg" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Pasien</label>
                        <div class='col-md-8'>
                        <input type="nama_pasien" id="nama_pasien" name="nama_pasien" class="form-control input-lg" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Hasil</label>
                        <div class='col-md-8'>
                          <input type="hasil" id="hasil" name="hasil" value="" class="form-control input-lg" />
                        </div>
                    </div>
                       <div class="form-group">
                        <label class="col-md-4 control-label">Tanggal Kunjungan</label>
                        <div class='col-md-8'>
                          <input type="date" name="tgl_daftar" id="tgl_daftar" placeholder="Tanggal Kunjungan" class="form-control" required="required" autofocus="autofocus"  />
                        </div>
                    </div>
                  <div class="form-group">
                        <label class="col-md-4 control-label">Kode Tindakan</label>
                        <div class='col-md-8'>
                          <input type="kode_tindakan" id="kode_tindakan" name="kode_tindakan" class="form-control input-lg" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">jumlah tindakan
                      </label>
                        <div class='col-md-8'>
                        <input type="text" id="jml_tindakan" name="jml_tindakan" value="" class="form-control input-lg" >
                        </div>
                  </div>

                    <br>
                    <div align="center">
                        <button type="reset" class="btn btn-inverse"><i class="glyphicon glyphicon-refresh"></i> Reset </button>
              <button type="submit" class="btn btn-primary" id="submit"><i class="glyphicon glyphicon-floppy-disk"></i>  Simpan </button>
                    </div>
                </form>

            </div>

        </div> 
    </div><!-- /.modal-content --> 
</div><!-- /.modal -->
<!------------------------- edit -------------------->

<script type="text/javascript">
    $(document).ready(function () {
        $("button.edit_data").click(function () {
            var myModal = $('#editModal');
            // now get the values from the table
            var no_rm = $(this).closest('tr').find('td.no_rm').html();
            var nama_pasien = $(this).closest('tr').find('td.nama_pasien').html();
            var keluhan = $(this).closest('tr').find('td.keluhan').html();
            var diagnosa = $(this).closest('tr').find('td.diagnosa').html();
            var tindakan = $(this).closest('tr').find('td.tindakan').html();

            document.getElementById('no_rm').value = no_rm;
            document.getElementById('nama_pasien').value = nama_pasien;
            document.getElementById('keluhan').value = keluhan;
            document.getElementById('diagnosa').value = diagnosa;
            document.getElementById('tindakan').value = tindakan;
        });
    });
</script>

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