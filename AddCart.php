<?php
	session_start();
	if(isset($_SESSION['email'])){
    		$_SESSION['cart'] = $_POST['cart'];
		$productname = $_SESSION['email'];
		$username = $_POST['cart'];
		$link = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1417852-5han','LAA1417852','1412019219');;

		$sql = "INSERT INTO user_cart (user_data_id, product_data_id, purchase_number,purchase_size,purchase_color)
		VALUES (?,?,'','','')";

		$link = $pdo->prepare($sql);
		$link->bindValue(1,$username,PDO::PARAM_STR);
		$link->bindValue(2,$productname,PDO::PARAM_STR);
        	$link->execute();

		if (mysqli_query($link, $sql)) {
    			echo "???????????";
		} else {
    			echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}

		mysqli_close($link);
	}else{
    		header('Location: login.php');
	}


?>