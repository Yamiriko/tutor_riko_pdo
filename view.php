<?php
$modul = (isset($_GET['modul']))? $_GET['modul'] : null;
if ( (empty($modul)) OR ($modul=="beranda") ){
	require "modul/beranda/data.php";
}
?>