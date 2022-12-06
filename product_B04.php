<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../css/style1.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
	</head>
	<body>
			<div class = 'frame'>
				<div class = 'left'>GOHAN</div>
				<div class = 'right'>
					<?php  
					session_start();
					if(isset($_SESSION['email'])){
    						//ログイン済みの場合
    						echo "
							<form action='../logout.php' method='post'>
								<input class='btn' type='submit' value='Log In'/>
							</form>
						";
					}else{
    						//ログインしていない場合
    						echo "
							<form action='../login.php' method='post'>
								<input class='btn' type='submit' value='Log Out'/>
							</form>
						";
					}
					?>
				</div>
			</div>				
		<div class = 'line-hr'>
			<hr size = "4" color = "black" >
		</div>
		<!-- ↑ここまでがヘッダーのhtml↑ -->
		<div name="maindiv" clas="container">
			<div class="row mt-5 gy-3">
				<div class="col-md-6">
					<img class="p-3" src="../img/outfit_2_4.jpg">
				</div>
				<div class="col-md-6">
					<div class="text-center">
						wego ナイロンスニーカー　k-15
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
</html>