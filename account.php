<?php
include_once('design.php');

if (isLogin()) {
	header('Location: profile.php');
}

if(isset($_GET['success'])) {
	echo "<script>alert('Account created. Login Now.');</script>";
}
psheader();

?>

<!-- end header -->
<div class="container">

	<div class="row mt-5">
		<div class="col-md-6">
			<h1>Register</h1>
			<form action="myfunctions.php" method="post">
				<div class="form-group">
					<span>Full Name</span>
					<input type="text" placeholder="Enter your name" value="" name="fullname" class="form-control" required>
				</div>
				<div class="form-group">
					<span>Username</span>
					<input type="text" placeholder="Enter your Username" value="" name="username" class="form-control" required>
				</div>
				<div class="form-group">
					<span>Password</span>
					<input type="password" placeholder="Enter your password" value="" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<span>Email</span>
					<input type="email" placeholder="Enter your Email" value="" name="useremail" class="form-control" required>
				</div>

				<input type="submit" value="Register" class="btn btn-primary" name="submitRegister">
			</form>
		</div>

		<div class="col-md-6 col-md-offset-2">
			<h1>Login</h1>
			<form action="myfunctions.php" method="post">
				<div class="form-group">
					<span>Username</span>
					<input type="text" placeholder="Enter your Username" value="" name="username" class="form-control" required>
				</div>
				<div class="form-group">
					<span>Password</span>
					<input type="password" placeholder="Enter your password" value="" name="password" class="form-control" required>
				</div>
				<input type="submit" value="Login" class="btn btn-primary" name="submitLogin">
			</form>
		</div>
	</div>
	<div class="clearfix"> </div>
	<hr>
</div>

<?php
psfooter();
?>