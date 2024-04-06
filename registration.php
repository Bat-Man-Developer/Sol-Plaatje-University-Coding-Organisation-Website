<?php
include('layouts/header.php');
//if user has already registered then take user to account page
if(isset($_SESSION['logged_in'])){
  header('location: membershipaccount.php');
  exit;
}
include('server/getregistration.php');
?>

<!--------- registration-page ------------>
<section class="my-5 py-5">
	<div class="container text-center mt-3 pt-5">
		<h2 class="form-weight-bold">Registration</h2>
		<hr class="max-auto">
	</div>
	<div class="registrationcontainer">
		<form id="registrationform" method="POST" action="registration.php">
			<p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} ?></p>
			<div class="form-group">
				<label>First Name
				  <input type="text" class="form-control" id="registrationfirstname" name="flduserfirstname" placeholder="First Name" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Last Name
					<input type="text" class="form-control" id="registrationlastname" name="flduserlastname" placeholder="Last Name" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Email
					<input type="text" class="form-control" id="registrationemail" name="flduseremail" placeholder="Email" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Phone Number
					<input type="text" class="form-control" id="registrationphonenumber" name="flduserphonenumber" placeholder="Phone Number" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Address
					<input type="text" class="form-control" id="registrationaddress" name="flduseraddress" placeholder="Address" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Programming Language
					<select class="form-control" id="registrationprogramminglanguage" name="flduserprogramminglanguage" size="1" value="" required>
						<option value="">Select Programming Language..</option>
						<option value="HTML">HTML</option>
						<option value="CSS">CSS</option>
						<option value="JAVASCRIPT">JAVASCRIPT</option>
						<option value="PYTHON">PYTHON</option>
						<option value="JAVA">JAVA</option>
						<option value="PHP">PHP</option>
						<option value="SQL">SQL</option>
						<option value="C++">C++</option>
						<option value="C#">C#</option>
						<option value="Ruby">Ruby</option>
						<option value="SWIFT">SWIFT</option>
					</select>
				</label>
			</div>
			<div class="form-group">
				<label>Password
					<input type="password" class="form-control" id="registrationpassword" name="flduserpassword" placeholder="Password" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Confirm Password
					<input type="password" class="form-control" id="registrationconfirmpassword" name="flduserconfirmpassword" placeholder="Confirm Password" required/>
				</label>
			</div>
			<div class="row">
			  <input type="hidden" name="flduserimage" value="unknownimage.png" required/>
				<button type="submit" name="registrationbtn" class="btn" id="registrationbtn" required>Register</button>
				<p style="font-size: small">Do you have an account?<a id="loginurl" href="login.php">Login</a></p>
			</div>
		</form>
	</div>
</section>
<?php
include('layouts/footer.php');
?>