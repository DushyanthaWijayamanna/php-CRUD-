<?php

$con=mysqli_connect("localhost","root","","student-crud");

if(!$con){
    die('Connection Failed'.mysqli_connect_error);
  
         $_SESSION['message'] = "Student Created Successfully";
         
         

   


}

?>