<div align="center">
    <h1><label class="label label-success">Data Pembayaran</label></h1>
    <br>
    <button class="btn btn-primary btn-large" data-toggle="modal" data-target="#editModal">
        <i class="glyphicon glyphicon-plus-sign"></i> Tambah Pembayaran
    </button>
</div>
<table id="datatable" class="stripe">
    <thead>
    <th>ID Bayar</th>
    <th>Cara Bayar</th>
    <th>Tarif</th>
    <th>Aksi</th>
</thead>
<tbody>
    <?php
    $query = "SELECT * from pembayaran";
    $result = mysql_query($query);
    if (mysql_num_rows($result)) {
        //echo"ada isinya";	
        while ($row = mysql_fetch_array($result)) {
            ?>
            <tr>
                <td class="id_bayar"><?php echo $row['id_bayar']; ?> </td>
                <td class="cara_bayar"><?php echo $row['cara_bayar']; ?> </td>
                <td class="tarif"><?php echo $row['tarif']; ?> </td>
     <td><?php echo "<a class='btn btn-info btn-sm' href='departemen.php?view=tampil_ubah_pembayaran&id_bayar=" . $row['id_bayar'] . "'><i class='glyphicon glyphicon-edit'></i></a> | 
                    <a class='btn btn-danger btn-sm' href='departemen.php?view=aksi_hapus_pembayaran&id_bayar=" . $row['id_bayar'] . "' onclick='return confirm(&quot;Apakah anda yakin akan menghapus data pembayaran tersebut?&quot;)'><i class='glyphicon glyphicon-trash'></i></a>";
            ?></td>
        </tr>
        <?php
     
       }
 } else {
     echo"kosong";
  }
  ?>
</tbody>
<tfoot>    
<th>ID Bayar</th>
    <th>Cara Bayar</th>
    <th>Tarif</th>
    <th>Aksi</th>
</tfoot>
</table>

<!---------------------------- tambah ------------------------->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Pembayaran</h4>
            </div> 
            <div class="modal-body">
                <form name="ubah_pembayaran" id="ubah_pembayaran" method="POST" action="departemen/aksi_tambah_pembayaran.php">

                   
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
                        <label class="col-md-4 control-label">Tarif</label>
                        <div class='col-md-8'>
                        <input type="text" name="tarif" value="" placeholder="Tarif" class="form-control input-lg" required />
                        </div>
                    </div>
                    <br>
                    <div align="center">
                        <button type="reset" class="btn btn-inverse btn-lg"><i class="glyphicon glyphicon-refresh"></i>Reset </button>
                        <button type="simpan" class="btn btn-primary" id="simpan"><i class="glyphicon glyphicon-floppy-disk"></i>  Simpan </button>
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
            var nama_dokter = $(this).closest('tr').find('td.nama_dokter').html();

            document.getElementById('no_rm').value = no_rm;
            document.getElementById('nama_pasien').value = nama_pasien;
            document.getElementById('keluhan').value = keluhan;
            document.getElementById('nama_dokter').value = nama_dokter;

        });
    });
</script>

