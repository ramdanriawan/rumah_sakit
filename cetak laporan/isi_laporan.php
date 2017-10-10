
<div class="row">
  <div class="large-6 columns">
    <label for="start">Start Date</label>
    <input id="start" type="date" /><br />
  </div>
  <div class="large-6 columns">
    <label for="end">End Date</label>
    <input id="end" type="date" /><br />
  </div>
</div>
<div class="row">
  <div class="large-12 columns">
    <button class="button radius" id="filter">Filter</button>
    <button id="clearFilter" class="button radius secondary">Clear Filter</button>
  </div>
</div>
<div class="row">
  <div class="large-12 columns">
    <table id="oTable">
      <thead>
        <tr>
          	<th>No RM</th>
			<th>Tanggal Daftar</th>
			<th>Nama Pasien</th>
			<th>Jenis Kelamin</th>
			<th>Tgl Lahir</th>
			<th>Jenis Pasien</th>
			<th>Jenis Tindakan</th>
			<th>Jenis Pelayanan</th>
			<th>Cara Bayar</th>
			<th>Nama Dokter</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

<?php
     $('#datatable').dataTable();
                });
            </script>
        </head>

        <body>
            <nav class="navbar navbar-default navbar-static-top" role="navigation"  style="-webkit-box-shadow: 0px 0px 10px #888888;">
                <div class="navbar-header">
                    <a class="navbar-brand" href="filter_css">
				
?>


