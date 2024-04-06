<?php
include('connection.php');
if(isset($_POST['registrationbtn'])){
  $userimage = $_POST['flduserimage'];
  $userfirstname = $_POST['flduserfirstname'];
  $userlastname = $_POST['flduserlastname'];
  $useremail = $_POST['flduseremail'];
  $userphonenumber = $_POST['flduserphonenumber'];
  $useraddress = $_POST['flduseraddress'];
  $userprogramminglanguage = $_POST['flduserprogramminglanguage'];
  $userpassword = md5($_POST['flduserpassword']);
  $userconfirmpassword = md5($_POST['flduserconfirmpassword']);

  //if password dont match
  if($userpassword !== $userconfirmpassword){
    header('location: ../registration.php?error=passwords dont match');
  }
  else if(strlen($userpassword) < 8)
  {//if password is less than 8 characters
    header('location: ../registration.php?error=password must be atleast 8 characters');
  }
  else{//if there is no error
    //check whether there is a user with this email or not
    $stmt = $conn->prepare("SELECT count(*) FROM users WHERE flduseremail=?");
    $stmt->bind_param('s',$useremail);
    if($stmt->execute()){
      $stmt->bind_result($num_rows);
      $stmt->store_result();
      $stmt->fetch();
    }
    else{
      header('location: ../registration.php?errormessage=Something Went Wrong, Try Again!!');
    }

    //if there is a user already registered with this email
    if($num_rows != 0){
      header('location: ../registration.php?error=User With This Email Already Exists!');
    }
    else{//if no user registered with this email before
      //Create New User
      $stmt1 = $conn->prepare("INSERT INTO users (flduserimage,flduserfirstname,flduserlastname,flduseremail,flduserphonenumber,flduseraddress,flduserprogramminglanguage,flduserpassword)
            VALUES(?,?,?,?,?,?,?,?)");
      $stmt1->bind_param('ssssssss',$userimage,$userfirstname,$userlastname,$useremail,$userphonenumber,$useraddress,$userprogramminglanguage,md5($userpassword));

      //if account was created succesfully
      if($stmt1->execute()){
        $userid = $stmt1->insert_id;
        //Set user Session
        $_SESSION['flduserid'] = $userid;
        $_SESSION['flduserfirstname'] = $userfirstname;
        $_SESSION['flduserlastname'] = $userlastname;
        $_SESSION['flduseremail'] = $useremail;
        $_SESSION['flduserphonenumber'] = $userphonenumber;
        $_SESSION['flduseraddress'] = $useraddress;
        $_SESSION['flduserprogramminglanguage'] = $userprogramminglanguage;
        $_SESSION['logged_in'] = true;
        header('location: ../membershipaccount.php?registermessage=You Registered Succesfully');
      }
      else{//account could not be created
        header('location: ../registration.php?error=Could Not Create An Account At The Moment');
      }
    }
  }
}