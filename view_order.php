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
		  
		   
		   $special_instructions =$row['special_instructions'];
           $signature=$row['signature'];



          $sqlcustomer="SELECT * FROM customer WHERE id='$main_customer_id' ORDER BY id DESC";
	      $result = mysqli_query($con, $sqlcustomer);  
          $rowcust = mysqli_fetch_assoc($result);
	      $customer_id=$rowcust['customer_id'];
          $customer_type=$rowcust['customer_type'];

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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $order_id;?>" disabled="">
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
                   <label class="form-label">Order Created Date :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $order_created_date;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Order Created By :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
           </div>




            <div class="row">
              <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Order Status :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>

             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Archived Date :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
            </div>


            <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Estimatation Ref. No. :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Estimatation Created Date :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Estimatation Created By :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Estimatation Notes:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->

      <div class="customer-data-inner data-inner-single-item-box no-bottom-margin"> <!--Start data -inner single box-->
     <div class="customer-data-main pb-5"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="main-data-form">
          <div class="row">
            <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Expedite Order :</label>
                 </div>
                 <div class="input-undi">
                   <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $expedite_order;?>" disabled="">
                 </div>
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Due Date :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $due_date;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Delivery Method :</label>
                 </div>
                 <div class="input-undi">
                <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $delivery_method;?>" disabled="">
                 </div>
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Payment Type :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $payment_type;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Delivery Charge :</label>
                 </div>
                 <div class="input-undi">
                   <input type="text" id="delivery_charge" name="delivery_charge" class="form-input none-bg-border" value="<?php echo $delivery_charge;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Deposit Paid :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" name="deposit_paid" id="deposit_paid" class="form-input none-bg-border" value="<?php echo $deposit_paid;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>


           <div class="row mt-3">
            <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label for="mould-notes" class="form-label">Ordered Via :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $ordered_via;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row my-3">
            <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label for="mould-notes" class="form-label">Ordered Notes :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $ordered_notes;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

         </div>
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->

<div class="customer-data-inner data-inner-single-item-box no-bottom-margin"> <!--Start data -inner single box-->
     <div class="customer-data-main pb-5"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
		  
		  <?php
		  
		  $mol=0;
		   $sqlmol="SELECT * FROM moulds WHERE order_id='$order_id' ORDER BY id ASC";
	       $resultmol = mysqli_query($con, $sqlmol);  
           while($rowmol = mysqli_fetch_assoc($resultmol))
		   {
			  
		    
		   $mould_in_stock =$rowmol['mould_in_stock'];
		   $moulds_in_stock =$rowmol['moulds_in_stock'];	  
		   $mould_id =$rowmol['mould_id'];
		   $mould_location =$rowmol['mould_location'];
		   $mould_pre_set_price =$rowmol['mould_pre_set_price'];	  
		   $mould_notes =$rowmol['mould_notes'];
		   $wax_notes =$rowmol['wax_notes'];
		   $moulds_id=$rowmol['id'];
		  ?>
		  
         <div class="main-data-form">
          <div class="row">
            <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould in stock? </label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $mould_in_stock;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould in Stock :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $moulds_in_stock;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>


           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould ID :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $mould_id;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould Location :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $mould_location;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould Pre-set Price :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" id="mould_pre_set_price_<?php echo $mol;?>" name="mould_pre_set_price" class="form-input none-bg-border" value="<?php echo $mould_pre_set_price;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>


           <div class="row mt-3">
            <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label for="mould-notes" class="form-label">mould-notes :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $mould_notes;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row mt-3">
             <div class="col-md-4 custom-column">
              <label for="mould-notes" class="form-label">mould photo</label><br>
                <div class="customer-details-box-single">
                 <!--img src="https://via.placeholder.com/100x70" alt=""-->
					<?php 
			         $sqldata="SELECT * FROM datatable WHERE post_id='$moulds_id' AND category='moulds' AND files_type='photo' ORDER BY id ASC";
	       $resultdata = mysqli_query($con, $sqldata);  
           while($rowdata = mysqli_fetch_assoc($resultdata)){
			   
			   $photo=$rowdata['files'];
			    if($photo!=''){ ?>
					<img src="<?php echo $photo;?>" alt="" class="photo_preview"> 
					 <?php } 
					 
		   }
					 ?>
					
               </div>
             </div>
             <div class="col-md-8 custom-column">
               <div class="form-group long-height">
                <label for="message" class="form-label"> Wax notes</label>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $wax_notes;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>


         </div>
		  <hr>
		  <?php
		   $mol=$mol+1;
		   }
		  ?>
		  <input type="hidden" name="mould_count" id="mould_count" value="<?php echo $mol;?>">
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->

   <div class="customer-data-inner data-inner-single-item-box"> <!--Start data -inner single box-->
     <div class="customer-data-main pb-5"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
		  
		   <?php
		   $mod=0;
		   $sqlmod="SELECT * FROM models WHERE order_id='$order_id' ORDER BY id ASC";
	       $resultmod = mysqli_query($con, $sqlmod);  
           while($rowmod = mysqli_fetch_assoc($resultmod))
		   {
			   
			   
		   $d_model_in_stock =$rowmod['3d_model_in_stock'];
		   $models_in_stock =$rowmod['models_in_stock'];	  
		   $model_id =$rowmod['model_id'];
		   $model_location =$rowmod['model_location'];
		   $model_pre_set_price =$rowmod['model_pre_set_price'];
		   $model_notes =$rowmod['model_notes'];
		   $models_id=$rowmod['id'];	   
			?>   
		  
         <div class="main-data-form">
          <div class="row">
            <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">3D Model in stock? </label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $d_model_in_stock;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Models in Stock :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $models_in_stock;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>


           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Model ID :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $model_id;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Model Location :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $model_location;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Model Pre-set Price :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" id="model_pre_set_price_<?php echo $mod;?>" name="model_pre_set_price" class="form-input none-bg-border" value="<?php echo $model_pre_set_price;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row mt-3">
             <div class="col-md-4 custom-column">
              <label for="mould-notes" class="form-label">Model photo</label><br>
                <div class="customer-details-box-single">
                 <!--img src="https://via.placeholder.com/100x70" alt=""-->
					
					<?php 
			         $sqldata="SELECT * FROM datatable WHERE post_id='$models_id' AND category='models' AND files_type='photo' ORDER BY id ASC";
	       $resultdata = mysqli_query($con, $sqldata);  
           while($rowdata = mysqli_fetch_assoc($resultdata)){
			   
			   $photo=$rowdata['files'];
			    if($photo!=''){ ?>
					<img src="<?php echo $photo;?>" alt="" class="photo_preview"> 
					 <?php } 
					 
		   }
					 ?>
					
               </div>
             </div>
             <div class="col-md-8 custom-column">
               <div class="form-group long-height">
                <label for="message" class="form-label"> Model notes</label>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $model_notes;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>


         </div>
		  <hr>
		  
		  <?php
			   $mod=$mod+1;
		   }
		   ?>   
		  <input type="hidden" name="model_count" id="model_count" value="<?php echo $mod;?>">
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->

<div class="customer-data-inner data-inner-single-item-box product-area-box"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Products :</h3>
         </div>
		  <?php
		   $pro=0;
		   $sqlpro="SELECT * FROM products WHERE order_id='$order_id' ORDER BY id ASC";
	       $resultpro = mysqli_query($con, $sqlpro);  
           while($rowpro = mysqli_fetch_assoc($resultpro))
		   {
			   
			  $product_type=$rowpro['product_type'];
			  $product_quantity=$rowpro['product_quantity'];
			  $product_material=$rowpro['material'];
			  $product_weight=$rowpro['weight'];
			  $product_price=$rowpro['price'];
			  $product_ex_vat_price=$rowpro['ex_vat_price'];
			  $attach_files=$rowpro['attach_files']; 
			  $product_id= $rowpro['id']; 
			?>   
			  
		  
         <div class="main-data-form">
          <div class="row">
             <div class="col-md-6 custom-column">

               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Product Type :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $product_type;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Product Quantity :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $product_quantity?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Material :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $product_material;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Weight :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $product_weight;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Price :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" id="product_price_<?php echo $pro;?>" name="product_price_<?php echo $pro;?>" class="form-input none-bg-border" value="<?php echo $product_price;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Ex- VAT Price :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" class="form-input none-bg-border" value="<?php echo $product_ex_vat_price;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>
           <div class="row mt-4">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Product Photo :</label>
                 </div>
                 <div class="customer-details-box-single">
                 <!--img src="https://via.placeholder.com/100x70" alt=""-->
					 
					<?php 
			         $sqldata="SELECT * FROM datatable WHERE post_id='$product_id' AND category='products' AND files_type='photo' ORDER BY id ASC";
	       $resultdata = mysqli_query($con, $sqldata);  
           while($rowdata = mysqli_fetch_assoc($resultdata)){
			   
			   $photo=$rowdata['files'];
			    if($photo!=''){ ?>
					<img src="<?php echo $photo;?>" alt="" class="photo_preview"> 
					 <?php } 
					 
			   
		   }
					 ?>
			       
					 
               </div>
               </div>
             </div>


             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Attach Files :</label>
                 </div>
                 <div class="input-undi">
                   <!--input id="tel" type="text" class="form-input none-bg-border" value="<Filename>" disabled=""-->
					 <?php if($attach_files!=''){?>
					<a href="<?php echo $attach_files;?>" download="<?php echo $attach_files;?>">Download</a> 
					 <?php } ?>
                 </div>
               </div>
             </div>
           </div>
         </div>
		  <hr>
		   <?php
			    $pro=$pro+1;
			   
		   }
		  ?>
		  <input type="hidden" id="product_count" value="<?php echo $pro;?>">
		  
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->


   <div class="customer-data-inner data-inner-single-item-box create-order-page"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text">Customer Details</h3>
         </div>
		  
		  
		  <?php
	   if($customer_type=='retail_customer'){
	?>
	    
         <div class="main-data-form">
           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Customer ID :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $main_customer_id;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Customer Type:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $customer_type_text;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Full Name :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['full_name'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mobile No :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['mobile_number'];?>" disabled="">
                 </div>
               </div>
             </div>
           </div>




            <div class="row">
              <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Telephone No :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['telephone_number'];?>" disabled="">
                 </div>
               </div>
             </div>
             
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['email_address'];?>" disabled="">
                 </div>
               </div>
             </div>
            </div>


           <div class="row">
              <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Delivery Address :</label>
                 </div>
                 <div class="input-undi">
                  <p class="form-input none-bg-border mt-1"><?php echo $rowc['delivery_address'];?></p>
                 </div>
               </div>
             </div>
            </div>

            <div class="row">
              <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Notes :</label>
                 </div>
                 <div class="input-undi">
                  <p class="form-input none-bg-border mt-1"><?php echo $rowc['customer_notes'];?></p>
                 </div>
               </div>
             </div>
            </div>
            
            
            <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Credit Facility :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $rowc['credit_facilty'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Credit Facility Amount :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['credit_facility_amount'];?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           
           <div class="row">
              <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Credit Terms:</label>
                 </div>
                 <div class="input-undi">
                  <p class="form-input none-bg-border mt-1"><?php echo $rowc['credit_terms'];?></p>
                 </div>
               </div>
             </div>
            </div>

            <div class="row">
              <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Credit Notes :</label>
                 </div>
                 <div class="input-undi">
                  <p class="form-input none-bg-border mt-1"><?php echo $rowc['credit_notes'];?></p>
                 </div>
               </div>
             </div>
            </div>
            
            
         </div>
       
	<?php	   
	   }
	   ?>

   
	   <?php
	   if($customer_type=='trade_buisness_customer'){
	    ?>
	   
	  
         <div class="main-data-form">
           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Customer ID :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $main_customer_id;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Customer Type:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $customer_type_text;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>
           
           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Company Name :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['company_name'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Company Reg. No.:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['company_reg_number'];?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Vat No :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['vat'];?>" disabled="">
                 </div>
               </div>
             </div>
             
           </div>




            <div class="row">
              <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Company Infromation :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['company_information'];?>" disabled="">
                 </div>
               </div>
             </div>
             
             
            </div>

			<div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Primary Contact Name :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['primary_contact_name'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Primary Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['primary_email_address'];?>" disabled="">
                 </div>
               </div>
             </div>
           </div>


			<div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Company Website  :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['company_website'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Contact No :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['contact_number'];?>" disabled="">
                 </div>
               </div>
             </div>
           </div>


           <div class="row">
              <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Company Address :</label>
                 </div>
                 <div class="input-undi">
                  <p class="form-input none-bg-border mt-1"><?php echo $rowc['company_address'];?></p>
                 </div>
               </div>
             </div>
            </div>

            <div class="row">
              <div class="col-md-12 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Company Billing Name (if different):</label>
                 </div>
                 <div class="input-undi">
                  <p class="form-input none-bg-border mt-1"><?php echo $rowc['company_billing_name'];?></p>
                 </div>
               </div>
             </div>
            </div>
            
            
            <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Accounts Payable Contact Name :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['accounts_payable_contact_name'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Accounts Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['accounts_email_address'];?>" disabled="">
                 </div>
               </div>
             </div>
           </div>

           
           <div class="row">
              <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Accounts Contact No.:</label>
                 </div>
                 <div class="input-undi">
                  <p class="form-input none-bg-border mt-1"><?php echo $rowc['accounts_contact_number'];?></p>
                 </div>
               </div>
             </div>
            </div>

            
            <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Credit Facility  :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['credit_facilty'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Credit Facility Amount :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['credit_facility_amount'];?>" disabled="">
                 </div>
               </div>
             </div>
           </div>
            
             <div class="row">
              <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Credit Terms.:</label>
                 </div>
                 <div class="input-undi">
                  <p class="form-input none-bg-border mt-1"><?php echo $rowc['credit_terms'];?></p>
                 </div>
               </div>
             </div>
            </div>

            <div class="row">
              <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Credit Notes :</label>
                 </div>
                 <div class="input-undi">
                  <p class="form-input none-bg-border mt-1"><?php echo $rowc['credit_notes'];?></p>
                 </div>
               </div>
             </div>
            </div>
            
            
         </div>
      
	   
	   
	   <?php
	   }
	   ?>
	   
       <?php
	    if($customer_type=='student_customer'){
	   ?>
	   
	   
         <div class="main-data-form">
           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Customer ID :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $main_customer_id;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Customer Type:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $customer_type_text;?>" disabled="">
                 </div>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Full Name :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['full_name'];?>" disabled="">
                 </div>
               </div>
             </div>
             
           </div>
           


			<div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Telephone No :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['telephone_number'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label"> Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['email_address'];?>" disabled="">
                 </div>
               </div>
             </div>
           </div>


			<div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Delivery Address  :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['delivery_address'];?>" disabled="">
                 </div>
               </div>
             </div>
             
           </div>

            
            
            
            <div class="row">
            <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">College/University Attended:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['college_or_university_attended'];?>" disabled="">
                 </div>
               </div>
             </div>
             
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Course:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $rowc['course'];?>" disabled="">
                 </div>
               </div>
             </div>
                         
           </div>

           
           <div class="row">
           
              <div class="col-md-12 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Student Notes:</label>
                 </div>
                 <div class="input-undi">
                  <p class="form-input none-bg-border mt-1"><?php echo $rowc['student_notes'];?></p>
                 </div>
               </div>
             </div>
            </div>

            
       
            
         </div>
      
	   <?php
		}
	   ?>
		  
		  
		
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
			   
			   
         </div>
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->
 </div>

	<?php
		  $sqlwork="SELECT * FROM workshop WHERE order_id='$order_id'";
	        $resultwork = mysqli_query($con, $sqlwork);  
            while($rowwork = mysqli_fetch_assoc($resultwork))
			{  
	?>	  
		  
   <div class="customer-data-inner data-inner-single-item-box mt-4"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Workshop Services</h3>
         </div>
         <div class="main-data-form">
           <div class="row mb-5">
             <?php
			   
			$cleaning = $rowwork['cleaning'];
		   $cleaning_price = $rowwork['cleaning_price'];
		   $polishing = $rowwork['polishing'];
		   $polishing_price = $rowwork['polishing_price'];
		   $sandblasting = $rowwork['sandblasting'];	  
		   $matt_finish = $rowwork['matt_finish'];
		   $high_polish = $rowwork['high_polish'];
		   $fine_polish = $rowwork['fine_polish'];
		   $pin_barrel = $rowwork['pin_barrel'];
		   $assembly = $rowwork['assembly'];	  
		   $assembly_price = $rowwork['assembly_price'];
		   $assembly_notes = $rowwork['assembly_notes'];
		   $plating = $rowwork['plating'];	  
		   $plating_price = $rowwork['plating_price'];
		   $plating_type = $rowwork['plating_type'];
		   $plating_thickness = $rowwork['plating_thickness'];
		   $plating_colours = $rowwork['plating_colours'];
			   
             ?>
              <div class="col-md-4">
                <div class="checkbox-inner">
                  <div class="single-checkbox-item">
                    <div class="custom-control custom-checkbox">
                    <input disabled="" type="checkbox" class="custom-control-input" <?php if($cleaning=='yes'){ echo 'checked'; } ?> id="cleaning">
                    <label class="custom-control-label" for="cleaning">Cleaning</label>
						 <input id="cleaning_price" type="hidden" name="cleaning_price" placeholder="" class="form-input" value="<?php echo $cleaning_price;?>">
                  </div>
                  </div>


                  <div class="single-checkbox-item">
                    <div class="custom-control custom-checkbox">
                    <input disabled="" type="checkbox" class="custom-control-input" <?php if($polishing=='yes'){ echo 'checked'; } ?> id="polishing">
                    <label class="custom-control-label" for="polishing">Polishing</label>
                  </div>
                  <div class="left-margin-check-container">
                      <div class="single-left-check">
                        <label>
                        <input disabled="" type="checkbox" <?php if($sandblasting=='yes'){ echo 'checked'; } ?> class="option-input checkbox" />
                        Sandblasting
                      </label>
                      </div>

                      <div class="single-left-check">
                        <label>
                        <input disabled="" type="checkbox" <?php if($matt_finish=='yes'){ echo 'checked'; } ?> class="option-input checkbox" />
                        Matt Finish
                      </label>
                      </div>

                      <div class="single-left-check">
                        <label>
                        <input disabled="" type="checkbox" <?php if($high_polish=='yes'){ echo 'checked'; } ?> class="option-input checkbox" />
                        High Polish
                      </label>
                      </div>

                      <div class="single-left-check">
                        <label>
                        <input disabled="" type="checkbox" <?php if($fine_polish=='yes'){ echo 'checked'; } ?> class="option-input checkbox" />
                        Fine Polish
                      </label>
                      </div>

                      <div class="single-left-check">
                        <label>
                        <input disabled="" type="checkbox" <?php if($pin_barrel=='yes'){ echo 'checked'; } ?> class="option-input checkbox" />
                        Pin Barrel
                      </label>
                      </div>
					  <input id="polishing_price" type="hidden" name="polishing_price" placeholder="" class="form-input" value="<?php echo $polishing_price;?>">
                  </div>
                  </div>

                  <div class="single-checkbox-item">
                    <div class="custom-control custom-checkbox">
                    <input disabled="" type="checkbox" class="custom-control-input" <?php if($assembly=='yes'){ echo 'checked'; } ?> id="assembly">
                    <label class="custom-control-label" for="assembly">Assembly</label>
					<input id="assembly_price" type="hidden" name="assembly_price" placeholder="" class="form-input" value="<?php echo $assembly_price;?>">	
                  </div>
                  </div>
                </div>
              </div>

              <div class="col-md-8">
                <div class="right-checkbox-area">
                  <div class="custom-control custom-checkbox">
                    <input disabled="" type="checkbox" class="custom-control-input" <?php if($plating=='yes'){ echo 'checked'; } ?> id="plating">
                    <label class="custom-control-label" for="plating">Plating</label>
                  </div>

                  <div class="Plating-right-inner">
                    <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Plating Type :</label>
                     </div>
                    <div class="input-undi">
                        <input disabled="" id="tel" type="text" class="form-input none-bg-border" value="<?php echo $plating_type;?>" disabled="">
                    </div>
               </div>

               <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Plating Thickness :</label>
                     </div>
                    <div class="input-undi">
                        <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $plating_thickness;?>" disabled="">
                    </div>
               </div>

               <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Plating Colours :</label>
                     </div>
                    <div class="input-undi">
                      <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $plating_colours;?>" disabled="">
                    </div>
               </div>

                  <input id="plating_price" type="hidden" name="plating_price" placeholder="" class="form-input" value="<?php echo $plating_price;?>">
                  </div>


                </div> 
              </div>
         </div>


         <div class="row">
           <div class="col-md-12 custom-column">
               <div class="form-group long-height">
                <label for="message" class="form-label"> Assembly Notes</label>
                 <div class="input-undi">
                        <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $assembly_notes;?>" disabled="">
                    </div>
               </div>
             </div>
         </div>
		
		</div>	 
			 
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->

	<?php
		}
	  ?>  
	
	<?php
		$sqlout="SELECT * FROM outsource WHERE order_id='$order_id'";
	        $resultout = mysqli_query($con, $sqlout);  
           while($rowout = mysqli_fetch_assoc($resultout))
		   {
			   
		   
	?>	  

   <div class="customer-data-inner data-inner-single-item-box Outsource-bottom mt-4"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Outsource Options</h3>
         </div>
		  <?php
		  
		    $outsource_plating = $rowout['outsource_plating'];
		    $plating_company = $rowout['plating_company'];
		   $hallmark = $rowout['hallmark'];
		   $hallmark_outsourcing_company = $rowout['hallmark_outsourcing_company'];
		   $hallmark_notes = $rowout['hallmark_notes'];	  
		   $outsource_setting = $rowout['outsource_setting'];
		   $setting_company = $rowout['setting_company'];
		   $outsource_engraving = $rowout['outsource_engraving'];
		   $engraving_company = $rowout['engraving_company'];
		  
		  ?>
         <div class="main-data-form">
           <div class="row">
              <div class="col-md-6">
                <div class="right-checkbox-area single-checkbox-right">
                  <div class="custom-control custom-checkbox">
                    <input disabled="" type="checkbox" class="custom-control-input" <?php if($outsource_plating=='yes'){ echo 'checked'; } ?> id="defaultUnchecked16">
                    <label class="custom-control-label" for="defaultUnchecked16">Outsource Plating</label>
                  </div>

                  <div class="Plating-right-inner">
                    <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Plating Company :</label>
                     </div>
                    <div class="input-undi">
                        <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $plating_company;?>" disabled="">
                    </div>
               </div>
              </div>
              </div> 
              <div class="right-checkbox-area single-checkbox-right">
                  <div class="custom-control custom-checkbox">
                    <input disabled="" type="checkbox" class="custom-control-input" <?php if($hallmark=='yes'){ echo 'checked'; } ?> id="defaultUnchecked15">
                    <label class="custom-control-label" for="defaultUnchecked15">Hallmark</label>
                  </div>

                  <div class="Plating-right-inner">
                    <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Hallmark Outsourcing Company :</label>
                     </div>
                    <div class="input-undi">
                        <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $hallmark_outsourcing_company;?>" disabled="">
                    </div>
               </div>
              </div>
              </div> 
            </div>

            <div class="col-md-6">
                <div class="right-checkbox-area single-checkbox-right">
                  <div class="custom-control custom-checkbox">
                    <input disabled="" type="checkbox" class="custom-control-input" <?php if($outsource_setting=='yes'){ echo 'checked'; } ?> id="defaultUnchecked18">
                    <label class="custom-control-label" for="defaultUnchecked18">Outsource -Setting</label>
                  </div>

                  <div class="Plating-right-inner">
                    <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Setting Company :</label>
                     </div>
                    <div class="input-undi">
                        <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $setting_company;?>" disabled="">
                    </div>
               </div>
              </div>
              </div> 
              <div class="right-checkbox-area single-checkbox-right">
                  <div class="custom-control custom-checkbox">
                    <input disabled="" type="checkbox" class="custom-control-input" <?php if($outsource_engraving=='yes'){ echo 'checked'; } ?> id="defaultUnchecked20">
                    <label  class="custom-control-label" for="defaultUnchecked20">Outsource -Engraving</label>
                  </div>

                  <div class="Plating-right-inner">
                    <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Engraving Company :</label>
                     </div>
                    <div class="input-undi">
                        <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $engraving_company;?>" disabled="">
                    </div>
               </div>
              </div>
              </div> 
            </div>
         </div>


        <div class="row">
            <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label for="mould-notes" class="form-label">Hallmark Notes :</label>
                 </div>
                 <div class="input-undi">
                        <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $hallmark_notes;?>" disabled="">
                    </div>
               </div>
             </div>
           </div>
			 
		  </div>

     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->

 </div>
	
   <?php
		 }
		?> 
		  

 <div class="customer-data-inner data-inner-single-item-box dup-order create-order-page mt-4"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text">Charging Details</h3>
         </div>
         <div class="main-data-form">
           <div class="row align-modify">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Price Of Products :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" name="total_products_price" id="total_products_price" class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Price Of Materials :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" name="total_materials_price" id="total_materials_price" class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
           </div>
            <div class="row">
              <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Price Of Services :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" name="total_services_price" id="total_services_price" class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
            </div>
            <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Consultation Charge :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" name="total_consultation_price" id="total_consultaion_price" class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
           </div>
           <hr>
           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Total Gross Cost :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" name="total_gross_cost" id="total_gross_cost" class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">VAT :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" id="total_vat" name="total_vat" class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Delivery Charge :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" name="total_delivery_charge" id="total_delivery_charge" class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Discounts :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" name="total_discounts_price" id="total_discounts_price" class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
           </div>
           <hr>
           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Total Net Cost :</label>
                 </div>
                 <div class="input-undi">
                   <input  type="text" name="total_net_cost" id="total_net_cost" class="form-input none-bg-border" value="" disabled="">
                 </div>
               </div>
             </div>
           </div>
			 
			 
			  <div class="row">
           <div class="col-md-12 custom-column">
               <div class="form-group long-height">
                <label for="message" class="form-label">Special Instructions :</label>
                 <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $special_instructions;?>" disabled="">
               </div>
             </div>
         </div>

         
			 <div class="row">
           <div class="col-md-12 custom-column">
             <div class="form-group">
               <label for="" class="form-label">
                 Customer Signature : 
               </label> <br>
               <!--input type="text" placeholder="Customer Signature" class="form-input"-->
				 	<?php if($signature!=''){ ?>
					<img src="<?php echo $signature;?>" alt="" class="photo_preview"> 
					 <?php } ?>	 
				 
 
				 
             </div>
           </div>
         </div>
			 
			 
			 
			 
         </div>
       </div><!--Start Customer data single-box-->
     </div><!--End of customer data main-->
   </div><!----End data -inner single box-->
</div>
 </div>		   
   <div class="row my-5 print_btn">
     <div class="col text-center custom-column">
      <div class="buttons-data-table many-btn">
        <a href="update_order.php?id=<?php echo $order_id;?>"  class="btns btn-data-table">Update Order</a>
        <a href="#"  class="btns btn-data-table">Cancel Order</a>
        <a href="archived-order.html"  class="btns btn-data-table">Archive/ Unarchive</a>
        <a href="duplicate-order.html"  class="btns btn-data-table">Duplicate Order</a>
        <a href="#!" onclick="printDiv('print_div')" class="btns btn-data-table">Print Order Details</a>
        <a href="print_order_label.php"  class="btns btn-data-table">Print Order Label</a>
      </div> 
     </div>
   </div>

 </div>
 </form>
</section>
</main>
	
		
<?php include_once('footer.php'); ?>	
	

<script>

	function calculate_total(){
		
		var total_net_cost=0;
		var total_gross_cost=0;
		var product_count=$('#product_count').val();
		var mould_count=$('#mould_count').val();
		var model_count=$('#model_count').val();
		var products_price=0;
		var delivery_charge=0;
		var mould_costs=0;
		var model_costs=0;
		var department_price=0;
		var services_charge=0;
		var product=0;
		var department=0;
		var services=0;
		var mould=0;
		var model=0;
		var workshop=0;
		
		for(var p=0;p<=product_count;p++){
			//products_price=products_price + parseFloat($('#product_price_'+p+'').val());
			product=$('#product_price_'+p+'').val();
			
			product = isNaN(parseFloat(product)) ? 0 : parseFloat(product);
			
			products_price=products_price + product;
			
		}
		
		products_price=parseFloat(products_price);
		
		$('#total_products_price').val(products_price);
		
		total_net_cost=total_net_cost+products_price;
		
		delivery_charge=parseFloat($('#delivery_charge').val());
		
		delivery_charge = isNaN(parseFloat(delivery_charge)) ? 0 : parseFloat(delivery_charge);
		
		$('#total_delivery_charge').val(delivery_charge);
		
		//total_net_cost=total_net_cost+delivery_charge;
		
		for(var m=0;m<=mould_count;m++){
			
			//if($("#mould_in_stock_yes_"+m).is(":checked"))
				{
					
			mould=parseFloat($('#mould_pre_set_price_'+m+'').val());
		
		    mould = isNaN(parseFloat(mould)) ? 0 : parseFloat(mould);
			
			mould_costs=mould_costs + mould;
					
				}
		}
		
		
		total_net_cost=total_net_cost+mould_costs;
		
		for(var k=0;k<=model_count;k++){
			
			//if($("#3d_model_in_stock_yes_"+k).is(":checked"))
				{
			
			model=parseFloat($('#model_pre_set_price_'+k+'').val());
		
		    model = isNaN(parseFloat(model)) ? 0 : parseFloat(model);
			
			model_costs=model_costs + model;
					
				}
		}
		
		total_net_cost=total_net_cost+model_costs;
		
		
		for(var d=1;d<=10;d++){
			
			if($("#department_"+d).is(":checked"))
            {
			 department=$('#department_'+d+'_price').val();	
			 department = isNaN(parseFloat(department)) ? 0 : parseFloat(department);	
             department_price=department_price+parseFloat(department);
             
            }
			
		}
		
		services_charge=services_charge+department_price;
		
		if($("#cleaning").is(":checked"))
            {
			 services=$('#cleaning_price').val();
			 services = isNaN(parseFloat(services)) ? 0 : parseFloat(services);	
             services_charge=services_charge+parseFloat(services);
             
            }
		if($("#polishing").is(":checked"))
            {
             services=$('#polishing_price').val();
             services = isNaN(parseFloat(services)) ? 0 : parseFloat(services);	
             services_charge=services_charge+parseFloat(services);
            }
		if($("#assembly").is(":checked"))
            {
             services = $('#assembly_price').val();
              services = isNaN(parseFloat(services)) ? 0 : parseFloat(services);	
             services_charge=services_charge+parseFloat(services);
            }
		if($("#plating").is(":checked"))
            {
             services = $('#plating_price').val();
             services = isNaN(parseFloat(services)) ? 0 : parseFloat(services);	
             services_charge=services_charge+parseFloat(services);
            }
		
		total_net_cost=total_net_cost+parseFloat(services_charge);
		
		total_net_cost=parseFloat(total_net_cost);
		
		$('#total_services_price').val(services_charge);
		
		$('#total_gross_cost').val(total_net_cost);
		
		total_net_cost=total_net_cost+delivery_charge;
		
		$('#total_net_cost').val(total_net_cost);
		
	}
	
	calculate_total();
	
	
	function printDiv(divName) {
		
	$('.header-area').hide();
    $('.print_btn').hide();		
		
     //var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     //document.body.innerHTML = originalContents;//printContents;

     window.print();

     //document.body.innerHTML = originalContents;
	
	$('.header-area').show();	
	$('.print_btn').show();	
		
}
	
	
</script>	

</body>
</html>
