<?php
//error_reporting(0);
include_once('lib/dbfunctions.php');
include_once('lib/dbfunction.php');

$data = new Databasefunctions();
?>

<?php
//print_r($_POST);

?>
<!--pre>
<?php //var_dump($_POST); ?>
</pre-->

<?php

if($current_url=="update_user.php" || $current_url=="view_user.php" || $current_url=="reset_password.php" || $current_url=="reset_pin.php"){
	
	if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
	$_SESSION['view_user_id']=$_REQUEST['id'];
   }
    $users_id=$_SESSION['view_user_id'];

$sqlq="select * from users where id='$users_id' AND user_role!='admin'";
 $resultu = mysqli_query($con, $sqlq);  
 $row = mysqli_fetch_assoc($resultu);
	
	 $department_id=$row['department_id'];
		   $sqldepart="SELECT * FROM department_list WHERE id='$department_id' ORDER BY department_order ASC";
	       $resultdepart = mysqli_query($con, $sqldepart);  
           $rowd = mysqli_fetch_assoc($resultdepart);
	
	
}

$message="";
	
if(isset($_POST['submit']))
{
	
	
if(isset($_POST['submit']) && $_POST['submit']=='create_user')
{
	
	 $insert_data = array( 
           'user_role'          =>     mysqli_real_escape_string($con, $_POST['user_role']),
		   'title' => mysqli_real_escape_string($con, $_POST['title']),
		   'name' => mysqli_real_escape_string($con, $_POST['name']),
		   'designation' => mysqli_real_escape_string($con, $_POST['designation']),
		   'address' => mysqli_real_escape_string($con, $_POST['address']),
		   'phone_no' => mysqli_real_escape_string($con, $_POST['phone_no']),	  
		   'email' => mysqli_real_escape_string($con, $_POST['email']),
		   'identification_type' => mysqli_real_escape_string($con, $_POST['identification_type']),
		   'identification_no' => mysqli_real_escape_string($con, $_POST['identification_no']),  
		   'personal_notes' => mysqli_real_escape_string($con, $_POST['personal_notes']),
		   'department_id' => mysqli_real_escape_string($con, $_POST['department_id']),
		   'password' => mysqli_real_escape_string($con, $_POST['password']),
		   'pin' => mysqli_real_escape_string($con, $_POST['pin']) 
          );
		  if($users_id=$data->insert('users', $insert_data))
		  {
			  
			  
			  
			 ////////////////////////////////////////////////////////////////////////////////////// 
			  
			  
			        $photo_file_name = $_FILES['photoupload']['name'];
		            if(!empty($photo_file_name))
		            {
			
		              if($photo = $data->upload_file($_FILES['photoupload'],'data/users/photo/'))
		              {
						  
						   
						    $update_data = array(  
                           'photo'     =>     mysqli_real_escape_string($con, $photo)
							);  
                            $where_condition = array(  
                            'id'     =>     $users_id  
                            );  
                            if($photo_id=$data->update('users', $update_data, $where_condition))  
                            {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                            }   
						  
						  
						  
					  }
						
					}
			  
			  /////////////////////////////////////////////////////////////////////////////////////
			  
			  echo "<script>window.location.href='search_user.php';</script>";
		  }
	
}
	
	
	
	
	if($_POST['submit']=='update_user'){
	
	
	
	$update_data = array(  
                   'user_role'          =>     mysqli_real_escape_string($con, $_POST['user_role']),
		   'title' => mysqli_real_escape_string($con, $_POST['title']),
		   'name' => mysqli_real_escape_string($con, $_POST['name']),
		   'designation' => mysqli_real_escape_string($con, $_POST['designation']),
		   'address' => mysqli_real_escape_string($con, $_POST['address']),
		   'phone_no' => mysqli_real_escape_string($con, $_POST['phone_no']),	  
		   'email' => mysqli_real_escape_string($con, $_POST['email']),
		   'identification_type' => mysqli_real_escape_string($con, $_POST['identification_type']),
		   'identification_no' => mysqli_real_escape_string($con, $_POST['identification_no']),  
		   'personal_notes' => mysqli_real_escape_string($con, $_POST['personal_notes']),
		   'department_id' => mysqli_real_escape_string($con, $_POST['department_id'])
                 );
				$where_condition = array(  
              'id'     =>     $users_id  
             );  
				
		        if($data->update('users', $update_data, $where_condition))
		        {
			        ////////////////////////////////////////////////////////////////////////////////////// 
			  
			  
			        $photo_file_name = $_FILES['photoupload']['name'];
		            if(!empty($photo_file_name))
		            {
			
		              if($photo = $data->upload_file($_FILES['photoupload'],'data/users/photo/'))
		              {
						  
						   
						    $update_data = array(  
                           'photo'     =>     mysqli_real_escape_string($con, $photo)
							);  
                            $where_condition = array(  
                            'id'     =>     $users_id  
                            );  
                            if($photo_id=$data->update('users', $update_data, $where_condition))  
                            {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                            }   
						  
						  
						  
					  }
						
					}
			  
			  /////////////////////////////////////////////////////////////////////////////////////
			  
			  echo "<script>window.location.href='search_user.php';</script>";
		        }
	
	
       
  
	
	}
	
	
	
	
if(isset($_POST['submit']) && $_POST['submit']=='reset_password')
{
	  $current_password=mysqli_real_escape_string($con, $_POST['current_password']);
	  $new_password=mysqli_real_escape_string($con, $_POST['new_password']);
	  $re_password=mysqli_real_escape_string($con, $_POST['re_password']);
	
	   $old_password=$row['password'];
	
	    if($old_password==$current_password){
			
		
	
	        if($new_password==$re_password){
			
	        $update_data = array(  
                  'password' => mysqli_real_escape_string($con, $_POST['new_password'])
                 );
				$where_condition = array(  
              'id'     =>     $users_id  
             );  
				
		        if($data->update('users', $update_data, $where_condition))
		        {
					$message='Your password changed successfully!';
				}
				
				 }else{
				
				$message='New Password and Re-Enter New Password must be same';
			}
			
			
		}else{
			$message='Sorry, your current password is wrong!';
		}
	
	
}
	
	
	
	
	
	
if(isset($_POST['submit']) && $_POST['submit']=='reset_pin')
{
	  $current_pin=mysqli_real_escape_string($con, $_POST['current_pin']);
	  $new_pin=mysqli_real_escape_string($con, $_POST['new_pin']);
	  $re_pin=mysqli_real_escape_string($con, $_POST['re_pin']);
	
	   $old_pin=$row['pin'];
	
	    if($old_pin==$current_pin){
			
		
	
	        if($new_pin==$re_pin){
			
	        $update_data = array(  
                  'pin' => mysqli_real_escape_string($con, $_POST['new_pin'])
                 );
				$where_condition = array(  
              'id'     =>     $users_id  
             );  
				
		        if($data->update('users', $update_data, $where_condition))
		        {
					$message='Your pin changed successfully!';
				}
				
				 }else{
				
				$message='New Pin and Re-Enter New Pin must be same';
			}
			
			
		}else{
			$message='Sorry, your current pin is wrong!';
		}
	
	
}
	
	
	
	
    
	
}





if(isset($_POST['action']) && $_POST['action']=='delete')
{
	$table=$_POST['tble_name'];
	$id=$_POST['id'];
	$where='id='.$id;
	
	
	
	$delete_col=deleteWhere($con,$table,$where);
	
}
?>
