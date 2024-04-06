<?php
include('adminconnection.php');
//Edit Product Details
if(isset($_POST['adminsendupdatesbtn'])){
  $updatesimportance = $_POST['fldupdatesimportance'];
  $updatestext = $_POST['fldupdatestext'];
  $updatesdate = date('Y-m-d H:i:s');

  //1. Insert In Updates Table
  $stmt = $conn->prepare("INSERT INTO updates (fldupdatesimportance,fldupdatesdate,fldupdatestext,)
  VALUES (?,?,?)");
  $stmt->bind_param('sss',$updatesimportance,$updatesdate,$updatestext); 
  //1.2 Issue New Updates ID & Store Updates Info in Database
  $_SESSION['fldupdatesid'] = $updatesid = $stmt->insert_id;
  
  if($stmt->execute()){
    header('location: ../admin/adminsendupdates.php?editmessage=Members Updated Succesfully!');
  }
  else{
    header('location: ../admin/adminsendupdates.php?errormessage=Error Occured, Try Again Later.');
  }
}