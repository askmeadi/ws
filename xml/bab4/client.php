<?php
	//memulai session
	session_start();
	//panggil library
	require_once('nusoap/lib/nusoap.php');
	//mendefinisikan alamat url service yang disediakan oleh client
	$client = new nusoap_client('http://localhost/SIT/ws.git/xml/bab4/server.php?wsdl', 'WSDL');
	$username = isset($_POST["username"]) ? $_POST["username"] : 'admin';
	$password = isset($_POST["password"]) ? $_POST["password"] : 'admin';
	$result = $client->call('login_ws', array('username'=>$username, 'password'=>$password));
	
	if($result == "Login berhasil"){
		$_SESSION['username'] = $username;
		header("location:index.php");
		}else{
		header("location:login.php");
		}
?>