<?php 
include_once('header.php');


$customer_type='';
if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
	$_SESSION['create_order_customer_id']=$_REQUEST['id'];
	//$main_customer_id=$_REQUEST['id'];
}
    $main_customer_id=$_SESSION['create_order_customer_id'];

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
       <h1>Create New Order</h1>
     </div>
     <div class="customer-data-main"><!--Start of customer data main-->
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text">Customer Details</h3>
         </div>
         <div class="main-data-form">
			 
			 <input type="hidden" name="order_status" value="order">
			 
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $main_customer_id;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Customer Type:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $customer_type_text;?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['full_name'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mobile No :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['mobile_number'];?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['telephone_number'];?>" disabled="">
                 </div>
               </div>
             </div>
             
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['email_address'];?>" disabled="">
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
                   <input id="tel" type="text" placeholder="XXXXXXXXXX" class="form-input none-bg-border" value="<?php echo $row['credit_facilty'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Credit Facility Amount :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['credit_facility_amount'];?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $main_customer_id;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Customer Type:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $customer_type_text;?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['company_name'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Company Reg. No.:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['company_reg_number'];?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['vat'];?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['company_information'];?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['primary_contact_name'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Primary Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['primary_email_address'];?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['company_website'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Contact No :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['contact_number'];?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['accounts_payable_contact_name'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Accounts Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['accounts_email_address'];?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['credit_facilty'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Credit Facility Amount :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['credit_facility_amount'];?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $main_customer_id;?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Customer Type:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $customer_type_text;?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['full_name'];?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['telephone_number'];?>" disabled="">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label"> Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['email_address'];?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['delivery_address'];?>" disabled="">
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
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['college_or_university_attended'];?>" disabled="">
                 </div>
               </div>
             </div>
             
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Course:</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" placeholder="Your telephone number" class="form-input none-bg-border" value="<?php echo $row['course'];?>" disabled="">
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

		<input type="hidden" name="product_count" id="product_count" value="0"> 
		 
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Products :</h3>
         </div>
         <div class="main-data-form">
		
		  <div class="product">	 
			 
          <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Product Type :</label>
                 </div>
                 <div class="input-undi">
                <div class="form-group select-icon icon-select-2">
                 <select name="product_type_0" id="cre-t" class="form-input">
                   <option value="Ring (finger)">Ring (finger)</option>
                   <option value="Necklace">Necklace</option>
                   <option value="Bangle">Bangle</option>
                   <option value="Earing">Earing</option>
				   <option value="Tooth cover">Tooth cover</option>
				   <option value="Buckle">Buckle</option>
				   <option value="Other">Other</option>	 
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
                   <input id="tel" name="product_quantity_0" type="text" onKeyPress="javascript:return isNumber(event)" placeholder="Product Quantity" class="form-input">
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
                 <select name="product_material_0" id="cre-t" class="form-input">
                   <option value="14ct Gold">14ct Gold</option>
                   <option value="18ct Yellow Gold">18ct Yellow Gold</option>
                   <option value="18ct White Gold">18ct White Gold</option>
                   <option value="22ct Yellow Gold">22ct Yellow Gold</option>
				   <option value="22ct White Gold">22ct White Gold</option>
				   <option value="Palladium">Palladium</option>
				   <option value="Platinum">Platinum</option>
				   <option value="925 Silver">925 Silver</option>
				   <option value="Bronze">Bronze</option>
				   <option value="Brass">Brass</option>
				   <option value="Copper">Copper</option>
				   <option value="Nickle">Nickle</option>
				   <option value="White Rhodium">White Rhodium</option>
				   <option value="Black Rhodium">Black Rhodium</option>
				   <option value="Other">Other</option>	 
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
                   <input id="tel" name="product_weight_0" type="text" onKeyPress="javascript:return isNumber(event)" placeholder="Weight" class="form-input">
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
                   <input id="product_price_0" name="product_price_0" type="text" onKeyPress="javascript:return isNumber(event)" placeholder="Price" class="form-input">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Ex- VAT Price :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" name="product_ex_vat_price_0" type="text" onKeyPress="javascript:return isNumber(event)" placeholder="Ex- VAT Price" class="form-input">
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
					  
					<label for="product_photoupload_0">					  
                    <img src="assets/img/filel-uploader.svg"
                      alt="example placeholder" id="product_image_upload_0" class="image_upload_preview">
					 </label>   
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="">
                      <p class="file-type">JPG or PNG, Smaller than 10MB</p>
                      <div class="input-file-container">  
						  
						 <input name="product_photoupload_0" type="file" id="product_photoupload_0" class='file-upload__input rf_0 multiplefilesfilter image_upload' accept="image/*" onchange="document.getElementById('product_image_upload_0').src = window.URL.createObjectURL(this.files[0])"> 
						  
                        <label for="product_photoupload_0">
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
                  <input type="file" name="product_attach_files_0" value="attach File" class="custom-file-input">
                 </div>
               </div>
             </div>
           </div>
			 
		  </div>	 

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
                      <input type="radio" class="option-input radio" name="expedite_order" value="Yes" />
                      Yes
                    </label>
                  </div>
                </div>
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label">
                      <input type="radio" class="option-input radio" checked name="expedite_order" value="No" />
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
                   <input id="tel" type="date" name="due_date" class="form-input form-control">
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
                   <option value="">Delivery Method</option>
                   <option value="1st class post">1st class post</option>
                   <option value="1st class courier">1st class courier</option>
                   <option value="Collection">Collection</option>
				   <option value="Hand delivery">Hand delivery</option>	 
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
                   <option value="">Payment Type</option>
                   <option value="Cash OTC">Cash OTC</option>
                   <option value="Credit / Debit Card">Credit / Debit Card</option>
                   <option value="Cheque">Cheque</option>
				   <option value="Bank transfer">Bank transfer</option>
				   <option value="Credit facility">Credit facility</option>
				   <option value="Other">Other</option>
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
                  <input type="text" id="delivery_charge" name="delivery_charge" onKeyPress="javascript:return isNumber(event)" placeholder="Delivery Charge" class="form-input">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Deposit Paid :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" name="deposit_paid" id="deposit_paid" onKeyPress="javascript:return isNumber(event)" placeholder="Deposit Paid" class="form-input">
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
                 <input id="mould-notes" name="ordered_via" type="text" maxlength="200" placeholder="Write here Ordered Via" class="form-input">
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
                 <input id="mould-notes" name="ordered_notes" type="text" maxlength="500" placeholder="Write here Ordered Notes" class="form-input">
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

		 <input type="hidden" name="mould_count" id="mould_count" value="0">
		 
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="main-data-form">
		
		<div class="mould">	 
			 
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
                      <input type="radio" class="option-input radio" value="yes" id="mould_in_stock_yes_0" name="mould_in_stock_0" onChange="radio('moulds_0',this);" checked />
                      Yes
                    </label>
                  </div>
                </div>
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label">
                      <input type="radio" class="option-input radio" value="no" id="mould_in_stock_no_0" name="mould_in_stock_0" onChange="radio('moulds_0',this);" />
                      No
                    </label>
                  </div>
                </div>
              </div>
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column moulds_0">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould in Stock :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Mould in Stock" onKeyPress="javascript:return isNumber(event)" name="moulds_in_stock_0" class="form-input">
                 </div>
               </div>
             </div>
           </div>


           <div class="row moulds_0">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould ID :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Mould ID" name="mould_id_0" class="form-input">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould Location :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Mould Location" name="mould_location_0" maxlength="200" class="form-input">
                 </div>
               </div>
             </div>
           </div>

           <div class="row moulds_0">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Mould Pre-set Price :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Mould Pre-set Price" id="mould_pre_set_price_0" name="mould_pre_set_price_0" onKeyPress="javascript:return isNumber(event)" class="form-input">
                 </div>
               </div>
             </div>
           </div>


           <div class="row mt-3 moulds_0">
            <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label for="mould-notes" class="form-label">mould-notes :</label>
                 </div>
                 <div class="input-undi">
                 <input id="mould-notes" type="text" name="mould_notes_0" maxlength="500" placeholder="Write here mould-notes" class="form-input">
                 </div>
               </div>
             </div>
           </div>

			 
			 
           <div class="row mt-3 moulds_0">
             <div class="col-md-4 custom-column">
              <label for="mould-notes" class="form-label">mould photo</label><br>
                <div class="file-field form-group">
                  <div class="z-depth-1-half mb-2 image_box">
					<label for="mould_photo_photoupload">
                      <img src="assets/img/filel-uploader.svg"
                      alt="example placeholder" id="mould_photo_image_upload_0" class="image_upload_preview">
					</label>	  
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="">
                      <p class="file-type">JPG or PNG, Smaller than 10MB</p>
                      <div class="input-file-container">  
                        <input name="mould_photo_0" type="file" id="mould_photo_photoupload_0" class='file-upload__input rf_0 multiplefilesfilter image_upload' accept="image/*" onchange="document.getElementById('mould_photo_image_upload_0').src = window.URL.createObjectURL(this.files[0])">
                        <label for="mould_photo_photoupload_0"><strong>Select a file...</strong> Select a file...</label>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
             <div class="col-md-8 custom-column">
               <div class="form-group long-height">
                <label for="message" class="form-label"> Wax notes</label>
                 <textarea id="message" name="wax_notes_0" placeholder="Write here notes" maxlength="500" class=" text-area-box form-input"></textarea>
               </div>
             </div>
           </div>
			 
		  </div> 
			 
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

		 <input type="hidden" name="model_count" id="model_count" value="0">
		 
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="main-data-form">
			 
			 <div class="model">
			 
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
                      <input type="radio" class="option-input radio" value="yes" name="3d_model_in_stock_0" id="3d_model_in_stock_yes_0" onChange="radio('models_0',this);" checked />
                      Yes
                    </label>
                  </div>
                </div>
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label">
                      <input type="radio" class="option-input radio" value="no" name="3d_model_in_stock_0" id="3d_model_in_stock_no_0" onChange="radio('models_0',this);" />
                      No
                    </label>
                  </div>
                </div>
              </div>
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column models_0">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Models in Stock :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Models in Stock" onKeyPress="javascript:return isNumber(event)" class="form-input" name="models_in_stock_0">
                 </div>
               </div>
             </div>
           </div>


           <div class="row models_0">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Model ID :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Model ID" class="form-input" name="model_id_0">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Model Location :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Model Location" maxlength="200" class="form-input" name="model_location_0">
                 </div>
               </div>
             </div>
           </div>

           <div class="row models_0">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Model Pre-set Price :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" placeholder="Model Pre-set Price" onKeyPress="javascript:return isNumber(event)" class="form-input" id="model_pre_set_price_0" name="model_pre_set_price_0">
                 </div>
               </div>
             </div>
           </div>
			 

           <div class="row mt-3 models_0">
             <div class="col-md-4 custom-column">
              <label for="mould-notes" class="form-label">Model photo</label><br>
                <div class="file-field form-group">
                  <div class="z-depth-1-half mb-2 image_box">
					<label for="model_photo_photoupload_0">  
                    <img src="assets/img/filel-uploader.svg"
                      alt="example placeholder" id="model_photo_image_upload_0" class="image_upload_preview">
					</label>	
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="">
                      <p class="file-type">JPG or PNG, Smaller than 10MB</p>
                      <div class="input-file-container">  
                        <input name="model_photo_0" type="file" id="model_photo_photoupload_0" class='file-upload__input rf_0 multiplefilesfilter image_upload' accept="image/*" onchange="document.getElementById('model_photo_image_upload_0').src = window.URL.createObjectURL(this.files[0])">
                        <label for="model_photo_photoupload_0"><strong>Select a file...</strong> Select a file...</label>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
             <div class="col-md-8 custom-column">
               <div class="form-group long-height">
                <label for="message" class="form-label"> Model notes</label>
                 <textarea id="message" placeholder="Write here notes" name="model_notes_0" maxlength="500" class=" text-area-box form-input"></textarea>
               </div>
             </div>
           </div>
				 
			<div class="row">
             <div class="col">
               <div class="add-mould-column-box" onClick="add_new_model();">
                 <span class="add-plus">&plus;</span>
                 Add New Model
               </div>
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
			   $sqldepart="SELECT * FROM department_list ORDER BY department_order ASC";
	        $resultdepart = mysqli_query($con, $sqldepart);  
           while($row = mysqli_fetch_assoc($resultdepart))
		   {
			   $d=$d+1;
			   ?>
			  <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" onChange="checkbox('<?php echo $row['department_name'];?>',this);" name="department_<?php echo $row['id'];?>" id="department_<?php echo $row['department_order'];?>" <?php if($row['department_name']=='Holding in Area'){ echo 'checked'; } ?> value="yes">
                <label class="custom-control-label" for="department_<?php echo $row['department_order'];?>"><?php echo $row['department_order'];?>. <?php echo $row['department_name'];?></label>
				  
				  <div class="customer-details-box-single list-dep-area">
                 <div class="left-label">
                   <label class="form-label">Price :</label>
                 </div>
                 <div class="input-undi">
                   <input id="department_<?php echo $row['department_order'];?>_price" type="text" onKeyPress="javascript:return isNumber(event)" placeholder="" class="form-input" name="department_<?php echo $row['id'];?>_price" value="<?php echo $row['price'];?>">
                 </div>
               </div>
				  <input type="hidden" id="department_name_<?php echo $row['id'];?>" value="<?php echo $row['department_name'];?>">
				  
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


   <div class="customer-data-inner data-inner-single-item-box mt-4 Workshop" style="display: none;"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Select The Workshop Service</h3>
         </div>
         <div class="main-data-form">
           <div class="row mb-5">
             

              <div class="col-md-4">
                <div class="checkbox-inner">
                  <div class="single-checkbox-item">
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="cleaning" value="yes" class="custom-control-input" id="cleaning">
                    <label class="custom-control-label" for="cleaning">Cleaning</label>
						
						 <div class="customer-details-box-single list-dep-area">
                 <div class="left-label">
                   <label class="form-label">Price :</label>
                 </div>
                 <div class="input-undi">
                   <input id="cleaning_price" type="text" name="cleaning_price" onKeyPress="javascript:return isNumber(event)" placeholder="" class="form-input" value="">
                 </div>
               </div>
						
                  </div>
                  </div>


                  <div class="single-checkbox-item">
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="polishing" value="yes" class="custom-control-input" id="polishing">
                    <label class="custom-control-label" for="polishing">Polishing</label>
                  </div>
                  <div class="left-margin-check-container">
                      <div class="single-left-check">
                        <label>
                        <input type="checkbox" name="sandblasting" value="yes" class="option-input checkbox" />
                        Sandblasting
                      </label>
                      </div>

                      <div class="single-left-check">
                        <label>
                        <input type="checkbox" name="matt_finish" value="yes" class="option-input checkbox" />
                        Matt Finish
                      </label>
                      </div>

                      <div class="single-left-check">
                        <label>
                        <input type="checkbox" name="high_polish" value="yes" class="option-input checkbox" />
                        High Polish
                      </label>
                      </div>

                      <div class="single-left-check">
                        <label>
                        <input type="checkbox" name="fine_polish" value="yes" class="option-input checkbox" />
                        Fine Polish
                      </label>
                      </div>

                      <div class="single-left-check">
                        <label>
                        <input type="checkbox" name="pin_barrel" value="yes" class="option-input checkbox" />
                        Pin Barrel
                      </label>
						  
						   <div class="customer-details-box-single list-dep-area">
                 <div class="left-label">
                   <label class="form-label">Price :</label>
                 </div>
                 <div class="input-undi">
                   <input id="polishing_price" type="text" name="polishing_price" onKeyPress="javascript:return isNumber(event)" placeholder="" class="form-input" value="">
                 </div>
               </div>
						  
                      </div>
                  </div>
                  </div>

                  <div class="single-checkbox-item">
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="assembly" value="yes" class="custom-control-input" id="assembly">
                    <label class="custom-control-label" for="assembly">Assembly</label>
						
						 <div class="customer-details-box-single list-dep-area">
                 <div class="left-label">
                   <label class="form-label">Price :</label>
                 </div>
                 <div class="input-undi">
                   <input id="assembly_price" type="text" name="assembly_price" onKeyPress="javascript:return isNumber(event)" placeholder="" class="form-input" value="">
                 </div>
               </div>
						
                  </div>
                  </div>
                </div>
              </div>

              <div class="col-md-8">
                <div class="right-checkbox-area">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="plating" value="yes" class="custom-control-input" id="plating">
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
                         <option value="">Plating Type</option>
                         <option value="Hard plating">Hard plating</option>
                         <option value="Soft Plating">Soft Plating</option>
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
                         <option value="">Plating Thickness</option>
                         <option value="1 microns">1 microns</option>
                         <option value="2 microns">2 microns</option>
                         <option value="3 microns">3 microns</option>
						 <option value="4 microns">4 microns</option>
                         <option value="5 microns">5 microns</option>
                         <option value="6 microns">6 microns</option>
						 <option value="7 microns">7 microns</option>
                         <option value="8 microns">8 microns</option>
                         <option value="9 microns">9 microns</option>
						 <option value="10 microns">10 microns</option>
                         
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
                         <option value="">Plating Colours</option>
                         <option value="14Kt Gold">14Kt Gold</option>
                         <option value="18kt yellow Gold">18kt yellow Gold</option>
                         <option value="22ct yellow gold">22ct yellow gold</option>
						 <option value="18kt white gold">18kt white gold</option>
                         <option value="22ct white gold">22ct white gold</option>  
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
                   <input id="plating_price" type="text" name="plating_price" onKeyPress="javascript:return isNumber(event)" placeholder="" class="form-input" value="">
                 </div>
               </div>

					
					
              </div>
         </div>
			 </div>

         <div class="row">
           <div class="col-md-12 custom-column">
               <div class="form-group long-height">
                <label for="message" class="form-label"> Assembly Notes</label>
                 <textarea id="message" name="assembly_notes" maxlength="500" placeholder="Write here Assembly Notes" class=" text-area-box form-input"></textarea>
               </div>
             </div>
         </div>
			</div> 
       </div><!--Start Customer data single-box-->
		 

     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->


   <div class="customer-data-inner data-inner-single-item-box Outsource-bottom mt-4 Outsource" style="display: none;"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Outsource Options</h3>
         </div>
         <div class="main-data-form">
           <div class="row">
              <div class="col-md-6">
                <div class="right-checkbox-area single-checkbox-right">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="outsource_plating" value="yes" class="custom-control-input" id="outsource_plating">
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
                         <option value="Select option">Select Plating Company</option>
                         <option value="Select option">Select option</option>
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
                    <input type="checkbox" name="hallmark" value="yes" class="custom-control-input" id="defaultUnchecked25">
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
                         <option value="Select option">Select Company</option>
                         <option value="Select option">Select option</option>
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
                    <input type="checkbox" name="outsource_setting" value="yes" class="custom-control-input" id="defaultUnchecked18">
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
                         <option value="Select option">Choose Company</option>
                         <option value="Select option">Select option</option>
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
                    <input type="checkbox" name="outsource_engraving" value="yes" class="custom-control-input" id="defaultUnchecked20">
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
                         <option value="Select option">Choose Company</option>
                         <option value="Select option">Select option</option>
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
                 <input id="mould-notes" name="hallmark_notes" type="text" maxlength="500" placeholder="Write here Hallmark Notes" class="form-input">
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
                   <input name="total_materials_price" id="total_materials_price" onKeyPress="javascript:return isNumber(event)" type="text" class="form-input" value="">
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
                   <input name="total_consultation_price" id="total_consultaion_price" onKeyPress="javascript:return isNumber(event)" type="text" class="form-input" value="">
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
                   <input name="total_delivery_charge" id="total_delivery_charge" onKeyPress="javascript:return isNumber(event)" type="text" class="form-input none-bg-border" value="" disabled="">
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
                   <input name="total_discounts_price" id="total_discounts_price" onKeyPress="javascript:return isNumber(event)" type="text"  class="form-input none-bg-border" value="" disabled="">
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
                 <textarea id="message" name="special_instructions" maxlength="500" placeholder="Write here special instructions Notes" class=" text-area-box form-input"></textarea>
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
		   <button type="submit" name='submit' value="create_order" class="submit-btn1 btns btn-data-table">Save</button>
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
	



