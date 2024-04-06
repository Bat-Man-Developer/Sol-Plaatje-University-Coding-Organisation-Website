<?php
include('connection.php');
//Edit Profile Details
if(isset($_POST['editprofilebtn'])){
  $userid = $_POST['flduserid'];
  $userfirstname = $_POST['flduserfirstname'];
  $userlastname = $_POST['flduserlastname'];
  $useremail = $_SESSION['flduseremail'];
  $useraddress = $_POST['flduseraddress'];
  $userprogramminglanguage = $_POST['flduserprogramminglanguage'];
  //1. Update Profile Details In User Table
  $stmt = $conn->prepare("UPDATE users SET flduserfirstname=?,flduserlastname=?,flduseraddress=?,flduserprogramminglanguage=? WHERE flduseremail=?");
  $stmt->bind_param('sssss',$userfirstname,$userlastname,$useraddress,$userprogramminglanguage,$useremail);
  if($stmt->execute()){
    $stmt1 = $conn->prepare("SELECT flduserfirstname,flduserlastname,flduseraddress,flduserprogramminglanguage,flduseremail FROM users WHERE flduseremail = ? LIMIT 1");
    $stmt1->bind_param('s',$useremail);
    if($stmt1->execute()){
      $stmt1->bind_result($userfirstname,$userlastname,$useraddress,$userprogramminglanguage,$useremail);
      $stmt1->store_result();
      //If user is found in database
      if($stmt1->num_rows() == 1){
        $stmt1->fetch();
        //Set Users Session
        $_SESSION['flduserfirstname'] = $userfirstname;
        $_SESSION['flduserlastname'] = $userlastname;
        $_SESSION['flduseraddress'] = $useraddress;
        $_SESSION['flduserprogramminglanguage'] = $userprogramminglanguage;
        $_SESSION['flduseremail'] = $useremail;
        $_SESSION['logged_in'] = true;
      }
      else{
        header('location: ../editprofile.php?error=Error Occured, Try Again. 404 Failed To Find User Information In Database.');
      }
    }
    else{
      header('location: ../editprofile.php?error=Error Occured, Try Again. 404 Failed To Find User Information In Database.');
    }
  }
  else{
    header('location: ../editprofile.php?error=Error Occured, Try Again. 404 Failed To Update User Details.');
  }
}
else if(isset($_POST['editprofileimagebtn'])){
  $userfirstname = $_SESSION['flduserfirstname'];
  $useremail = $_SESSION['flduseremail'];
  //The Image File
  $target_dir = $_SERVER['DOCUMENT_ROOT']."/assets/images/";
  $userimage = basename($_FILES["flduserimage"]["name"]);

  //Check Image Files
  $uploadOk = 1;
  $imageFileType = pathinfo($userimage,PATHINFO_EXTENSION);

  // Check Image file size
  if($_FILES["flduserimage"]["size"] > 500000) {
    $uploadOk = 0;
    header('location: ../editprofile.php?editmessage=Error Occured, Your File Is Too Large.');
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"){
    $uploadOk = 0;
    header('location: ../editprofile.php?editmessage=Error Occured, Only JPG, JPEG, PNG & GIF Files Are Allowed.');
  }
  else if($imageFileType == "jpg"){
    //Image Name
    $userimagename = $userfirstname.uniqid().".jpg";
    $target_file = $target_dir.$userimagename;
  }
  else if($imageFileType == "jpeg"){
    $userimagename = $userfirstname.uniqid().".jpeg";
    $target_file = $target_dir.$userimagename;
  }
  else if($imageFileType == "png"){
    $userimagename = $userfirstname.uniqid().".png";
    $target_file = $target_dir.$userimagename;
  }
  else if($imageFileType == "gif"){
    $userimagename = $userfirstname.uniqid().".gif";
    $target_file = $target_dir.$userimagename."gif";
  }
  
  // Check if $uploadOk is set to 0 by an error
  if($uploadOk == 0){
    header('location: ../editprofile.php?errormessage=Unexpected Error, Try Again.');
  }
  else{// if everything is ok, try to Upload File
    if(move_uploaded_file($_FILES["flduserimage"]["tmp_name"], $target_file)){

    }
    else{
      header('location: ../editprofile.php?errormessage=Image Upload Failed, Try Again.');
    }
  }
  //1. Update Image In Users
  $stmt2 = $conn->prepare("UPDATE users SET flduserimage=? WHERE flduseremail=?");
  $stmt2->bind_param('ss',$userimagename,$useremail); 
  if($stmt2->execute()){
    $stmt3 = $conn->prepare("SELECT flduserimage FROM users WHERE flduseremail = ? LIMIT 1");
    $stmt3->bind_param('s',$useremail);
    if($stmt3->execute()){
      $stmt3->bind_result($userimage);
      $stmt3->store_result();
      //If user is found in database
      if($stmt3->num_rows() == 1){
        $stmt3->fetch();
        //Set Users Session
        $_SESSION['flduserimage'] = $userimage;
      }
      else{
        header('location: ../editprofile.php?error=Error Occured, Try Again.');
      }
    }
    else{
      header('location: ../editprofile.php?error=Error Occured, Try Again.');
    }
  }
  else{
    header('location: ../editprofile.php?error=Error Occured, Try Again.');
  }
}

if(isset($_GET['flduserid'])){
  $userid = $_GET['flduserid'];
  $stmt4 = $conn->prepare("SELECT * FROM users WHERE flduserid = ?");
  $stmt4->bind_param('i',$userid);
  $stmt4->execute();
  $editprofile = $stmt4->get_result();// This is an array
}
else if(isset($_POST['flduserid'])){
  $userid = $_POST['flduserid'];
  $stmt4 = $conn->prepare("SELECT * FROM users WHERE flduserid = ?");
  $stmt4->bind_param('i',$userid);
  if($stmt4->execute()){
    $editprofile = $stmt4->get_result();// This is an array
  }
  else{
    header('location: membershipaccount.php?errormessage=Something Went Wrong. Contact Support Team!!');
  }
}