<?php 
include_once('header.php'); 
include_once('customer.php');
?>
	   
<section class="create-customer-main-area" style="background-color: #FCFCFD">
 <form method="post" action="">
   <div class="container">
	   
	   <div class="single-box-title-data">
           <h3 class="cstomer-type-text"><strong>Customer Type : <?php echo $customer_type_text;?></strong> </h3>
         </div>

   <?php
	   if($customer_type=='retail_customer'){
	?>
	    <div class="customer-data-inner data-inner-single-item-box create-order-page"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text"> Retail Customer</h3>
         </div>
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
                   <label class="form-label">Customer Status:</label>
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
                   <input id="tel" type="text" placeholder="" class="form-input none-bg-border" value="<?php echo $row['credit_facilty'];?>" disabled="">
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
            
            
         </div>
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div>
	   
	<?php	   
	   }
	   ?>

   
	   <?php
	   if($customer_type=='trade_buisness_customer'){
	    ?>
	   
	    <div class="customer-data-inner data-inner-single-item-box create-order-page"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text">Trade/Business Customer</h3>
         </div>
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
                   <label class="form-label">Customer Status:</label>
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
            
            
         </div>
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div>
	   
	   
	   <?php
	   }
	   ?>
	   
       <?php
	    if($customer_type=='student_customer'){
	   ?>
	   
	    <div class="customer-data-inner data-inner-single-item-box create-order-page"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text">Student</h3>
         </div>
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
                   <label class="form-label">Customer Status:</label>
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

            
                        
            
             

            
            
            
         </div>
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div>
	   
	   <?php
		}
	   ?>
	   
	   
	    <div class="customer-data-inner data-inner-single-item-box mt-4"> <!--Start data -inner single box-->
     <!----End data -inner single box-->


   <div class="customer-data-inner data-inner-single-item-box Outsource-bottom mt-4"> <!--Start data -inner single box-->
     

 <!----End data -inner single box-->

   <!--div class="row my-5">
     <div class="col text-center custom-column">
      <div class="buttons-data-table many-btn">
        <a href="update-order.html"  class="btns btn-data-table">Update Order</a>
        <a href="#"  class="btns btn-data-table">Cancel Order</a>
        <a href="archived-order.html"  class="btns btn-data-table">Archive/ Unarchive</a>
        <a href="duplicate-order.html"  class="btns btn-data-table">Duplicate Order</a>
        <a href="print-order-details.html"  class="btns btn-data-table">Print Order Details</a>
        <a href="print-order-label.html"  class="btns btn-data-table">Print Order Label</a>
      </div> 
     </div>
   </div-->
 </div>
 </div>
 </form>
</section>
</main>
	   
	   
	   

<script>

	function change_cutomer_type(v){
		//alert(v);
		$('.customer_div').hide();
		//$('.'+v).show();
		//$('.'+v).fadeIn('slow');
		//$('.'+v).fadeIn('10000');
		
		$('.checked-box').removeClass('diff');
		$('.'+v+'_checkbox').addClass('diff');
		
		var d=$('.'+v).html();
		$('.form_data').html(d)
	}

</script>

<?php include_once('footer.php'); ?>
