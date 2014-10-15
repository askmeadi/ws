<?php
	//memulai session
	session_start();
	//cek adanya session, jika ada maka di unset dan dilanjutkan dengan session_destroy
	if(ISSET($_SESSION['username'])){
		UNSET($_SESSION['username']);
	}
	header("location: index.php");
	session_destroy();
?>