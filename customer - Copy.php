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
/*
if(isset($_POST['submit']))
{
	
	$data = new Databasefunctions();
	
	$customer_type=mysqli_real_escape_string($con, $_POST['customer_type']);
	
	if($customer_type=='retail_customer')
	{
		
		$insert_data = array(  
           'full_name'     =>     mysqli_real_escape_string($con, $_POST['full_name']),  
           'telephone_number'          =>     mysqli_real_escape_string($con, $_POST['telephone_number']),
		   'mobile_number' => mysqli_real_escape_string($con, $_POST['mobile_number']),
		   'email_address' => mysqli_real_escape_string($con, $_POST['email_address']),
		   'delivery_address' => mysqli_real_escape_string($con, $_POST['delivery_address']),
		   'customer_notes' => mysqli_real_escape_string($con, $_POST['customer_notes']),
		   'credit_facilty' => mysqli_real_escape_string($con, $_POST['credit_facilty']),
		   'credit_facility_amount' => mysqli_real_escape_string($con, $_POST['credit_facility_amount']),
		   'credit_terms' => mysqli_real_escape_string($con, $_POST['credit_terms']),
		   'credit_notes' => mysqli_real_escape_string($con, $_POST['credit_notes'])
      );  
		
		
		$name=mysqli_real_escape_string($con, $_POST['full_name']);
		$email=mysqli_real_escape_string($con, $_POST['email_address']);
		$phone_no=mysqli_real_escape_string($con, $_POST['telephone_number']);
		
		
	}
	
	if($customer_type=='trade_buisness_customer')
	{
		
		$insert_data = array(  
           'company_name'     =>     mysqli_real_escape_string($con, $_POST['company_name']),  
           'company_reg_number'          =>     mysqli_real_escape_string($con, $_POST['company_reg_number']),
		   'vat' => mysqli_real_escape_string($con, $_POST['vat']),
		   'company_information' => mysqli_real_escape_string($con, $_POST['company_information']),
		   'primary_contact_name' => mysqli_real_escape_string($con, $_POST['primary_contact_name']),
		   'primary_email_address' => mysqli_real_escape_string($con, $_POST['primary_email_address']),
		   'company_website' => mysqli_real_escape_string($con, $_POST['company_website']),
		   'company_address' => mysqli_real_escape_string($con, $_POST['company_address']),
		   'contact_number' => mysqli_real_escape_string($con, $_POST['contact_number']),
		   'delivery_address' => mysqli_real_escape_string($con, $_POST['delivery_address']),
		   'company_billing_name' => mysqli_real_escape_string($con, $_POST['company_billing_name']),
		   'accounts_payable_contact_name' => mysqli_real_escape_string($con, $_POST['accounts_payable_contact_name']),
		   'accounts_email_address' => mysqli_real_escape_string($con, $_POST['accounts_email_address']),
		   'accounts_contact_number' => mysqli_real_escape_string($con, $_POST['accounts_contact_number']),
		   'credit_facilty' => mysqli_real_escape_string($con, $_POST['credit_facilty']),
		   'credit_facility_amount' => mysqli_real_escape_string($con, $_POST['credit_facility_amount']),
		   'credit_terms' => mysqli_real_escape_string($con, $_POST['credit_terms']),
		   'credit_notes' => mysqli_real_escape_string($con, $_POST['credit_notes'])
      );  
		
		
		$name=mysqli_real_escape_string($con, $_POST['company_name']);
		$email=mysqli_real_escape_string($con, $_POST['primary_email_address']);
		$phone_no=mysqli_real_escape_string($con, $_POST['contact_number']);
		
		
	}
	  
	
	if($customer_type=='student_customer')
	{
		
		$insert_data = array(  
           'full_name'     =>     mysqli_real_escape_string($con, $_POST['full_name']),  
           'telephone_number'          =>     mysqli_real_escape_string($con, $_POST['telephone_number']),
		   'email_address' => mysqli_real_escape_string($con, $_POST['email_address']),
		   'delivery_address' => mysqli_real_escape_string($con, $_POST['delivery_address']),
		   'college_or_university_attended' => mysqli_real_escape_string($con, $_POST['college_or_university_attended']),
		   'course' => mysqli_real_escape_string($con, $_POST['course']),
		   'student_notes' => mysqli_real_escape_string($con, $_POST['student_notes'])
      );  
		
		$name=mysqli_real_escape_string($con, $_POST['full_name']);
		$email=mysqli_real_escape_string($con, $_POST['email_address']);
		$phone_no=mysqli_real_escape_string($con, $_POST['telephone_number']);
		
	}
	
	
      if($customer_id=$data->insert($customer_type, $insert_data))  
      {  
		  //echo $customer_id;
           $success_message = 'Post Inserted';  
		  
		  $customer_insert_data = array(  
           'customer_type'     =>     mysqli_real_escape_string($con, $customer_type),  
           'customer_id'          =>     mysqli_real_escape_string($con, $customer_id),
		   'name' => mysqli_real_escape_string($con, $name),
		   'email' => mysqli_real_escape_string($con, $email),
		   'phone_no' => mysqli_real_escape_string($con, $phone_no)
          );
		  if($main_customer_id=$data->insert('customer', $customer_insert_data))
		  {
			  echo "<script>window.location.href='search_customer.php'</script>";
		  }
		  
		  
      }  
		
}
*/

	
if(isset($_POST['submit']) && $_POST['submit']=='create_customer')
{
	$form_data=$_POST;
	
	
	$customer_type=mysqli_real_escape_string($con, $_POST['customer_type']);
	unset($form_data['customer_type']);
	unset($form_data['submit']);
	
    //print_r($form_data);
	//exit;
	
	
    $result =insert($con,$customer_type,$form_data);
	if(!$result){ 
		echo "Error".mysqli_error($con);
	}else{
	
		$success_message = 'Post Inserted';  
		
		  $customer_id=$result;
		  
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
		  
		  $customer_insert_data = array(  
           'customer_type'     =>     mysqli_real_escape_string($con, $customer_type),  
           'customer_id'          =>     mysqli_real_escape_string($con, $customer_id),
		   'name' => mysqli_real_escape_string($con, $name),
		   'email' => mysqli_real_escape_string($con, $email),
		   'phone_no' => mysqli_real_escape_string($con, $phone_no)
          );
		  if($main_customer_id=$data->insert('customer', $customer_insert_data))
		  {
			  echo "<script>window.location.href='search_customer.php'</script>";
		  }
		
	}
	
}

?>
