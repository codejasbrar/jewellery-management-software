<?php 
include_once('header.php');


$customer_type='';
if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
	$_SESSION['update_estimate_id']=$_REQUEST['id'];
}
    $order_id=$_SESSION['update_estimate_id'];


$sqlo="select * from orders where id='$order_id'";
 $resulto = mysqli_query($con, $sqlo);  
           $row = mysqli_fetch_assoc($resulto);
if($row>0)
{

}else{
	exit;
}
	
$main_customer_id=$row['customer_id'];
$order_created_date=date("d-m-Y", strtotime($row['created']));
 $expedite_order =$row['expedite_order'];
		   $due_date =date("Y-m-d", strtotime($row['due_date']));
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
 

include_once('order.php');
?>

	
	



                      <style>
						   .image_box{
							   max-width: 250px;
							   max-height: 200px;
							  
						   }   
					    .image_upload_preview {
                           max-width: 100%;
                           max-height: 100%; 
                           object-fit: cover;
                           /*opacity: 0.6;*/
							
                        }
						   
						 .file-upload__input {
                           position: absolute;
                           left: 0;
                           top: 0;
                           right: 0;
                           bottom: 0;
                           font-size: 1;
                           width: 0;
                           height: 100%;
                           opacity: 0;
                         }  
						  
						 
						  
						  canvas#signature {
                          border: 2px solid black;
                           }

					  </style>





<section class="create-customer-main-area" style="background-color: #FCFCFD">
 <form name="ffk3" id="ffk3" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
   <div class="container">

   <div class="customer-data-inner data-inner-single-item-box create-order-page"> <!--Start data -inner single box-->
     <div class="title-customer-data">
       <h1>Update Order Estimation</h1>
     </div>
     <div class="customer-data-main"><!--Start of customer data main-->
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text">Customer Details</h3>
         </div>
         <div class="main-data-form">
			 
			 <input type="hidden" name="order_status" value="estimate">
			 
	  <?php if($customer_type==''){ ?>		 
        <div class="single-bread-box row my-5">
          <div class="col-md-3 custom-column title-select-customer">
            <label class="form-label">Select A Customer :</label>
          </div>
          <div class="col-md-8 custom-column">
                <a href="search_customer.php"  class="btns btn-data-table border-btn">Existing Customer</a>
                <a href="create_customer.php"  class="btns btn-data-table"><span class="plus-create mr-2">&plus;</span>Create New Customer</a>
          </div>
      </div>
	  
	  <?php
        }
		?>	 
			 
	  <?php
	   if($customer_type=='retail_customer'){
	  ?>
		
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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['full_name'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mobile No :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['mobile_number'];?>" disabled="">
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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['telephone_number'];?>" disabled="">
                 </div>
               </div>
             </div>
             
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['email_address'];?>" disabled="">
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
                  <p class="form-input none-bg-border mt-1"><?php echo $row['delivery_address'];?></p>
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
                  <p class="form-input none-bg-border mt-1"><?php echo $row['customer_notes'];?></p>
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
                   <input id="tel" type="text" class="form-input none-bg-border" value="<?php echo $row['credit_facilty'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Credit Facility Amount :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['credit_facility_amount'];?>" disabled="">
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
                  <p class="form-input none-bg-border mt-1"><?php echo $row['credit_terms'];?></p>
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
                  <p class="form-input none-bg-border mt-1"><?php echo $row['credit_notes'];?></p>
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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['company_name'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Company Reg. No.:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['company_reg_number'];?>" disabled="">
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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['vat'];?>" disabled="">
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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['company_information'];?>" disabled="">
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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['primary_contact_name'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Primary Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['primary_email_address'];?>" disabled="">
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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['company_website'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Contact No :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['contact_number'];?>" disabled="">
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
                  <p class="form-input none-bg-border mt-1"><?php echo $row['company_address'];?></p>
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
                  <p class="form-input none-bg-border mt-1"><?php echo $row['company_billing_name'];?></p>
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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['accounts_payable_contact_name'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Accounts Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['accounts_email_address'];?>" disabled="">
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
                  <p class="form-input none-bg-border mt-1"><?php echo $row['accounts_contact_number'];?></p>
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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['credit_facilty'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Credit Facility Amount :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['credit_facility_amount'];?>" disabled="">
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
                  <p class="form-input none-bg-border mt-1"><?php echo $row['credit_terms'];?></p>
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
                  <p class="form-input none-bg-border mt-1"><?php echo $row['credit_notes'];?></p>
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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['full_name'];?>" disabled="">
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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['telephone_number'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label"> Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['email_address'];?>" disabled="">
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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['delivery_address'];?>" disabled="">
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
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['college_or_university_attended'];?>" disabled="">
                 </div>
               </div>
             </div>
             
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Course:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $row['course'];?>" disabled="">
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
                  <p class="form-input none-bg-border mt-1"><?php echo $row['student_notes'];?></p>
                 </div>
               </div>
             </div>
            </div>

            
                        
			 
		<?php
		}
		?>	 
           

         </div>
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->

   <div class="customer-data-inner data-inner-single-item-box product-area-box"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->

		 
		 
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Products :</h3>
         </div>
		  
		   <div class="main-data-form">
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
		  
		
		  <div class="product product_div_<?php echo $pro;?>"><div style="float:right;"><a href="#!" onclick="delete_row('products','<?php echo $product_id;?>','product_div_<?php echo $pro;?>');">&times; Delete</a></div><br><br>	 
			 <input type="hidden" name="product_id_<?php echo $pro;?>" value="<?php echo $product_id;?>">
          <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Product Type :</label>
                 </div>
                 <div class="input-undi">
                <div class="form-group select-icon icon-select-2">
                 <select name="product_type_<?php echo $pro;?>" id="cre-t" class="form-input">
                   <option value="Ring (finger)" <?php if($product_type=='Ring (finger)'){ echo 'selected'; } ?>>Ring (finger)</option>
                   <option value="Necklace" <?php if($product_type=='Necklace'){ echo 'selected'; } ?>>Necklace</option>
                   <option value="Bangle" <?php if($product_type=='Bangle'){ echo 'selected'; } ?>>Bangle</option>
                   <option value="Earing" <?php if($product_type=='Earing'){ echo 'selected'; } ?>>Earing</option>
				   <option value="Tooth cover" <?php if($product_type=='Tooth cover'){ echo 'selected'; } ?>>Tooth cover</option>
				   <option value="Buckle" <?php if($product_type=='Buckle'){ echo 'selected'; } ?>>Buckle</option>
				   <option value="Other" <?php if($product_type=='Other'){ echo 'selected'; } ?>>Other</option>	 
                 </select>
                 <span class="select-icon-absolute">
                   <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                 </span>
               </div>
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Product Quantity :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" name="product_quantity_<?php echo $pro;?>" type="text" placeholder="Product Quantity" value="<?php echo $product_quantity?>" onKeyPress="javascript:return isNumber(event)" class="form-input">
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
                <div class="form-group select-icon icon-select-2">
                 <select name="product_material_<?php echo $pro;?>" id="cre-t" class="form-input">
                   <option value="14ct Gold" <?php if($product_material=='14ct Gold'){ echo 'selected'; } ?>>14ct Gold</option>
                   <option value="18ct Yellow Gold" <?php if($product_material=='18ct Yellow Gold'){ echo 'selected'; } ?>>18ct Yellow Gold</option>
                   <option value="18ct White Gold" <?php if($product_material=='18ct White Gold'){ echo 'selected'; } ?>>18ct White Gold</option>
                   <option value="22ct Yellow Gold" <?php if($product_material=='22ct Yellow Gold'){ echo 'selected'; } ?>>22ct Yellow Gold</option>
				   <option value="22ct White Gold" <?php if($product_material=='22ct White Gold'){ echo 'selected'; } ?>>22ct White Gold</option>
				   <option value="Palladium" <?php if($product_material=='Palladium'){ echo 'selected'; } ?>>Palladium</option>
				   <option value="Platinum" <?php if($product_material=='Platinum'){ echo 'selected'; } ?>>Platinum</option>
				   <option value="925 Silver" <?php if($product_material=='925 Silver'){ echo 'selected'; } ?>>925 Silver</option>
				   <option value="Bronze" <?php if($product_material=='Bronze'){ echo 'selected'; } ?>>Bronze</option>
				   <option value="Brass" <?php if($product_material=='Brass'){ echo 'selected'; } ?>>Brass</option>
				   <option value="Copper" <?php if($product_material=='Copper'){ echo 'selected'; } ?>>Copper</option>
				   <option value="Nickle" <?php if($product_material=='Nickle'){ echo 'selected'; } ?>>Nickle</option>
				   <option value="White Rhodium" <?php if($product_material=='White Rhodium'){ echo 'selected'; } ?>>White Rhodium</option>
				   <option value="Black Rhodium" <?php if($product_material=='Black Rhodium'){ echo 'selected'; } ?>>Black Rhodium</option>
				   <option value="Other" <?php if($product_material=='Other'){ echo 'selected'; } ?>>Other</option>	 
                 </select>
                 <span class="select-icon-absolute">
                   <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                 </span>
               </div>
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Weight :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" name="product_weight_<?php echo $pro;?>" type="text" onKeyPress="javascript:return isNumber(event)" placeholder="Weight" class="form-input" value="<?php echo $product_weight;?>">
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
                   <input id="product_price_<?php echo $pro;?>" name="product_price_<?php echo $pro;?>" type="text" placeholder="Price" value="<?php echo $product_price;?>" onKeyPress="javascript:return isNumber(event)" class="form-input">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Ex- VAT Price :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" name="product_ex_vat_price_<?php echo $pro;?>" type="text" value="<?php echo $product_ex_vat_price;?>" onKeyPress="javascript:return isNumber(event)" placeholder="Ex- VAT Price" class="form-input">
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
                 <div class="input-undi">
                   <div class="file-field form-group">
					   
                  <div class="z-depth-1-half mb-2 image_box">
					  
					<label for="product_photoupload_<?php echo $pro;?>">					  
                    <!--img src="assets/img/filel-uploader.svg"
                      alt="example placeholder" id="product_image_upload_<?php echo $pro;?>" class="image_upload_preview"-->
						
						<?php 
			         $sqldata="SELECT * FROM datatable WHERE post_id='$product_id' AND category='products' AND files_type='photo' ORDER BY id ASC";
	       $resultdata = mysqli_query($con, $sqldata);  
           while($rowdata = mysqli_fetch_assoc($resultdata)){
			   
			   $photo=$rowdata['files'];
			    if($photo!=''){ ?>
					<img src="<?php echo $photo;?>" alt="" id="product_image_upload_<?php echo $pro;?>" class="photo_preview image_upload_preview"> 
					 <?php } 
					 
			   
		   }
					 ?>
						
					 </label>   
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="">
                      <p class="file-type">JPG or PNG, Smaller than 10MB</p>
                      <div class="input-file-container">  
						  
						 <input name="product_photoupload_<?php echo $pro;?>" type="file" id="product_photoupload_<?php echo $pro;?>" class='file-upload__input rf_<?php echo $pro;?> multiplefilesfilter image_upload' accept="image/*" onchange="document.getElementById('product_image_upload_<?php echo $pro;?>').src = window.URL.createObjectURL(this.files[0])"> 
						  
						  
						  
						  
                        <label for="product_photoupload_<?php echo $pro;?>">
                        <!--label tabindex="0" for="my-file" class="input-file-trigger"--><strong>Select a file...</strong> Select a file...<!--/label-->
						</label> 	
                      </div>
                    </div>
                  </div>
						  
					  
                </div>
                 </div>
               </div>
             </div>


             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Attach Files :</label>
                 </div>
                 <div class="input-undi">
					  <?php if($attach_files!=''){?>
					<a href="<?php echo $attach_files;?>" download="<?php echo $attach_files;?>">Download</a> 
					 <?php } ?>
                  <input type="file" name="product_attach_files_<?php echo $pro;?>" value="attach File" class="custom-file-input">
                 </div>
               </div>
             </div>
           </div>
			  <hr>
		  </div>
			 
		   <?php
			    $pro=$pro+1;
			   
		   }
		  ?>
		  <input type="hidden" id="product_count" name="product_count" value="<?php echo $pro;?>">

           <div class="row">
             <div class="col">
               <div class="add-mould-column-box" onClick="add_new_product();">
                 <span class="add-plus">&plus;</span>
                 Add New Product
               </div>
             </div>
           </div>

         </div>
		  
		  
		 <div class="add_new_product_div">
		  
		 </div> 
		  
		  
		  
       </div><!--Start Customer data single-box-->





                



     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->


      <div class="customer-data-inner data-inner-single-item-box no-bottom-margin"> <!--Start data -inner single box-->
     <div class="customer-data-main pb-5"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
        <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Order Details</h3>
         </div>
         <div class="main-data-form">
          <div class="row">
            <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Expedite Order :</label>
                 </div>
                 <div class="input-undi">

                   <div class="yes-no-box">
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label forml">
                      <input type="radio" class="option-input radio" name="expedite_order" <?php if($expedite_order=='Yes'){ echo 'checked'; } ?> value="Yes" />
                      Yes
                    </label>
                  </div>
                </div>
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label">
                      <input type="radio" class="option-input radio" name="expedite_order" <?php if($expedite_order=='No'){ echo 'checked'; } ?> value="No" />
                      No
                    </label>
                  </div>
                </div>
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
                   <input id="tel" type="date" name="due_date" class="form-input form-control" value="<?php echo $due_date;?>">
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
                <div class="form-group select-icon icon-select-2">
                 <select name="delivery_method" id="cre-t" class="form-input">
                   <option value="" <?php if($delivery_method==''){ echo 'selected'; } ?>>Delivery Method</option>
                   <option value="1st class post" <?php if($delivery_method=='1st class post'){ echo 'selected'; } ?>>1st class post</option>
                   <option value="1st class courier" <?php if($delivery_method=='1st class courier'){ echo 'selected'; } ?>>1st class courier</option>
                   <option value="Collection" <?php if($delivery_method=='Collection'){ echo 'selected'; } ?>>Collection</option>
				   <option value="Hand delivery" <?php if($delivery_method=='Hand delivery'){ echo 'selected'; } ?>>Hand delivery</option>	 
                 </select>
                 <span class="select-icon-absolute">
                   <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                 </span>
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
                <div class="form-group select-icon icon-select-2">
                 <select name="payment_type" id="cre-t" class="form-input">
                   <option value="" <?php if($payment_type==''){ echo 'selected'; } ?>>Payment Type</option>
                   <option value="Cash OTC" <?php if($payment_type=='Cash OTC'){ echo 'selected'; } ?>>Cash OTC</option>
                   <option value="Credit / Debit Card" <?php if($payment_type=='Credit / Debit Card'){ echo 'selected'; } ?>>Credit / Debit Card</option>
                   <option value="Cheque" <?php if($payment_type=='Cheque'){ echo 'selected'; } ?>>Cheque</option>
				   <option value="Bank transfer" <?php if($payment_type=='Bank transfer'){ echo 'selected'; } ?>>Bank transfer</option>
				   <option value="Credit facility" <?php if($payment_type=='Credit facility'){ echo 'selected'; } ?>>Credit facility</option>
				   <option value="Other" <?php if($payment_type=='Other'){ echo 'selected'; } ?>>Other</option>
                 </select>
                 <span class="select-icon-absolute">
                   <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                 </span>
               </div>
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
                  <input type="text" id="delivery_charge" name="delivery_charge" onKeyPress="javascript:return isNumber(event)" placeholder="Delivery Charge" value="<?php echo $delivery_charge;?>" class="form-input">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Deposit Paid :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" name="deposit_paid" id="deposit_paid" onKeyPress="javascript:return isNumber(event)" value="<?php echo $deposit_paid;?>" placeholder="Deposit Paid" class="form-input">
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
                 <input id="mould-notes" name="ordered_via" type="text" value="<?php echo $ordered_via;?>" maxlength="200" placeholder="Write here Ordered Via" class="form-input">
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
                 <input id="mould-notes" name="ordered_notes" type="text" value="<?php echo $ordered_notes;?>" maxlength="500" placeholder="Write here Ordered Notes" class="form-input">
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
		  
			 
		<div class="mould mould_div_<?php echo $mol;?>"><div style="float:right;"><a href="#!" onclick="delete_row('moulds','<?php echo $moulds_id;?>','mould_div_<?php echo $mol;?>');">&times; Delete</a></div><br><br>
			 <input type="hidden" name="moulds_id_<?php echo $mol;?>" value="<?php echo $moulds_id;?>">
          <div class="row">
            <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould in stock? </label>
                 </div>
                 <div class="input-undi">

                   <div class="yes-no-box">
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label forml">
                      <input type="radio" class="option-input radio" value="yes" id="mould_in_stock_yes_<?php echo $mol;?>" name="mould_in_stock_<?php echo $mol;?>" onChange="radio('moulds_<?php echo $mol;?>',this);" <?php if($mould_in_stock=='yes'){ echo 'checked'; } ?> />
                      Yes
                    </label>
                  </div>
                </div>
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label">
                      <input type="radio" class="option-input radio" value="no" id="mould_in_stock_no_<?php echo $mol;?>" name="mould_in_stock_<?php echo $mol;?>" onChange="radio('moulds_<?php echo $mol;?>',this);"  <?php if($mould_in_stock=='no'){ echo 'checked'; } ?> />
                      No
                    </label>
                  </div>
                </div>
              </div>
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column moulds_<?php echo $mol;?>">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould in Stock :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Mould in Stock" name="moulds_in_stock_<?php echo $mol;?>" value="<?php echo $moulds_in_stock;?>" onKeyPress="javascript:return isNumber(event)" class="form-input">
                 </div>
               </div>
             </div>
           </div>


           <div class="row moulds_<?php echo $mol;?>">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould ID :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Mould ID" name="mould_id_<?php echo $mol;?>" value="<?php echo $mould_id;?>" class="form-input">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould Location :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Mould Location" name="mould_location_<?php echo $mol;?>" value="<?php echo $mould_location;?>" maxlength="200" class="form-input">
                 </div>
               </div>
             </div>
           </div>

           <div class="row moulds_<?php echo $mol;?>">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould Pre-set Price :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Mould Pre-set Price" id="mould_pre_set_price_<?php echo $mol;?>" name="mould_pre_set_price_<?php echo $mol;?>" value="<?php echo $mould_pre_set_price;?>" onKeyPress="javascript:return isNumber(event)" class="form-input">
                 </div>
               </div>
             </div>
           </div>


           <div class="row mt-3 moulds_<?php echo $mol;?>">
            <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label for="mould-notes" class="form-label">mould-notes :</label>
                 </div>
                 <div class="input-undi">
                 <input id="mould-notes" type="text" name="mould_notes_<?php echo $mol;?>" value="<?php echo $mould_notes;?>" maxlength="500" placeholder="Write here mould-notes" class="form-input">
                 </div>
               </div>
             </div>
           </div>

			 
			 
           <div class="row mt-3 moulds_<?php echo $mol;?>">
             <div class="col-md-4 custom-column">
              <label for="mould-notes" class="form-label">mould photo</label><br>
                <div class="file-field form-group">
                  <div class="z-depth-1-half mb-2 image_box">
					<label for="mould_photo_photoupload">
                      <!--img src="assets/img/filel-uploader.svg"
                      alt="example placeholder" id="mould_photo_image_upload_<?php echo $mol;?>" class="image_upload_preview"-->
						
						<?php 
			           $mp=0;
			         $sqldata="SELECT * FROM datatable WHERE post_id='$moulds_id' AND category='moulds' AND files_type='photo' ORDER BY id ASC";
	       $resultdata = mysqli_query($con, $sqldata);  
           while($rowdata = mysqli_fetch_assoc($resultdata)){
			   
			   $photo=$rowdata['files'];
			    if($photo!=''){ 
						$mp=1;
						?>
					<img src="<?php echo $photo;?>" alt="" id="mould_photo_image_upload_<?php echo $mol;?>"  class="image_upload_preview photo_preview"> 
					 <?php }
					 
		   }
					 ?>
				<?php	if($mp==0){
					?>
					<img src="assets/img/filel-uploader.svg"
                      alt="example placeholder" id="mould_photo_image_upload_<?php echo $mol;?>" class="image_upload_preview">	
				  <?php		
				} 	
					?>	
					</label>	  
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="">
                      <p class="file-type">JPG or PNG, Smaller than 10MB</p>
                      <div class="input-file-container">  
                        <input name="mould_photo_<?php echo $mol;?>" type="file" id="mould_photo_photoupload_<?php echo $mol;?>" class='file-upload__input rf_<?php echo $mol;?> multiplefilesfilter image_upload' accept="image/*" onchange="document.getElementById('mould_photo_image_upload_<?php echo $mol;?>').src = window.URL.createObjectURL(this.files[0])">
                        <label for="mould_photo_photoupload_<?php echo $mol;?>"><strong>Select a file...</strong> Select a file...</label>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
             <div class="col-md-8 custom-column">
               <div class="form-group long-height">
                <label for="message" class="form-label"> Wax notes</label>
                 <textarea id="message" name="wax_notes_<?php echo $mol;?>" value="<?php echo $wax_notes;?>" maxlength="500" placeholder="Write here notes" class=" text-area-box form-input"></textarea>
               </div>
             </div>
           </div>
			 <hr>
		  </div> 
			 
		  <?php
		   $mol=$mol+1;
		   }
		  ?>
		  <input type="hidden" name="mould_count" id="mould_count" value="<?php echo $mol;?>">
			 
			 
			 <div class="row">
             <div class="col">
               <div class="add-mould-column-box" onClick="add_new_mould();">
                 <span class="add-plus">&plus;</span>
                 Add New Mould
               </div>
             </div>
           </div>


         </div>
		  
		  <div class="add_new_mould_div">
		  
		 </div> 
		  
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->


   <div class="customer-data-inner data-inner-single-item-box"> <!--Start data -inner single box-->
     <div class="customer-data-main pb-5"><!--Start of customer data main-->

		 
		 
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="main-data-form">
			 
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
			 
			 <div class="model model_div_<?php echo $mod;?>"><div style="float:right;"><a href="#!" onclick="delete_row('models','<?php echo $models_id;?>','model_div_<?php echo $mod;?>');">&times; Delete</a></div><br><br>
			  <input type="hidden" name="models_id_<?php echo $mod;?>" value="<?php echo $models_id;?>">
          <div class="row">
            <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">3D Model in stock? </label>
                 </div>
                 <div class="input-undi">

                   <div class="yes-no-box">
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label forml">
                      <input type="radio" class="option-input radio" value="yes" name="3d_model_in_stock_<?php echo $mod;?>" id="3d_model_in_stock_yes_<?php echo $mod;?>" onChange="radio('models_<?php echo $mod;?>',this);" <?php if($d_model_in_stock=='yes'){ echo 'checked'; }?> />
                      Yes
                    </label>
                  </div>
                </div>
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label">
                      <input type="radio" class="option-input radio" value="no" name="3d_model_in_stock_<?php echo $mod;?>" id="3d_model_in_stock_no_<?php echo $mod;?>" onChange="radio('models_<?php echo $mod;?>',this);" <?php if($d_model_in_stock=='no'){ echo 'checked'; }?> />
                      No
                    </label>
                  </div>
                </div>
              </div>
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column models_<?php echo $mod;?>">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Models in Stock :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Models in Stock" onKeyPress="javascript:return isNumber(event)" class="form-input" value="<?php echo $models_in_stock;?>" name="models_in_stock_<?php echo $mod;?>">
                 </div>
               </div>
             </div>
           </div>


           <div class="row models_<?php echo $mod;?>">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Model ID :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Model ID" class="form-input" value="<?php echo $model_id;?>" name="model_id_<?php echo $mod;?>">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Model Location :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Model Location" maxlength="200" class="form-input" value="<?php echo $model_location;?>" name="model_location_<?php echo $mod;?>">
                 </div>
               </div>
             </div>
           </div>

           <div class="row models_<?php echo $mod;?>">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Model Pre-set Price :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Model Pre-set Price" onKeyPress="javascript:return isNumber(event)" class="form-input" id="model_pre_set_price_<?php echo $mod;?>" name="model_pre_set_price_<?php echo $mod;?>" value="<?php echo $model_pre_set_price;?>">
                 </div>
               </div>
             </div>
           </div>
			 

           <div class="row mt-3 models_<?php echo $mod;?>">
             <div class="col-md-4 custom-column">
              <label for="mould-notes" class="form-label">Model photo</label><br>
                <div class="file-field form-group">
                  <div class="z-depth-1-half mb-2 image_box">
					<label for="model_photo_photoupload_<?php echo $mod;?>">  
                    <!--img src="assets/img/filel-uploader.svg"
                      alt="example placeholder" id="model_photo_image_upload_<?php echo $mod;?>" class="image_upload_preview"-->
						<?php 
			         $sqldata="SELECT * FROM datatable WHERE post_id='$models_id' AND category='models' AND files_type='photo' ORDER BY id ASC";
	       $resultdata = mysqli_query($con, $sqldata);  
           while($rowdata = mysqli_fetch_assoc($resultdata)){
			   
			   $photo=$rowdata['files'];
			    if($photo!=''){ ?>
					<img src="<?php echo $photo;?>" alt="" id="model_photo_image_upload_<?php echo $mod;?>" class="image_upload_preview photo_preview"> 
					 <?php } 
					 
		   }
					 ?>
					</label>	
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="">
                      <p class="file-type">JPG or PNG, Smaller than 10MB</p>
                      <div class="input-file-container">  
                        <input name="model_photo_<?php echo $mod;?>" type="file" id="model_photo_photoupload_<?php echo $mod;?>" class='file-upload__input rf_<?php echo $mod;?> multiplefilesfilter image_upload' accept="image/*" onchange="document.getElementById('model_photo_image_upload_<?php echo $mod;?>').src = window.URL.createObjectURL(this.files[0])">
                        <label for="model_photo_photoupload_<?php echo $mod;?>"><strong>Select a file...</strong> Select a file...</label>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
             <div class="col-md-8 custom-column">
               <div class="form-group long-height">
                <label for="message" class="form-label"> Model notes</label>
                 <textarea id="message" placeholder="Write here notes" name="model_notes_<?php echo $mod;?>" maxlength="500" class=" text-area-box form-input"><?php echo $model_notes;?></textarea>
               </div>
             </div>
           </div>
				  <hr>
				  </div>
			 
		  
		  <?php
			   $mod=$mod+1;
		   }
		   ?>   
			 <input type="hidden" name="model_count" id="model_count" value="<?php echo $mod;?>">
			 
			<div class="row">
             <div class="col">
               <div class="add-mould-column-box" onClick="add_new_model();">
                 <span class="add-plus">&plus;</span>
                 Add New Model
               </div>
             </div>
           </div>	 

		 
		  
		 <div class="add_new_model_div">
		  
		 </div> 
			 

         </div>
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->




   <div class="customer-data-inner data-inner-single-item-box"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Select The Departments</h3>
         </div>
         <div class="main-data-form">
           <div class="row mb-5">
			   
			    <div class="col-md-4 custom-column">
			  <?php
					$d=0;
			        $dc=0;
					$worksop=0;
			  $outsource=0;
			   $sqldepart="SELECT * FROM department WHERE order_id='$order_id'";
	        $resultdepart = mysqli_query($con, $sqldepart);  
           while($row = mysqli_fetch_assoc($resultdepart))
		   {
			   $d=$d+1;
			   $dc=$dc+1;
			   
			    if($row['department_include']=='yes'){
				   
				   if($row['department_name']=='Workshop'){
				     $worksop=1;
			       }
				   
				   if($row['department_name']=='Outsource'){
				     $outsource=1;
			       }
				   
				   
			   }
			   ?>
			  <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" onChange="checkbox('<?php echo $row['department_name'];?>',this);" name="department_<?php echo $dc;?>" id="department_<?php echo $dc;?>" <?php if($row['department_include']=='yes'){ echo 'checked'; } ?> value="yes">
                <label class="custom-control-label" for="department_<?php echo $dc;?>"><?php echo $dc;?>. <?php echo $row['department_name'];?></label>
				  
				  <div class="customer-details-box-single list-dep-area">
                 <div class="left-label">
                   <label class="form-label">Price :</label>
                 </div>
                 <div class="input-undi">
                   <input id="department_<?php echo $dc;?>_price" type="text" placeholder="" class="form-input" name="department_<?php echo $dc;?>_price" onKeyPress="javascript:return isNumber(event)" value="<?php echo $row['department_price'];?>">
                 </div>
               </div>
				  <input type="hidden" id="department_name_<?php echo $dc;?>" value="<?php echo $row['department_name'];?>">
				  
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


   <div class="customer-data-inner data-inner-single-item-box mt-4 Workshop" style="<?php if($worksop==0){ echo 'display: none;'; } ?>"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Select The Workshop Service</h3>
         </div>
         <div class="main-data-form">
           <div class="row mb-5">
             
			   <?php
		  $sqlwork="SELECT * FROM workshop WHERE order_id='$order_id'";
	        $resultwork = mysqli_query($con, $sqlwork);  
            $rowwork = mysqli_fetch_assoc($resultwork);
			{  
				
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
			  
			}
	    ?>	  

              <div class="col-md-4">
                <div class="checkbox-inner">
                  <div class="single-checkbox-item">
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="cleaning" value="yes" <?php if($cleaning=='yes'){ echo 'checked'; } ?> class="custom-control-input" id="cleaning">
                    <label class="custom-control-label" for="cleaning">Cleaning</label>
						
						 <div class="customer-details-box-single list-dep-area">
                 <div class="left-label">
                   <label class="form-label">Price :</label>
                 </div>
                 <div class="input-undi">
                   <input id="cleaning_price" type="text" onKeyPress="javascript:return isNumber(event)" name="cleaning_price" placeholder="" class="form-input" value="<?php echo $cleaning_price;?>">
                 </div>
               </div>
						
                  </div>
                  </div>


                  <div class="single-checkbox-item">
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="polishing" value="yes" <?php if($polishing=='yes'){ echo 'checked'; } ?> class="custom-control-input" id="polishing">
                    <label class="custom-control-label" for="polishing">Polishing</label>
                  </div>
                  <div class="left-margin-check-container">
                      <div class="single-left-check">
                        <label>
                        <input type="checkbox" name="sandblasting" value="yes" <?php if($sandblasting=='yes'){ echo 'checked'; } ?> class="option-input checkbox" />
                        Sandblasting
                      </label>
                      </div>

                      <div class="single-left-check">
                        <label>
                        <input type="checkbox" name="matt_finish" value="yes" <?php if($matt_finish=='yes'){ echo 'checked'; } ?> class="option-input checkbox" />
                        Matt Finish
                      </label>
                      </div>

                      <div class="single-left-check">
                        <label>
                        <input type="checkbox" name="high_polish" value="yes" <?php if($high_polish=='yes'){ echo 'checked'; } ?> class="option-input checkbox" />
                        High Polish
                      </label>
                      </div>

                      <div class="single-left-check">
                        <label>
                        <input type="checkbox" name="fine_polish" value="yes" <?php if($fine_polish=='yes'){ echo 'checked'; } ?> class="option-input checkbox" />
                        Fine Polish
                      </label>
                      </div>

                      <div class="single-left-check">
                        <label>
                        <input type="checkbox" name="pin_barrel" value="yes" <?php if($pin_barrel=='yes'){ echo 'checked'; } ?> class="option-input checkbox" />
                        Pin Barrel
                      </label>
						  
						   <div class="customer-details-box-single list-dep-area">
                 <div class="left-label">
                   <label class="form-label">Price :</label>
                 </div>
                 <div class="input-undi">
                   <input id="polishing_price" type="text" onKeyPress="javascript:return isNumber(event)" name="polishing_price" placeholder="" class="form-input" value="<?php echo $polishing_price;?>">
                 </div>
               </div>
						  
                      </div>
                  </div>
                  </div>

                  <div class="single-checkbox-item">
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="assembly" value="yes" <?php if($assembly=='yes'){ echo 'checked'; } ?> class="custom-control-input" id="assembly">
                    <label class="custom-control-label" for="assembly">Assembly</label>
						
						 <div class="customer-details-box-single list-dep-area">
                 <div class="left-label">
                   <label class="form-label">Price :</label>
                 </div>
                 <div class="input-undi">
                   <input id="assembly_price" type="text" name="assembly_price" onKeyPress="javascript:return isNumber(event)" placeholder="" class="form-input" value="<?php echo $assembly_price;?>">
                 </div>
               </div>
						
                  </div>
                  </div>
                </div>
              </div>

              <div class="col-md-8">
                <div class="right-checkbox-area">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="plating" value="yes" <?php if($plating=='yes'){ echo 'checked'; } ?> class="custom-control-input" id="plating">
                    <label class="custom-control-label" for="plating">Plating</label>
                  </div>

                  <div class="Plating-right-inner">
                    <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Plating Type :</label>
                     </div>
                    <div class="input-undi">
                      <div class="form-group select-icon icon-select-2">
                       <select name="plating_type" id="cre-t" class="form-input">
                         <option value="" <?php if($plating_type==''){ echo 'selected'; } ?>>Plating Type</option>
                         <option value="Hard plating" <?php if($plating_type=='Hard plating'){ echo 'selected'; } ?>>Hard plating</option>
                         <option value="Soft Plating" <?php if($plating_type=='Soft Plating'){ echo 'selected'; } ?>>Soft Plating</option>
                       </select>
                       <span class="select-icon-absolute">
                         <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                       </span>
                     </div>
                 </div>
               </div>

               <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Plating Thickness :</label>
                     </div>
                    <div class="input-undi">
                      <div class="form-group select-icon icon-select-2">
                       <select name="plating_thickness" id="cre-t" class="form-input">
                         <option value="" <?php if($plating_thickness==''){ echo 'selected'; } ?>>Plating Thickness</option>
                         <option value="1 microns" <?php if($plating_thickness=='1 microns'){ echo 'selected'; } ?>>1 microns</option>
                         <option value="2 microns" <?php if($plating_thickness=='2 microns'){ echo 'selected'; } ?>>2 microns</option>
                         <option value="3 microns" <?php if($plating_thickness=='3 microns'){ echo 'selected'; } ?>>3 microns</option>
						 <option value="4 microns" <?php if($plating_thickness=='4 microns'){ echo 'selected'; } ?>>4 microns</option>
                         <option value="5 microns" <?php if($plating_thickness=='5 microns'){ echo 'selected'; } ?>>5 microns</option>
                         <option value="6 microns" <?php if($plating_thickness=='6 microns'){ echo 'selected'; } ?>>6 microns</option>
						 <option value="7 microns" <?php if($plating_thickness=='7 microns'){ echo 'selected'; } ?>>7 microns</option>
                         <option value="8 microns" <?php if($plating_thickness=='8 microns'){ echo 'selected'; } ?>>8 microns</option>
                         <option value="9 microns" <?php if($plating_thickness=='9 microns'){ echo 'selected'; } ?>>9 microns</option>
						 <option value="10 microns" <?php if($plating_thickness=='10 microns'){ echo 'selected'; } ?>>10 microns</option>
                         
                       </select>
                       <span class="select-icon-absolute">
                         <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                       </span>
                     </div>
                 </div>
               </div>

               <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Plating Colours :</label>
                     </div>
                    <div class="input-undi">
                      <div class="form-group select-icon icon-select-2">
                       <select name="plating_colours" id="cre-t" class="form-input">
                         <option value="" <?php if($plating_colours==''){ echo 'selected'; } ?>>Plating Colours</option>
                         <option value="14Kt Gold" <?php if($plating_colours=='14Kt Gold'){ echo 'selected'; } ?>>14Kt Gold</option>
                         <option value="18kt yellow Gold" <?php if($plating_colours=='18kt yellow Gold'){ echo 'selected'; } ?>>18kt yellow Gold</option>
                         <option value="22ct yellow gold" <?php if($plating_colours=='22ct yellow gold'){ echo 'selected'; } ?>>22ct yellow gold</option>
						 <option value="18kt white gold" <?php if($plating_colours=='18kt white gold'){ echo 'selected'; } ?>>18kt white gold</option>
                         <option value="22ct white gold" <?php if($plating_colours=='22ct white gold'){ echo 'selected'; } ?>>22ct white gold</option>  
                       </select>
                       <span class="select-icon-absolute">
                         <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                       </span>
                     </div>
               </div>


                  </div>


                </div> 
					
					
					<div class="ml-2 mt-2 customer-details-box-single list-dep-area">
                 <div class="left-label">
                   <label class="form-label">Price :</label>
                 </div>
                 <div class="input-undi">
                   <input id="plating_price" type="text" name="plating_price" onKeyPress="javascript:return isNumber(event)" placeholder="" class="form-input" value="<?php echo $plating_price;?>">
                 </div>
               </div>

					
					
              </div>
         </div>
			 </div>

         <div class="row">
           <div class="col-md-12 custom-column">
               <div class="form-group long-height">
                <label for="message" class="form-label"> Assembly Notes</label>
                 <textarea id="message" name="assembly_notes" maxlength="500" placeholder="Write here Assembly Notes" class=" text-area-box form-input"><?php echo $assembly_notes;?></textarea>
               </div>
             </div>
         </div>
			</div> 
       </div><!--Start Customer data single-box-->
		 

     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->


   <div class="customer-data-inner data-inner-single-item-box Outsource-bottom mt-4 Outsource" style="<?php if($outsource==0){ echo 'display: none;'; } ?>"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->
          
		 <?php
		$sqlout="SELECT * FROM outsource WHERE order_id='$order_id'";
	        $resultout = mysqli_query($con, $sqlout);  
           $rowout = mysqli_fetch_assoc($resultout);
		   {
			
			   $outsource_plating = $rowout['outsource_plating'];
		    $plating_company = $rowout['plating_company'];
		   $hallmark = $rowout['hallmark'];
		   $hallmark_outsourcing_company = $rowout['hallmark_outsourcing_company'];
		   $hallmark_notes = $rowout['hallmark_notes'];	  
		   $outsource_setting = $rowout['outsource_setting'];
		   $setting_company = $rowout['setting_company'];
		   $outsource_engraving = $rowout['outsource_engraving'];
		   $engraving_company = $rowout['engraving_company'];
			   
		   }
	?>	  
		 
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Outsource Options</h3>
         </div>
         <div class="main-data-form">
           <div class="row">
              <div class="col-md-6">
                <div class="right-checkbox-area single-checkbox-right">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="outsource_plating" value="yes" <?php if($outsource_plating=='yes'){ echo 'checked'; } ?> class="custom-control-input" id="outsource_plating">
                    <label class="custom-control-label" for="outsource_plating">Outsource Plating</label>
                  </div>

                  <div class="Plating-right-inner">
                    <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Plating Company :</label>
                     </div>
                    <div class="input-undi">
                      <div class="form-group select-icon icon-select-2">
                       <select name="plating_company" id="cre-t" class="form-input">
                         <option value="" <?php if($plating_company==''){ echo 'selected'; } ?>>Select Plating Company</option>
                         <option value="Select option" <?php if($plating_company=='Select option'){ echo 'selected'; } ?>>Select option</option>
                         <option value="Select option">Select option</option>
                         <option value="Select option">Select option</option>
                       </select>
                       <span class="select-icon-absolute">
                         <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                       </span>
                     </div>
                 </div>
               </div>
              </div>
              </div> 
              <div class="right-checkbox-area single-checkbox-right">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="hallmark" value="yes" <?php if($hallmark=='yes'){ echo 'checked'; } ?> class="custom-control-input" id="defaultUnchecked25">
                    <label class="custom-control-label" for="defaultUnchecked25">Hallmark</label>
                  </div>

                  <div class="Plating-right-inner">
                    <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Hallmark Outsourcing Company :</label>
                     </div>
                    <div class="input-undi">
                      <div class="form-group select-icon icon-select-2">
                       <select name="hallmark_outsourcing_company" id="cre-t" class="form-input">
                         <option value="" <?php if($hallmark_outsourcing_company==''){ echo 'selected'; } ?>>Select Company</option>
                         <option value="Select option" <?php if($hallmark_outsourcing_company=='Select option'){ echo 'selected'; } ?>>Select option</option>
                         <option value="Select option">Select option</option>
                         <option value="Select option">Select option</option>
                       </select>
                       <span class="select-icon-absolute">
                         <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                       </span>
                     </div>
                 </div>
               </div>
              </div>
              </div> 
            </div>

            <div class="col-md-6">
                <div class="right-checkbox-area single-checkbox-right">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="outsource_setting" value="yes" <?php if($outsource_setting=='yes'){ echo 'checked'; } ?> class="custom-control-input" id="defaultUnchecked18">
                    <label class="custom-control-label" for="defaultUnchecked18">Outsource -Setting</label>
                  </div>

                  <div class="Plating-right-inner">
                    <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Setting Company :</label>
                     </div>
                    <div class="input-undi">
                      <div class="form-group select-icon icon-select-2">
                       <select name="setting_company" id="cre-t" class="form-input">
                         <option value="" <?php if($setting_company==''){ 'selected'; } ?>>Choose Company</option>
                         <option value="Select option" <?php if($setting_company=='Select option'){ 'selected'; } ?>>Select option</option>
                         <option value="Select option">Select option</option>
                         <option value="Select option">Select option</option>
                       </select>
                       <span class="select-icon-absolute">
                         <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                       </span>
                     </div>
                 </div>
               </div>
              </div>
              </div> 
              <div class="right-checkbox-area single-checkbox-right">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="outsource_engraving" value="yes" <?php if($outsource_engraving=='yes'){ echo 'checked'; } ?> class="custom-control-input" id="defaultUnchecked20">
                    <label class="custom-control-label" for="defaultUnchecked20">Outsource -Engraving</label>
                  </div>

                  <div class="Plating-right-inner">
                    <div class="customer-details-box-single">
                     <div class="left-label">
                       <label class="form-label new-addition">Engraving Company :</label>
                     </div>
                    <div class="input-undi">
                      <div class="form-group select-icon icon-select-2">
                       <select name="engraving_company" id="cre-t" class="form-input">
                         <option value="" <?php if($engraving_company==''){ echo 'selected'; } ?>>Choose Company</option>
                         <option value="Select option" <?php if($engraving_company=='Select option'){ echo 'selected'; } ?>>Select option</option>
                         <option value="Select option">Select option</option>
                         <option value="Select option">Select option</option>
                       </select>
                       <span class="select-icon-absolute">
                         <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                       </span>
                     </div>
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
                 <input id="mould-notes" name="hallmark_notes" type="text" value="<?php echo $hallmark_notes;?>" placeholder="Write here Hallmark Notes" maxlength="500" class="form-input">
                 </div>
               </div>
             </div>
           </div>


		  </div>
         
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->
	   
	   
	   
   
   <div id="charging_details" class="customer-data-inner data-inner-single-item-box dup-order create-order-page mt-4"> <!--Start data -inner single box-->
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
                   <input type="text" name="total_products_price" id="total_products_price" onKeyPress="javascript:return isNumber(event)" class="form-input" value="">
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
                   <input name="total_materials_price" id="total_materials_price" type="text" onKeyPress="javascript:return isNumber(event)" class="form-input" value="">
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
                   <input type="text" name="total_services_price" id="total_services_price" onKeyPress="javascript:return isNumber(event)" class="form-input" value="">
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
                   <input name="total_consultation_price" id="total_consultaion_price" type="text" onKeyPress="javascript:return isNumber(event)" class="form-input" value="">
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
                   <input name="total_gross_cost" id="total_gross_cost" type="text" onKeyPress="javascript:return isNumber(event)" class="form-input" value="">
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
                   <input id="total_vat" name="total_vat" type="text" onKeyPress="javascript:return isNumber(event)" class="form-input none-bg-border" value="" disabled="">
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
                   <input name="total_delivery_charge" id="total_delivery_charge" type="text" onKeyPress="javascript:return isNumber(event)" class="form-input none-bg-border" value="" disabled="">
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
                   <input name="total_discounts_price" id="total_discounts_price" type="text" onKeyPress="javascript:return isNumber(event)"  class="form-input none-bg-border" value="" disabled="">
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
                   <input name="total_net_cost" id="total_net_cost" type="text" onKeyPress="javascript:return isNumber(event)"  class="form-input none-bg-border" value="" disabled="" >
					 <input name="total_price" id="total_price" type="hidden"  class="form-input none-bg-border" value="" >
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
           <div class="col-md-12 custom-column">
               <div class="form-group long-height">
                <label for="message" class="form-label">Special Instructions :</label>
                 <textarea id="message" name="special_instructions" maxlength="500" placeholder="Write here special instructions Notes" class=" text-area-box form-input"><?php echo $special_instructions;?></textarea>
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
	   
	   
	  <div>
    <input type="hidden" name="signature" id="signature" />
  </div>		 
				 
				 
		<div><canvas id="canvas" width="400" height="200" style="border: 1px solid #ccc;"></canvas></div>		 
				 <p><!--button id="clearSig" type="button" class="btns">Clear Signature</button-->
					 <a href="#!" id="clearSig">Clear Signature</a>
					 &nbsp;
<!--button id="saveSig" type="button">Save Signature</button></p-->
				 
	<div id="imgData" style="width:960px; word-wrap: break-word; text-align:center; display: none;"></div>	  
	   


   <div class="row my-5">
     <div class="col-md-6 offset-md-6 custom-column text-right">
      <div class="buttons-data-table">
        <a href="search_order.php" onClick="calculate_total();"  class="btns btn-data-table border-btn">Cancel</a>
        <!--a href="data-filter.html"  class="btns btn-data-table">Save</a-->
		  <?php if($customer_type!=''){ ?>	
		   <button type="submit" name='submit' value="update_order" class="submit-btn1 btns btn-data-table">Save</button>
		  <?php
		  }
		  ?>
      </div> 
     </div>
   </div>
 </div>
 </div>
 </form>
</section>
</main>




<?php include_once('footer.php'); ?>



<script type="text/javascript" src="js/order.js">
		
	</script>	
	



