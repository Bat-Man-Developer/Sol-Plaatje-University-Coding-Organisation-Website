<?php

include('connection.php');
if(isset($_POST['submitcontactformbtn'])){
  $name=$_POST['fldname'];
  $email=$_POST['fldemail'];
  $message=$_POST['fldmessage'];
  $date = date('Y-m-d H:i:s');

  if($message != ""){
    //Create New Contact Message
    $stmt = $conn->prepare("INSERT INTO contacts (fldcontactsname,fldcontactsemail,fldcontactsmessage,fldcontactsdate)
    VALUES(?,?,?,?)");
    $stmt->bind_param('ssss',$name,$email,$message,$date);

    //If Contact was updated succesfully
    if($stmt->execute()){
      $contactsid = $stmt->insert_id;
      header('location: ../contact.php?message=Email Sent Succesfully. Customer Support Team Will Respond As Soon As Possible.');
    }
    else{
      header('location: ../contact.php?error=Something Went Wrong. Try Again');
    }
  }
  else{
    header('location: ../contact.php?error=Something Went Wrong. Try Again');
  }
}
?>
