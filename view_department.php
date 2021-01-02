<?php include_once('header.php'); 
include_once('lib/dbfunctions.php');
include_once('lib/dbfunction.php');

$data = new Databasefunctions();
?>

<?php
if(isset($_REQUEST['id']) && !empty($_REQUEST['id']) && isset($_REQUEST['department']) && !empty($_REQUEST['department'])){
	
	$order_id=$_REQUEST['id'];
	$department_id=$_REQUEST['department'];
	
	$sqldepart="SELECT * FROM department WHERE order_id='$order_id' AND department_id='$department_id'";
	        $resultdepart = mysqli_query($con, $sqldepart);  
           $rowd = mysqli_fetch_assoc($resultdepart);
		   $department_name=$rowd['department_name'];
	       $department_status='done';
	       $department_date=date("Y-m-d H:i:s");
	
	
	              $update_data = array(  
                           'status'     =>     mysqli_real_escape_string($con, $department_name)
							);  
                          $where_condition = array(  
                            'id'     =>     $order_id  
                            );  
                          if($data->update("orders", $update_data, $where_condition))  
                            {  
                               // echo "<script>location.href='search_order.php';</script>";
                                //exit;
                            } 
	
	                   
	
	                     $dept_update_data = array(  
                           'department_status'     =>     mysqli_real_escape_string($con, $department_status),
						   'department_date'     =>     mysqli_real_escape_string($con, $department_date)	 
							);  
                          $dept_where_condition = array(  
                            'order_id'     =>     $order_id ,
							'department_id' =>  $department_id
                            );  
                          if($data->update("department", $dept_update_data, $dept_where_condition))  
                            {  
                                echo "<script>location.href='search_order.php';</script>";
                                exit;
                            } 
	
	
}

?>

