<?php
//Developt By Jean Riko Kurniawan Putra 082386944596
require "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>CRUD PHP MySQL Menggunakan PDO</title>
<head>
<body>
	<div style="padding: 25px 25px 25px 25px;">
		<center>
			<h2>CRUD PHP MySQL Menggunakan PDO</h2>
			<h2>By Jean Riko Kurniawan Putra</h2>
			<h2><a href="https://mediasoftsolusindo.com/" target="blank">MediaSoft Solusindo</a></h2>
		</center>
	</div>
	<div style="padding: 0px 25px 25px 25px;">
		<p align="justify">PDO <i>(PHP Data Objects)</i> adalah interface universal yang disediakan PHP untuk “berkomunikasi” dengan database server. Maksud istilah “interface universal” disini adalah bahwa PDO tidak terikat dengan aplikasi database tertentu. Apabila saat ini kita menggunakan database MySQL dan dikemudian hari ingin bermigrasi menggunakan PostgreSQL, kita hanya tinggal mengganti cara pemanggilan awal PDO dan seluruh kode program yang ada bisa langsung digunakan untuk database baru.</p>
		<?php require "view.php"; ?>
	</div>
</body>
</html>