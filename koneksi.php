<?php
	// Koneksi Ke database mysql menggunakan PDO
	
	//Bisa menggunakan variabel
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_tutor_pdo";
	
	//Bisa menggunakan konstanta
	define("host","localhost");
	define("user","root");
	define("pass","");
	define("db","db_tutor_pdo");
  
	// Koneksi ke MySQL dengan PDO OOP PHP5.5 dan PHP7.X
	$pdo = new PDO('mysql:host='.host.';dbname='.db, user, pass);
	$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
 ?>
