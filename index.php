<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> LOGIN AUTOPART	</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link Style  Open --->
    <link rel="icon" type="image/x-icon" href="siswa/assets/img/favicon/logo.png" />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="asset/css/login.css">

	<!-- Link Style Close--->

</head>
<body>
	<section class="ftco-section" style="background-image: url('asset/img/2.png');">
		<div class="container" >

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5" >
					<div class="login-wrap p-4 p-md-5">
							<div class="icon d-flex align-items-center justify-content-center">	</div>
								<h3 class="text-center mb-4">Silakan Login Sesuai Dengan Username Dan Password</h3>

						<!-- Form Open--->
						<form action="login_cek.php" class="login-form" method="post">
							<div class="form-group">
		      					<input type="text" name="user_name" class="form-control rounded-left" placeholder="Username" required>
		      				</div>
							<div class="form-group d-flex">
	              				<input type="password" name="password_user" class="form-control rounded-left" placeholder="Password" required>
	           				</div>
	           				<div class="form-group">
	            				<button type="submit" name="submit" class="btn btn-primary rounded submit p-2 px-4">LOGIN</button>
	           			 	</div>

						</form>
						<!-- Form Close--->

					</div>
				</div>
			</div>	
		</div>
		
	</section>

</body>
</html>