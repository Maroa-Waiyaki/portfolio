<?php

if(count($_POST)>0)
{    
     include 'mydbCon.php';

     $name = $_POST['name'];
     $message = $_POST['message'];
     $email = $_POST['email'];
      $subject = $_POST['subject'];
 
     $query = "INSERT INTO contact_us (name,message,email,subject)
     VALUES ('$name','$message','$email', '$subject')";

     mysqli_query($dbCon, $query);

     $lastId = mysqli_insert_id($dbCon);
 
     if (!empty($lastId)) {
        $message = "Your contact information is saved successfully";
     }

}
  header ("Location: thank-you.php");
?>