<?php 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];


     include 'connect_db.php';

     $query = $connect->prepare("
      INSERT INTO `user_tbl`(`Name`, `Email`, `Password`, 
        `ConfirmPassword`) 
      VALUES ('$name', '$email', '$password', '$confirm_password')
    ");

     $query->execute();

     if($query){
     header("Location:register_success.php");
     }
     else{
     echo "Error in communication. Please try again";
     }

?>