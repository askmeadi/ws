<?php
	$link = mysql_connect('localhost', 'root', '')
	or die('could not connect : '.mysql_error());
	mysql_select_db('data_mahasiswa') or die ('could not select database');
?>