<html>
<head>
<style type="text/css" media="print">
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000; page-break-inside: avoid;}
	td { padding: 7px 5px; font-size: 10px}
	th {
		font-family:Arial;
		color:black;
		font-size: 11px;
		background-color:lightgrey;
	}
	thead {
		display:table-header-group;
	}
	tbody {
		display:table-row-group;
	}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<style type="text/css" media="screen">
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000}
	th {
		font-family:Arial;
		color:black;
		font-size: 11px;
		background-color: #999;
		padding: 8px 0;
	}
	td { padding: 7px 5px;font-size: 10px}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<title>Cetak Agenda Surat Masuk</title>
</head>

<body onload="window.print()">
	<center><b style="font-size: 20px">AGENDA SURAT MASUK</b><br>
	Dari tanggal <b><?php echo tgl_jam_sql($tgl_start)."</b> sampai dengan tanggal <b>".tgl_jam_sql($tgl_end)."</b>"; ?>
	</center><br>
	
	<table border="1">
		<thead>
			<tr>
				<th width="3%">No</td>
				<th width="5%">Kode Surat</td>
				<th width="28%">Isi Ringkas</td>
				<th width="18%">Dari</td>
				<th width="17%">Nomor Surat</td>
				<th width="7%">Tgl. Surat</td>
				<th width="10%">Pengolah</td>
				<th width="7%">Tgl. disposisi</td>
				<th width="5%">Ket</td>
			</tr>
		</thead>
		<tbody>
			<?php 
			if (!empty($data)) {
				$no = 0;
				foreach ($data as $d) {
					$no++;
			?>
			<tr style="text-align: center;">
				<td width="3%"><?php echo $no; ?></td>
				<td width="5%"><?php echo $d->kode; ?></td>
				<td width="28%"><?php echo $d->isi_ringkas; ?></td>
				<td width="18%"><?php echo $d->dari; ?></td>
				<td width="17%"><?php echo $d->no_surat; ?></td>
				<td width="7%"><?php echo tgl_jam_sql($d->tgl_surat); ?></td>
				<td width="10%"><?php echo gval("t_admin", "id", "nama", $d->pengolah); ?></td>
				<td width="7%"><?php echo tgl_jam_sql($d->tgl_diterima); ?></td>
				<td width="5%"><?php echo $d->keterangan; ?></td>
			</tr>
			<?php 
				}
			} else {
				echo "<tr><td style='text-align: center'>Tidak ada data</td></tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>

