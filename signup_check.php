<?php
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	require_once __DIR__ . '/dbconnect.php';
    	$signup = new DBconnect();
    	$signup->insertHash($email,$password);
	echo $_SESSION['email'];
	echo "さん。ようこそ";
	if($_SESSION['page'] = ProductList){
		echo "<br><a href=ProductList.php>商品一覧へ</a>";
	}
?>