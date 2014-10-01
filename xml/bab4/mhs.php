<?php
	header('content-type : text/xml; charset=ISO-8859-1');
	include "koneksi.php";
	
	//cek path element
	$path_params = array();
	$self = $_SERVER['PHP_SELF'];
	$extension = substr($self, strlen($self)-3);
	$path = ($extension=='php') ? NULL : $_SERVER['PATH_INFO'];
	
	if ($path != null){
		$path_params = explode("/", $path);
		}
		
	//metode request untuk GET
	if($_SERVER['REQUEST_METHOD'] == 'GET') {
		if($path_params[1] != null){
		 $query = "select nim, nama, alamat, prodi from mahasiswa where nim = $path_params[1]";
		 }
		 else{
		 $query = "select nim, nama, alamat, prodi from mahasiswa";
		 }
		 $result = mysql_query($query) or die ('query failed : '.mysql_error());
		 
		 echo "<data>";
		 while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
		 echo "<mahasiswa>";
		 foreach ($line as $key => $col_value){
		 echo "</data>";
		 
		 mysql_free_result($result);
		 }
		 
		 //request untuk delete
		 }
		 mysql_close($link);
?>