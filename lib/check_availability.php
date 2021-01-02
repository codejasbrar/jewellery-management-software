<?php
// include Function  file
include_once('functions.php');

// Object creation. i made DB_config class inside the functions.php page.
// here $username is the object.
$username=new DB_config();
// Getting Post value
$uname= $_POST["username"];	
//Function Calling
//usernameavailblty is the function of DB_config class 
//object $username calling the usernameavailblty function with parameters and the result coming in $sql	
$sql=$username->usernameavailblty($uname);
$row_count=mysqli_num_rows($sql);
if($row_count > 0)
{
echo "<span style='color:red'> Username already associated with another account .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
  // disable the submit button so that user can't submit	
} 
else
{
	
	echo "<span style='color:green'> Unsername available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}

?>	