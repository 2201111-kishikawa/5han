<?php
	require_once __DIR__ . '/sessionChk.php';
    	$sessionchk = new Session();
    	$email = $_POST['email'];
    	$password = $_POST['password'];
    	$sessionchk->SessionSet($email,$password);

	session_start();

	require_once __DIR__ . '/dbconnect.php';
	$dbconnect = new DBconnect();
	$searchArray = $dbconnect->ConnectDB($_SESSION['email'],$_SESSION['password']);
	foreach($searchArray as $row){
		if(password_verify( $_SESSION['password'],$row['password'])){
			if($_SESSION['page'] = ProductList){
				header("Location:http://keen-usuki-0844.mond.jp/5han/ProductList.php");
			}
		}else{
			echo "login miss";
		}
	}
?>