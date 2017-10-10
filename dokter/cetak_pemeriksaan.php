<?php
	include('../tcpdf/tcpdf.php');
	include('../konfig.php');
 	require_once('../tcpdf/config/tcpdf_config_alt.php');

// Include the main TCPDF library (search the library on the following directories).
$tcpdf_include_dirs = array(
    realpath('../tcpdf/tcpdf.php'),
    '/usr/share/php/tcpdf/tcpdf.php',
    '/usr/share/tcpdf/tcpdf.php',
    '/usr/share/php-tcpdf/tcpdf.php',
    '/var/www/tcpdf/tcpdf.php',
    '/var/www/html/tcpdf/tcpdf.php',
    '/usr/local/apache2/htdocs/tcpdf/tcpdf.php'
);
foreach ($tcpdf_include_dirs as $tcpdf_include_path) {
    if (@file_exists($tcpdf_include_path)) {
        require_once($tcpdf_include_path);
        break;
    }
}
	// $pdf = new tcpdf();
	
	// $pdf->AddPage();
	
    $query = "SELECT
pemeriksaan.kode_tindakan,
pemeriksaan.nip_radiografer,
pemeriksaan.no_rm,
pemeriksaan.tgl_kunjungan,
pemeriksaan.hasil,
pemeriksaan.jumlah_tindakan,
jenis_tindakan.jenis_tindakan,
tbl_pasien.nama_pasien,
petugas_radiografer.nama_petugas
FROM pemeriksaan
LEFT JOIN tbl_pasien ON pemeriksaan.no_rm = tbl_pasien.no_rm 
left JOIN petugas_radiografer on pemeriksaan.nip_radiografer = petugas_radiografer.nip_radiografer 
LEFT JOIN jenis_tindakan on pemeriksaan.kode_tindakan = jenis_tindakan.kode_tindakan order by 
pemeriksaan.tgl_kunjungan desc";
    $result = mysql_query($query);
//     if (mysql_num_rows($result)) {
//         //echo"ada isinya";	
//         $html ='<html>
//     <head>
//         <link rel="stylesheet" href="../css/bootstrap.min.css">
//     </head>
//     <body>
//         <div align="center">
//             <h2>Rumah Sakit Umum PINDAD</h2>
//             Bandung<br>
//             <hr>
//             <h3>
//                 <label class="label label-info">&nbsp;&nbsp;&nbsp;Data Pemeriksaan&nbsp;&nbsp;&nbsp;</label>
//             </h3>
            
            
//             <table border="0" width ="100%" >
//             <thead>
//     <th>No RM</th>
//     <th>Nama Petugas</th>
//     <th>Nama Pasien</th>
//     <th>Hasil</th>
//     <th>Tanggal Kunjungan</th>
//     <th>Tindakan</th>
//     <th>Jumlah Tindakan</th>
// </thead><tbody>';
//         while ($row = mysql_fetch_array($result)) {

// 	       $html .='<tr>
//                 <td>'.$row['no_rm'].'</td>
//                 <td>'. $row['nama_petugas'].' </td>
//                 <td>'.$row['nama_pasien'].' </td>
//                 <td>'. $row['hasil'].' </td>
//                 <td>'.$row['tgl_kunjungan'].' </td>
//                 <td>'.$row['jenis_tindakan'].'</td>
//                 <td>'.$row['jumlah_tindakan'].'</td>
//             </tr>';
            
//         }
//         $html .='</tbody></table>
//             <div align="right">Bandung, '.date('d-M-Y').'</div>
//         </div>
//     </body>
// </html>';
//     } else {
//         $html = "kosong";
//     }
	
// 	$pdf->writeHTML($html);
	
// 	$pdf->Output();
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

// -----------------------------------------------------------------------------

$tbl ='
<table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td rowspan="3">COL 1 - ROW 1<br />COLSPAN 3</td>
        <td>COL 2 - ROW 1</td>
        <td>COL 3 - ROW 1</td>
    </tr>
    <tr>
        <td rowspan="2">COL 2 - ROW 2 - COLSPAN 2<br />text line<br />text line<br />text line<br />text line</td>
        <td>COL 3 - ROW 2</td>
    </tr>
    <tr>
       <td>COL 3 - ROW 3</td>
    </tr>

</table>';

$pdf->writeHTML($tbl, true, false, false, false, '');
 
?>