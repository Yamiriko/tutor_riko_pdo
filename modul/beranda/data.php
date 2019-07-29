<?php
session_start();

$modul = (isset($_GET['modul']))? $_GET['modul'] : null;
$act = (isset($_GET['act']))? $_GET['act'] : null;

$aksi = "modul/beranda/aksi.php";

switch($act){
default:
?>
<div>
	<button type="button" style="cursor:pointer;"
	onClick='window.location="?modul=beranda&act=tambah"' 
	title="Tambah Data?">Tambah Data</button>
</div>
<div style="overflow-x:auto;">
	<table style="width:100%;" border="0" cellspacing="0">
		<thead>
			<tr style="background:DodgerBlue;color:white;">
				<th style="text-align:center;">ID Anggota</th>
				<th style="text-align:center;">Nama Anggota</th>
				<th style="text-align:center;">Jenis Kelamin</th>
				<th style="text-align:center;">Aksi</th>
			</tr>	
		</thead>
		<tbody>
			<?php
			$q_tampil = "
			SELECT * 
			FROM anggota 
			ORDER BY id_anggota
			";
			$sql_tampil = $pdo->prepare($q_tampil);
			$sql_tampil->execute();
			$jum_tampil = $sql_tampil->rowCount();
			if ($jum_tampil > 0){ //Jika jumlah data lebih dari nol atau datanya ada.
				while($data = $sql_tampil->fetch()){ //Tampilkan semua data menggunakan looping.
				?>
				<tr>
					<td style="text-align:center;"><?php echo $data['id_anggota']; ?></td>
					<td style="text-align:center;"><?php echo $data['nama_anggota']; ?></td>
					<td style="text-align:center;"><?php echo $data['jenis_kelamin']; ?></td>
					<td style="text-align:center;">
						<button type="button" style="cursor:pointer;"
						onClick='window.location="?modul=beranda&act=ubah&id_anggota=<?php echo $data['id_anggota']; ?>"' 
						title="Ubah Data?">Ubah</button>
						&nbsp;
						<button type="button" style="cursor:pointer;"
						onClick='var x; if (confirm("Yakin Hapus <?php echo $data['nama_anggota']; ?> ?")){window.location="<?php echo $aksi; ?>?modul=beranda&act=hapus&id_anggota=<?php echo $data['id_anggota']; ?>";}' 
						title="Ubah Data?">Hapus</button>
					</td>
				</tr>
				<?php
				}
			}else{
				?>
				<tr>
					<td style="text-align:center;" colspan="3">Tidak Ada Data!</td>
				</tr>
				<?php
			}
			?>
		</tbody>
		<tfoot>
			<tr style="background:DodgerBlue;color:white;height:10px;">
				<td colspan="4"></td>
			</tr>
		</tfoot>
	</table>
</div>
<?php
break;
case "tambah":
?>
<h2><legend>Tambah Data</legend></h2>
<form id="form_tambah" role="form" method="POST" action="<?php echo $aksi."?modul=beranda&act=tambah"; ?>" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama Anggota</td>
			<td>Jenis Kelamin</td>
		</tr>
		<tr>
			<td>
				<input type="text" maxlength="40" name="nama_anggota" placeholder="Nama Anggota" 
				id="nama_anggota" autofocus required />
			</td>
			<td>
				<select id="jenis_kelamin" name="jenis_kelamin" style="width:100%;" required>
					<option value="">-Pilih-</option>
					<option value="Pria">Pria</option>
					<option value="Wanita">Wanita</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<button type="submit" title="Simpan data?" style="cursor:pointer;">Simpan</button>
				&nbsp;
				<button type="button" onClick='window.location="?modul=beranda"' title="Kembali Ke Beranda?" style="cursor:pointer;">Batal</button>
			</td>
			<td></td>
		</tr>
	</table>
</form>
<?php
break;
case "ubah":

$id_anggota= (isset($_GET['id_anggota']))? $_GET['id_anggota'] : null;

$q = "
SELECT * 
FROM anggota
WHERE id_anggota = '".$id_anggota."';
";
$sql = $pdo->prepare($q);
$sql->execute();
$r = $sql->fetch();
?>
<h2><legend>Ubah Data</legend></h2>
<form id="form_tambah" role="form" method="POST" action="<?php echo $aksi."?modul=beranda&act=ubah"; ?>" enctype="multipart/form-data">
	<input hidden type="text" name="id_anggota" placeholder="ID Anggota" 
	value="<?php echo $r['id_anggota']; ?>" id="id_anggota" required />
	<table>
		<tr>
			<td>Nama Anggota</td>
			<td>Jenis Kelamin</td>
		</tr>
		<tr>
			<td>
				<input type="text" maxlength="40" name="nama_anggota" value="<?php echo $r['nama_anggota']; ?>"
				placeholder="Nama Anggota" id="nama_anggota" autofocus required />
			</td>
			<td>
				<?php
				if ($r['jenis_kelamin'] == ""){
					$a = "selected"; $b=""; $c="";
				}elseif ($r['jenis_kelamin'] == "Pria"){
					$a = ""; $b="selected"; $c="";
				}elseif ($r['jenis_kelamin'] == "Wanita"){
					$a = ""; $b=""; $c="selected";
				}
				?>
				<select id="jenis_kelamin" name="jenis_kelamin" style="width:100%;" required>
					<option <?php echo $a; ?> value="">-Pilih-</option>
					<option <?php echo $b; ?> value="Pria">Pria</option>
					<option <?php echo $c; ?> value="Wanita">Wanita</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<button type="submit" title="Simpan data?" style="cursor:pointer;">Simpan</button>
				&nbsp;
				<button type="button" onClick='window.location="?modul=beranda"' title="Kembali Ke Beranda?" style="cursor:pointer;">Batal</button>
			</td>
			<td></td>
		</tr>
	</table>
</form>
<?php
break;
}
?>