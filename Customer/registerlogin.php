<html>
    <head>
        <title>TorioRx Pharmacy</title>

        <?php include("../Customer/includes/main/products_header.php"); ?>

        <?php include("../Customer/includes/main/registerlogin_style.php"); ?>

    </head>

    <body style="font-family: Poppins;">

    <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="customerRegister.php" method="POST">
					<label for="chk" aria-hidden="true">Register</label>
					<input type="text" name="username" placeholder="Username" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="customerLogin.php" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="submit">Sign in</button>
				</form>
			</div>
	</div>

    </body>
</html>
