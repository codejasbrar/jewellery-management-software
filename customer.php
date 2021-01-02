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

if($current_url=="update_customer.php" || $current_url=="view_customer.php"){
	
	if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
	$_SESSION['view_customer_id']=$_REQUEST['id'];
   }
    $main_customer_id=$_SESSION['view_customer_id'];

      $sqlcustomer="SELECT * FROM customer WHERE id='$main_customer_id' ORDER BY id DESC";
	  $result = mysqli_query($con, $sqlcustomer);  
           $rowcust = mysqli_fetch_assoc($result);
	      $customer_id=$rowcust['customer_id'];
          $customer_type=$rowcust['customer_type'];
	
}


	
if(isset($_POST['submit']))
{
	$form_data=$_POST;
	
	if($_POST['submit']=='create_customer'){
	$customer_type=mysqli_real_escape_string($con, $_POST['customer_type']);
	unset($form_data['customer_type']);
	}
	
	unset($form_data['submit']);
	
    //print_r($form_data);
	//exit;
	
	
	      if($customer_type=='retail_customer')
	      {
			  $name=mysqli_real_escape_string($con, $_POST['full_name']);
		      $email=mysqli_real_escape_string($con, $_POST['email_address']);
		      $phone_no=mysqli_real_escape_string($con, $_POST['telephone_number']);
		  }
		  if($customer_type=='trade_buisness_customer')
	      {
			  $name=mysqli_real_escape_string($con, $_POST['company_name']);
		      $email=mysqli_real_escape_string($con, $_POST['primary_email_address']);
		      $phone_no=mysqli_real_escape_string($con, $_POST['contact_number']);
		  }
		  if($customer_type=='student_customer')
	      {
			  $name=mysqli_real_escape_string($con, $_POST['full_name']);
		      $email=mysqli_real_escape_string($con, $_POST['email_address']);
		      $phone_no=mysqli_real_escape_string($con, $_POST['telephone_number']);
		  }
	
	if($_POST['submit']=='create_customer'){
		
		$result =insert($con,$customer_type,$form_data);
	   if(!$result){ 
		echo "Error".mysqli_error($con);
	   }else{
	
		$success_message = 'Post Inserted';  
		
		  $customer_id=$result;
		  
		  $customer_insert_data = array(  
           'customer_type'     =>     mysqli_real_escape_string($con, $customer_type),  
           'customer_id'          =>     mysqli_real_escape_string($con, $customer_id),
		   'name' => mysqli_real_escape_string($con, $name),
		   'email' => mysqli_real_escape_string($con, $email),
		   'phone_no' => mysqli_real_escape_string($con, $phone_no)
          );
		  if($main_customer_id=$data->insert('customer', $customer_insert_data))
		  {
			   echo "<script>alert('Data inserted successfully');</script>";
			  echo "<script>window.location.href='search_customer.php';</script>";
		  }
		
	    }
		
	}
	
	
	
	
	if($_POST['submit']=='update_customer'){
	
	
$where='id='.$customer_id;
$update_customer =update($con,$customer_type,$form_data,$where);
      
if (!$update_customer)
  {
  echo("Error description: " . mysqli_error($con));
  
  }else{
	
	
	$customer_update_data = array(  
                  'customer_type'     =>     mysqli_real_escape_string($con, $customer_type),  
                  'customer_id'          =>     mysqli_real_escape_string($con, $customer_id),
		          'name' => mysqli_real_escape_string($con, $name),
		          'email' => mysqli_real_escape_string($con, $email),
		          'phone_no' => mysqli_real_escape_string($con, $phone_no)
                 );
				$customer_where_condition = array(  
              'id'     =>     $main_customer_id  
             );  
				
		        if($data->update('customer', $customer_update_data, $customer_where_condition))
		        {
					 echo "<script>alert('Updated successfully');</script>";
			       echo "<script>window.location.href='search_customer.php';</script>";
		        }
	
	
       }
  
	
	}
	
    
	
}


if($current_url=="update_customer.php" || $current_url=="view_customer.php"){
	
	$sqlcustomertype="SELECT * FROM $customer_type WHERE id='$customer_id' ORDER BY id DESC";
	  $resulttype = mysqli_query($con, $sqlcustomertype);  
           $row = mysqli_fetch_assoc($resulttype);

$customer_type_text="";
		 if($customer_type=='retail_customer'){
			 $customer_type_text="Retail";
		 } 
		 if($customer_type=='trade_buisness_customer'){
			 $customer_type_text="Trade Buisness";
		 } 
		 if($customer_type=='student_customer'){
			 $customer_type_text="Student";
		 }  
	
}



if(isset($_POST['action']) && $_POST['action']=='delete')
{
	$table=$_POST['tble_name'];
	$id=$_POST['id'];
	$where='id='.$id;
	
	if($table=='customer'){
		$sqlcustomertype="SELECT * FROM $table WHERE id='$id' ORDER BY id DESC";
	  $resulttype = mysqli_query($con, $sqlcustomertype);  
           $row = mysqli_fetch_assoc($resulttype);
	$customer_type=$row['customer_type'];
	$customer_id=$row['customer_id'];
	$where_type='id='.$customer_id;
	$delete_col=deleteWhere($con,$customer_type,$where_type);	
	}
	
	$delete_col=deleteWhere($con,$table,$where);
	 
}
?>
