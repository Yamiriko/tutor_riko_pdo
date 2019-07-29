<?php
require "../../koneksi.php";

$modul= (isset($_GET['modul']))? $_GET['modul'] : null;
$act= (isset($_GET['act']))? $_GET['act'] : null;

$id_anggota = (isset($_POST['id_anggota']))? $_POST['id_anggota'] : null;
$nama_anggota = (isset($_POST['nama_anggota']))? $_POST['nama_anggota'] : null;
$jenis_kelamin = (isset($_POST['jenis_kelamin']))? $_POST['jenis_kelamin'] : null;

if ( ($modul=='beranda') AND ($act=='tambah') ){
	$sql = "
	INSERT INTO anggota(nama_anggota,jenis_kelamin)
	VALUES('".trim($nama_anggota)."','".trim($jenis_kelamin)."')
	";
	$tambah = $pdo->query($sql);
	if ($tambah){
		header('location:../../index.php?modul=beranda&proses=suksessimpan');
	}
	else header('location:../../index.php?modul=beranda&proses=gagalsimpan');
}elseif ( ($modul=='beranda') AND ($act=='ubah') ){	
	$sql = "
	UPDATE anggota SET
	nama_anggota='".trim($nama_anggota)."',
	jenis_kelamin='".trim($jenis_kelamin)."'
	WHERE id_anggota='".$id_anggota."'
	";
	
	$ubah = $pdo->query($sql);
	if ($ubah){
		header('location:../../index.php?modul=beranda&proses=suksesedit');	
	}
	else header('location:../../index.php?modul=beranda&proses=gagaledit');
}elseif ( ($modul=='beranda') AND ($act=='hapus') ){
	$getid_anggota = (isset($_GET['id_anggota']))? $_GET['id_anggota'] : null;
	$sql = "
	DELETE FROM anggota WHERE id_anggota='".$getid_anggota."'
	";
	echo $sql;
	$hapus = $pdo->query($sql);
	if ($hapus){
		header('location:../../index.php?modul=beranda&proses=sukseshapus');	
	}
	else header('location:../../index.php?modul=beranda&proses=gagalhapus&page=');
}else{
	header('location:../../index.php?modul=beranda');
}
	
?>