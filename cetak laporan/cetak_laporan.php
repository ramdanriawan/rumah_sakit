<h1>Laporan Kegiatan Radiologi</h1>
<br>


<div class="panel panel-info" role="tablist">
	
	<ul class="nav nav-tabs" style="text-align: center;">
		<li class="nav-item">
			<a class="nav-link active" data-toggle="tab" href="#perhari" role="tab">Perhari</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#perminggu" role="tab">Perminggu</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#perbulan" role="tab">Perbulan</a>
		</li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="perhari" role="tabpanel"><br>
			<form class='form-horizontal' name="laporan_pasien" id="laporan_pasien" method="POST" action="rumah_sakit/front-office.php?view=aksi_cetak_laporan">
				<div class="form-group">
                        <label class="col-md-2 control-label">Jenis Pasien
                        </label><div class='col-md-5'>
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
                        <label class="col-md-2 control-label">Jenis Tindakan</label>
                        <div class='col-md-5'>
                        <select name="jenis_tindakan" id="jenis_tindakan" class='form-control'>
                            <option>THORAX</option>
                            <option>USG</option>
                            <option>RONGENT</option>
                            <option>CT-SCAN</option>
                          </select>
                          </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-2 control-label">Jenis Pelayanan</label>
                        <div class='col-md-5'>
                        <select name="jenis_pelayanan" id="jenis_pelayanan" class='form-control'>
                        <option>Rawat Jalan</option>
                        <option>Rawat Inap</option>
                        <option>IGD</option>
                      </select>
                      </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-2 control-label">Tanggal Awal</label>
                        <div class='col-md-5'>
                        <input type="text" id="awal" class="form-control">
                      </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-2 control-label">Tanggal Akhir</label>
                        <div class='col-md-5'>
                        <input type="text" id="akhir" class="form-control">
                      </div>
                    </div>
					<div class="form-group">
						<div class='col-md-offset-2'>
							<button class="btn btn-primary" type="submit">Cetak Laporan</button>                      
						</div>
                    </div>
			</form>
		</div>
		<div class="tab-pane" id="perminggu" role="tabpanel"> Perminggu
			<form class='form-horizontal' name="laporan_pasien" id="laporan_pasien" method="POST" action="rumah_sakit/front-office.php?view=aksi_cetak_laporan">
				<div class="form-group">
                        <label class="col-md-2 control-label">Jenis Pasien
                        </label><div class='col-md-5'>
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
                        <label class="col-md-2 control-label">Jenis Tindakan</label>
                        <div class='col-md-5'>
                        <select name="jenis_tindakan" id="jenis_tindakan" class='form-control'>
                            <option>THORAX</option>
                            <option>USG</option>
                            <option>RONGENT</option>
                            <option>CT-SCAN</option>
                          </select>
                          </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-2 control-label">Jenis Pelayanan</label>
                        <div class='col-md-5'>
                        <select name="jenis_pelayanan" id="jenis_pelayanan" class='form-control'>
                        <option>Rawat Jalan</option>
                        <option>Rawat Inap</option>
                        <option>IGD</option>
                      </select>
                      </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-2 control-label">Tanggal Awal</label>
                        <div class='col-md-5'>
                        <input type="text" id="awal_perminggu" class="form-control">
                      </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-2 control-label">Tanggal Akhir</label>
                        <div class='col-md-5'>
                        <input type="text" id="akhir_perminggu" class="form-control">
                      </div>
                    </div>
					<div class="form-group">
						<div class='col-md-offset-2'>
							<button class="btn btn-primary" type="submit">Cetak Laporan</button>                      
						</div>
                    </div>
			</form>
		</div>
		<div class="tab-pane" id="perbulan" role="tabpanel"> Perbulan
			<form class='form-horizontal' name="laporan_pasien" id="laporan_pasien" method="POST" action="rumah_sakit/front-office.php?view=aksi_cetak_laporan">
				<div class="form-group">
                        <label class="col-md-2 control-label">Jenis Pasien
                        </label><div class='col-md-5'>
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
                        <label class="col-md-2 control-label">Jenis Tindakan</label>
                        <div class='col-md-5'>
                        <select name="jenis_tindakan" id="jenis_tindakan" class='form-control'>
                            <option>THORAX</option>
                            <option>USG</option>
                            <option>RONGENT</option>
                            <option>CT-SCAN</option>
                          </select>
                          </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-2 control-label">Jenis Pelayanan</label>
                        <div class='col-md-5'>
                        <select name="jenis_pelayanan" id="jenis_pelayanan" class='form-control'>
                        <option>Rawat Jalan</option>
                        <option>Rawat Inap</option>
                        <option>IGD</option>
                      </select>
                      </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-2 control-label">Tanggal Awal</label>
                        <div class='col-md-5'>
                        <input type="text" id="awal_perbulan" class="form-control">
                      </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-2 control-label">Tanggal Akhir</label>
                        <div class='col-md-5'>
                        <input type="text" id="akhir_perbulan" class="form-control">
                      </div>
                    </div>
					<div class="form-group">
						<div class='col-md-offset-2'>
							<button class="btn btn-primary" type="submit">Cetak Laporan</button>                      
						</div>
                    </div>
			</form>
		</div>
	</div>
	
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $("button#submit").click(function () {
            $.ajax({
                type: "POST",
                url: "front-office/aksi_cetak_laporan.php",
                //data: $('form#tambah_pasien').serialize(),
                success: function (msg) {
                    //$("#tambahModal").modal('hide')
                    //location.href = 'front-office.php?view=tampil_pasien';
                    alert("laporan")
                },
                error: function () {
                    alert("Gagal cetak pasien");
                }
            });
        });
    });
</script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"awal",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		new JsDatePick({
			useMode:2,
			target:"akhir",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		new JsDatePick({
			useMode:2,
			target:"awal_perminggu",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		new JsDatePick({
			useMode:2,
			target:"akhir_perminggu",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		new JsDatePick({
			useMode:2,
			target:"awal_perbulan",
			dateFormat:"%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		new JsDatePick({
			useMode:2,
			target:"akhir_perbulan",
			dateFormat:"%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>

