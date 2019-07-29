<?php
	session_start();
	
	$modul=(isset($_GET['modul']))? $_GET['modul'] : null;
	$perintah=(isset($_GET['perintah']))? $_GET['perintah'] : null;
	
	if ( (!empty($_SESSION['q_data'])) AND ($modul=='beranda') AND ($perintah=='hapus_q') ){
		unset($_SESSION['q_data']);
		header('location:../../index.php?modul=beranda');
	}
	else header('location:../../index.php?modul=beranda');
	
?>