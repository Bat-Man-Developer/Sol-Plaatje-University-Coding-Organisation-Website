<?php
include('adminlayouts/adminheader.php');
//if user is not logged in then take user to login page
if(!isset($_SESSION['adminlogged_in'])){
  header('location: adminlogin.php');
  exit;
}
include('adminserver/getadminsendupdates.php');
?>
  <body>
    <!--------- Admin-Add-Products-Page ------------>
    <section class="dashboard">
      <div class="dashboardcontainer" id="dashboardcontainer">
        <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
          <p class="text-center" style="color: green"><?php if(isset($_GET['editmessage'])){ echo $_GET['editmessage']; }?></p>
          <p class="text-center" style="color: red"><?php if(isset($_GET['errormessage'])){ echo $_GET['errormessage']; }?></p>
          <h3>Send Updates</h3>
          <hr class="mx-auto">
          <div class="dashboardadmininfo">
            <p>Name: <span><?php if(isset($_SESSION['fldadminname'])){ echo $_SESSION['fldadminname']; }?></span> Position: <span><?php if(isset($_SESSION['fldadminposition'])){ echo $_SESSION['fldadminposition']; }?></span> Department: <span><?php if(isset($_SESSION['fldadmindepartment'])){ echo $_SESSION['fldadmindepartment']; }?></span></p>
          </div>
          <div class="dashboardinfo">
            <div class="adminaddproductstablecontainer">
              <!--------- add product form ------------>
              <div class="adminaddproductstable">
                <form id="adminaddproductsform" method="POST" action="adminsendupdates.php" style="text-align: center;">
                  <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} ?></p>
                  <div class="form-group">
                    <label>Message Importance
                      <select class="form-select" required name="fldupdatesimportance">
                        <option value="High Importance">High Importance!</option>
                      </select>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Message
                      <input type="text" class="form-control" name="fldupdatestext" placeholder="Message" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <input class="btn" id="admineditbtn" name="adminsendupdatesbtn" type="submit" value="Edit" style="width: 270px;" required/>
                    <a id="helpurl" href="Help.php"><br>Need Help?</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><br><br><br><br><br><br><br><br><br>	
  </body>
</html>