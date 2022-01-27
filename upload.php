<?php error_reporting(E_ALL ^ E_NOTICE);
$target_path = "Save_File/";  
$target_path = $target_path.basename( $_FILES['file']['name']);   
  
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path))
 {  
     echo"file upload succefully";
 }
 else
 {
     echo"opps something went wrong";
 }
?> 
