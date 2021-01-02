<?php 
include_once('header.php');

include 'phpqrcode/qrlib.php'; 

if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
	$_SESSION['view_order_id']=$_REQUEST['id'];
}
    $order_id=$_SESSION['view_order_id'];

$sqlo="select * from orders where id='$order_id'";
 $resulto = mysqli_query($con, $sqlo);  
           $row = mysqli_fetch_assoc($resulto);
if($row>0)
{

}else{
	exit;
}
	





// $path variable store the location where to  
// store image and $file creates directory name 
// of the QR code file by using 'uniqid' 
// uniqid creates unique id based on microtime 
$path = 'data/qr_code/'; 
//$file = $path.uniqid().".png"; 
$file = $path.'order_id_'.$order_id.".png"; 
  
// $ecc stores error correction capability('L') 
$ecc = 'L'; 
$pixel_Size = 10; 
$frame_Size = 10; 

$pixel_Size = 5; 
$frame_Size = 1; 

$text="https://justcasting.webezy.co.uk/view_qr.php?id=".$order_id."&data=orders";

// Generates QR Code and Stores it in directory given 
QRcode::png($text, $file, $ecc, $pixel_Size, $frame_Size); 
  
//QRcode::png($text); 

//if(file_exists($file) {
  //  echo '<img src="./'.$file.'" />'; 
//}

// Displaying the stored QR code from directory 
//echo "<center><img src='".$file."'></center>"; 




$main_customer_id=$row['customer_id'];
$order_created_date=date("d-m-Y", strtotime($row['created']));
 $expedite_order =$row['expedite_order'];
		   $due_date =date("d-m-Y", strtotime($row['due_date']));
		   $delivery_method =$row['delivery_method'];
		   $payment_type =$row['payment_type'];
		   $delivery_charge =$row['delivery_charge'];	  
		   $deposit_paid =$row['deposit_paid'];
		   $ordered_via =$row['ordered_via'];
		   $ordered_notes =$row['ordered_notes'];
		   $mould_in_stock =$row['mould_in_stock'];
		   $moulds_in_stock =$row['moulds_in_stock'];	  
		   $mould_id =$row['mould_id'];
		   $mould_location =$row['mould_location'];
		   $mould_pre_set_price =$row['mould_pre_set_price'];	  
		   $mould_notes =$row['mould_notes'];
		   $wax_notes =$row['wax_notes'];
		   $d_model_in_stock =$row['3d_model_in_stock'];
		   $models_in_stock =$row['models_in_stock'];	  
		   $model_id =$row['model_id'];
		   $model_location =$row['model_location'];
		   $model_pre_set_price =$row['model_pre_set_price'];
		   $model_notes =$row['model_notes'];	  
		   $special_instructions =$row['special_instructions'];
           $signature=$row['signature'];



          $sqlcustomer="SELECT * FROM customer WHERE id='$main_customer_id' ORDER BY id DESC";
	      $result = mysqli_query($con, $sqlcustomer);  
          $rowcust = mysqli_fetch_assoc($result);
	      $customer_id=$rowcust['customer_id'];
          $customer_type=$rowcust['customer_type'];
          $customer_name=$rowcust['name'];

         $sqlcustomertype="SELECT * FROM $customer_type WHERE id='$customer_id' ORDER BY id DESC";
	     $resulttype = mysqli_query($con, $sqlcustomertype);  
         $rowc = mysqli_fetch_assoc($resulttype);

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
?>

<style>

	.photo_preview{
		max-width: 200px;
		max-height: 100px;
	}
	
</style>

<section class="create-customer-main-area" style="background-color: #FCFCFD">
 <form action="">
   <div class="container">
    
	   <div id="print_div">
	   
   <div class="customer-data-inner data-inner-single-item-box create-order-page no-bottom-margin"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="main-data-form">
           <div class="row align-modify">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Order Ref. No.</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $order_id;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <!--img src="https://via.placeholder.com/100x70" alt=""-->
				   <img src='<?php echo $file;?>'>
               </div>
             </div>
           </div>

          
           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Customer Name :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $customer_name;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>



            <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Date Of Order:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $order_created_date; ?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Expiry Date :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $due_date;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

			 
			 
         </div>
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->

     

      <div class="customer-data-inner data-inner-single-item-box"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">List of The Departments</h3>
         </div>
         <div class="main-data-form">
           <div class="row mb-5">
			   
			   <div class="col-md-4 custom-column">
			   <?php
					$d=0;
			        $dc=0;
			   $sqldepart="SELECT * FROM department WHERE order_id='$order_id'";
	        $resultdepart = mysqli_query($con, $sqldepart);  
           while($rowd = mysqli_fetch_assoc($resultdepart))
		   {
			   $d=$d+1;
			   $dc=$dc+1;
			   ?>
			  <div class="custom-control custom-checkbox">
                <input type="checkbox" disabled="" class="custom-control-input" <?php if($rowd['department_include']=='yes'){ echo 'checked'; } ?> name="<?php echo $rowd['department_name'];?>" id="department_<?php echo $dc;?>" value="yes">
                <label class="custom-control-label" for="department_<?php echo $row['id'];?>"><?php echo $dc;?>. <?php echo $rowd['department_name'];?></label>
				  
				 
                   <input id="department_<?php echo $dc;?>_price" type="hidden" placeholder="" class="form-input" name="<?php echo $rowd['department_name'];?>_price" value="<?php echo $rowd['department_price'];?>">
                 
				  
				  
              </div>
			   <?php		
			   
			   if($d==4){
				   ?>
					</div>
                    <div class="col-md-4 custom-column">
				 <?php
				   $d=0;
			   }
			   
		   }
			   ?>
			   
			   
             <!--div class="col-md-4 custom-column">
               <div class="custom-control custom-checkbox">
                <input disabled="" type="checkbox" class="custom-control-input" id="defaultUnchecked1">
                <label class="custom-control-label" for="defaultUnchecked1">1. Holding in Area</label>
              </div>

              <div class="custom-control custom-checkbox">
                <input disabled type="checkbox" class="custom-control-input" id="defaultUnchecked2">
                <label class="custom-control-label" for="defaultUnchecked2"> 2. Design Consultation</label>
              </div>

              <div class="custom-control custom-checkbox">
                <input disabled type="checkbox" class="custom-control-input" id="defaultUnchecked3">
                <label class="custom-control-label" for="defaultUnchecked3"> 3. CAD</label>
              </div>

              <div class="custom-control custom-checkbox">
                <input disabled type="checkbox" class="custom-control-input" id="defaultUnchecked4">
                <label class="custom-control-label" for="defaultUnchecked4"> 4. CAM (3D MODEL)</label>
              </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="custom-control custom-checkbox">
                <input disabled type="checkbox" class="custom-control-input" id="defaultUnchecked5">
                <label class="custom-control-label" for="defaultUnchecked5"> 5. Wax Injection</label>
              </div>

              <div class="custom-control custom-checkbox">
                <input disabled type="checkbox" class="custom-control-input" id="defaultUnchecked6">
                <label class="custom-control-label" for="defaultUnchecked6">6. Mould Making</label>
              </div>

              <div class="custom-control custom-checkbox">
                <input disabled="" disabled type="checkbox" class="custom-control-input" id="defaultUnchecked7">
                <label class="custom-control-label" for="defaultUnchecked7">7. Casting</label>
              </div>

              <div class="custom-control custom-checkbox">
                <input disabled type="checkbox" class="custom-control-input" id="defaultUnchecked8">
                <label class="custom-control-label" for="defaultUnchecked8">8. Workshop</label>
              </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="custom-control custom-checkbox">
                <input disabled type="checkbox" class="custom-control-input" id="defaultUnchecked9">
                <label class="custom-control-label" for="defaultUnchecked9">9. Outsource</label>
              </div>

              <div class="custom-control custom-checkbox">
                <input disabled type="checkbox" class="custom-control-input" id="defaultUnchecked10">
                <label class="custom-control-label" for="defaultUnchecked10">10. Completed</label>
              </div>
             </div-->
         </div>
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->
 </div>

   </div>

   <div class="row my-5">
     <div class="col-md-6 offset-md-6 custom-column text-right">
      <div class="buttons-data-table">
        <a href="#!" onclick="printDiv('print_div')"  class="btns btn-data-table print_btn">Print</a>
      </div> 
     </div>
   </div>
 </div>
 </div>
 </form>
	
</section>
</main>
	
<!--script src="js/jquery-3.3.1.min.js"></script>	
		

<script src="js/jquery-3.3.1.js"></script-->	
		
	
	
<?php include_once('footer.php'); ?>

<script>

	function printDiv(divName) {
		
	$('.header-area').hide();
    $('.print_btn').hide();		
		
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = originalContents;//printContents;

     window.print();

     document.body.innerHTML = originalContents;
	
	$('.header-area').show();	
	$('.print_btn').show();	
		
}
</script>	

</body>
</html>
