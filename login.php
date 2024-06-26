<?php
include('layouts/header.php');
//if user has already logged in then take user to account page
if(isset($_SESSION['logged_in'])){
  header('location: membershipaccount.php');
  exit;
}
include('server/getlogin.php');
?>

<!--------- login-page ------------>
<section class="my-5 py-5">
	<div class="container text-center mt-3 pt-5">
		<h2 class="form-weight-bold">Login</h2>
		<hr class="max-auto">
	</div>
	<div class="max-auto container">
		
		<div class="formcontainer">
			
				<img src="assets/images/login_pics.gif" alt="snow" height="100px" alt="Snow" style="width: 50%; border: double; border-radius: 50%; border-color: grey">
			
			<form id="loginform" method="POST" action="login.php">
				<p style="color: red" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
				<p style="color: green" class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message']; }?></p>
				<div class="form-group">
					<label>Email
					  <input type="text" class="form-control" id="loginemail" name="flduseremail" placeholder="Email" required/>
					</label><br>
				</div>
				<div class="form-group">
				<label>Password
					<input type="password" class="form-control" id="loginpassword" name="flduserpassword" placeholder="Password" required/>
				</label><br>
				</div>
				<div class="form-group">
					<button type="submit" name="loginbtn" class="btn" id="loginbtn" required>Login</button><a href="admin/adminlogin.php" class="btn" id="executivesigninbtn">Exec Sign in</a><br>
					<p style="font-size: small">Can't sign in?<a id="forgotpasswordurl" href="resetpassword.php">Forgot password</a></p><br>
					<p style="font-size: small">Don't have account?<a id="registerurl" href="registration.php">Register</a></p>
				</div>
			</form>
		</div>
	</div>
</section>
<?php
include('layouts/footer.php');
?>