<div align="center">
    <h1><label class="label label-success">Data Jenis Tindakan</label></h1>
    <br>
    <button class="btn btn-primary btn-large" data-toggle="modal" data-target="#tambahModal">
        <i class="glyphicon glyphicon-plus-sign"></i> Tambah Data Jenis Tindakan
    </button>
</div>
<br>
<table id="datatable" class="display stripe">
    <thead>
    <th>No</th>
    <th>Jenis Tindakan</th>
    <th>Tarif</th>
    <th>Aksi</th>
</thead>
<tbody>
    <?php
    $query = "SELECT * FROM jenis_tindakan order by jenis_tindakan desc";
    $result = mysql_query($query);
    if (mysql_num_rows($result)) {
        //echo"ada isinya";	
        $no = 1;
        while ($row = mysql_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $no; ?> </td>
                <td><?php echo $row['jenis_tindakan']; ?> </td>
                <td><?php echo $row['tarif']; ?> </td>
                <td><?php echo "<a class='btn btn-info btn-sm' href='admin.php?view=tampil_ubah_tindakan&kode_tindakan=" . $row['kode_tindakan'] . "'><i class='glyphicon glyphicon-edit'></i></a> | 
                    <a class='btn btn-danger btn-sm' href='admin.php?view=aksi_hapus_tindakan&kode_tindakan=" . $row['kode_tindakan'] . "' onclick='return confirm(&quot;Apakah anda yakin akan menghapus data tersebut?&quot;)'><i class='glyphicon glyphicon-trash'></i></a>";
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
<tfoot> <th>No</th>
    <th>Jenis Tindakan</th>
    <th>Tarif</th>
    <th>Aksi</th></tfoot>
</table>

<!---------------------------- tambah ------------------------->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Tindakan</h4>
            </div> 
            <div class="modal-body">
                <form name="tambah_pasien" id="tambah_pasien" method="POST">

                    <div class="form-group">
                        <label class="col-md-4 control-label">Jenis TIndakan
                        </label>
                        <div class='col-md-8'>
                            <select name="jenis_tindakan" id="jenis_tindakan" class='form-control'>
                            <option>THORAX</option>
                            <option>USG</option>
                            <option>RONGENT</option>
                            <option>CT-SCAN</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tarif
                        </label>
                        <div class='col-md-8'>
                        <input type="text" name="tarif" value="" placeholder="Tarif" class="form-control input-lg" required />
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

<script type="text/javascript">
    $(document).ready(function () {
        $("button#submit").click(function () {
            $.ajax({
                type: "POST",
                url: "admin/aksi_tambah_tindakan.php",
                data: $('form#tambah_pasien').serialize(),
                success: function (msg) {
                    $("#tambahModal").modal('hide')
                    location.href = 'admin.php?view=tampil_tindakan';
                    ;
                },
                error: function () {
                    alert("Gagal menambah jenis tindakan baru");
                }
            });
        });
    });
</script>

