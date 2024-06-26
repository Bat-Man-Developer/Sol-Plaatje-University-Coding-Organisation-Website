<?php
include('layouts/header.php'); 
//if user is not logged in then take user to login page
if(!isset($_SESSION['logged_in'])){
  header('location: login.php');
  exit;
} 
include('server/geteditprofile.php');
?>

<!--------- Edit Profile Page--------->
<section id="editprofile" class="editprofile container my-5 py-3" style="margin-bottom: 100px">
	<div class="container mt-2">
		<h2 class="font-weight-bold text-center">Your Profile</h2>
		<hr class="mx-auto">
	</div>
  <!------------- Website Messages----------->
  <p style="color: red; font-weight: bold; text-align: center" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
  <p style="color: green" class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message']; }?></p>
  
	<div class="editprofiletablecontainer">
    <!--------- edit profile form ------------>
    <div class="max-auto container" >
      <div class="editprofiletable">
        <?php foreach($editprofile as $profile){?>
        <img style="width: 140px; height: 140px; border-radius: 50%" src="<?php if(isset($profile['flduserimage'])){ echo "assets/images/". $profile['flduserimage']; }else{ echo "assets/images/unknownimage.png"; } ?>">
        <p><?php echo $profile['flduserfirstname']; echo " "; echo $profile['flduserlastname']; ?></p>
        <p><?php echo $profile['flduseremail']; ?></p>
        <p><?php echo $profile['flduserprogramminglanguage']; ?></p>
      </div>
      <form id="editprofileimageform" enctype="multipart/form-data" method="POST" action="editprofile.php" style="text-align: center;">
        <div class="form-group">
          <label>Profile Image
            <input type="file" class="form-control" name="flduserimage"  required/>
          </label>
          <input type="hidden" name="flduserid" value="<?php echo $profile['flduserid']; ?>" required/>
          <input form="editprofileimageform" class="editprofileuploadbtn" name="editprofileimagebtn" type="submit" value="Upload" required/>
        </div>
      </form>
      <form id="editprofilephonenumberform" method="POST" action="editprofile.php" style="text-align: center;">
        <div class="form-group">
          <label>Profile Phone Number
            <input type="text" class="form-control" name="flduserphonenumber" value="<?php echo $profile['flduserphonenumber']; ?>"  required/>
          </label>
          <input type="hidden" name="flduserid" value="<?php echo $profile['flduserid']; ?>" required/>
          <input form="editprofilephonenumberform" class="editprofileverifybtn" name="editprofilephonenumberbtn" type="submit" value="Verify" required/>
        </div>
      </form>
      <form id="editprofileemailform" method="POST" action="editprofile.php" style="text-align: center;">
        <div class="form-group">
          <label>Profile Email
            <input type="disabled" class="form-control" name="flduseremail" value="<?php echo $profile['flduseremail']; ?>"/>
          </label>
          <input type="hidden" name="flduserid" value="<?php echo $profile['flduserid']; ?>" required/>
          <input form="editprofileemailform" class="editprofileverifybtn" name="editprofileemailbtn" type="submit" value="Verify" required/>
        </div>
      </form>
      <form id="editprofileform" method="POST" action="editprofile.php" style="text-align: center;">
        <div class="form-group">
          <label>Programming Language
            <select class="form-control" id="editprofileprogramminglanguage" name="flduserprogramminglanguage" size="1" value="<?php echo $profile['flduserprogramminglanguage']; ?>">
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
              <option value="R">R</option>
            </select>
          </label>
        </div>
        <div class="form-group">
          <label>Profile First Name
            <input type="text" class="form-control" name="flduserfirstname" value="<?php echo $profile['flduserfirstname']; ?>"/>
          </label>
        </div>
        <div class="form-group">
          <label>Profile Last Name
            <input type="text" class="form-control" name="flduserlastname" value="<?php echo $profile['flduserlastname']; ?>"/>
          </label>
        </div>
        <div class="form-group">
          <label>Profile Address
            <input type="text" class="form-control" name="flduseraddress" value="<?php echo $profile['flduseraddress']; ?>"/>
          </label>
        </div>
        <div class="form-group">
          <input type="hidden" name="flduserid" value="<?php echo $profile['flduserid']; ?>" required/>
          <input form="editprofileform" class="editprofilebtn" name="editprofilebtn" type="submit" value="Update" style="width: fit-content;" required/>
          <a id="helpurl" href="Help.php"><br>Need Help?</a>
        </div>
        </form>
      <?php }?>
    </div>
  </div>
</section>
</body>
</html>