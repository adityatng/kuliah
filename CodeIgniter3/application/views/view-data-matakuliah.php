<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampil Data Matakuliah</title>
</head>
<body>
<center>
	<form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
		<table>
			<tr>
				<th colspan="3">
				Tampil Data Matakuliah</th>
			</tr>
			<tr>
			<td colspan="3">
				<hr>
			</td>
			</tr>
			<tr>
				<th>Kode MTK</th>
				<th>:</th>
				<td>
					<?= $kode; ?>
				</td>
			</tr>
			<tr>
				<th>Nama MTK</th>
				<th>:</th>
				<td>
					<?= $nama; ?>
				</td>
			</tr>
			<tr>
				<th>SKS MTK</th>
				<th>:</th>
				<td>
					<?= $sks; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<a href="<?= base_url('matakuliah') ?>"> Kembali</a>
				</td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>