<?php
include('connection.php');
if(isset($_POST['loginbtn'])){
  $useremail = $_POST['flduseremail'];
  $userpassword = md5($_POST['flduserpassword']);

  $stmt = $conn->prepare("SELECT flduserid,flduserimage,flduserfirstname,flduserlastname,flduseremail,flduserphonenumber,flduseraddress,flduserprogramminglanguage,flduserpassword FROM users WHERE flduseremail = ? AND flduserpassword = ? LIMIT 1");
  $stmt->bind_param('ss',$useremail,md5($userpassword));
  if($stmt->execute()){
    $stmt->bind_result($userid,$userimage,$userfirstname,$userlastname,$useremail,$userphonenumber,$useraddress,$userprogramminglanguage,$userpassword);
    $stmt->store_result();
    //If user is found in database
    if($stmt->num_rows() == 1){
      $stmt->fetch();
      //Set Users Session
      $_SESSION['flduserid'] = $userid;
      $_SESSION['flduserimage'] = $userimage;
      $_SESSION['flduserfirstname'] = $userfirstname;
      $_SESSION['flduserlastname'] = $userlastname;
      $_SESSION['flduseremail'] = $useremail;
      $_SESSION['flduserphonenumber'] = $userphonenumber;
      $_SESSION['flduseraddress'] = $useraddress;
      $_SESSION['flduserprogramminglanguage'] = $userprogramminglanguage;
      $_SESSION['logged_in'] = true;
      //Go To Membership Account Page
      header('location: ../membershipaccount.php?loginmessage=Logged In Successfully');
    }
    else{//Password or Email is Wrong Or not in Database
      //Go To Login Page
      header('location: ../login.php?error=Could Not Verify Your Account!');
    }
  }
  else{
    header('location: ../login.php?error=Could Not Login At The Moment');
  }
}