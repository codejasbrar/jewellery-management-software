<?php 
include_once('header.php'); 

include_once('customer.php');
?>

<section class="create-customer-main-area" style="background-color: #FCFCFD">
 <form method="post" action="">
   <div class="container">

   <div class="customer-data-inner data-inner-single-item-box"> <!--Start data -inner single box-->
     <div class="title-customer-data">
       <h1>Update Customer</h1>
     </div>
     <div class="customer-data-main">
		 
		 
		 
		   
		 <div class="form_data">
			 
			 
			 
			 <?php
	   if($customer_type=='retail_customer'){
	?>
		       
      <div class="customer-data-signle-box retail_customer customer_div"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text">Retail customer</h3>
         </div>
         <div class="main-data-form">
           <div class="row">
			   
			   
			   <div class="col-md-4 custom-column">
               <div class="customer-details-box-single customer-id-input">
                 <div class="left-label">
                   <label class="form-label">Customer ID :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $main_customer_id;?>" disabled="">
                 </div>
               </div>
             </div>
         
             <div class="col-md-4">
               <div class="form-group select-icon">
                 <label for="cre-t" class="form-label">Customer Status</label><br>
                 <select name="" id="cre-t" class="form-input">
                   <option value="Select option">Select option</option>
                   <option value="Select option">Select option</option>
                   <option value="Select option">Select option</option>
                   <option value="Select option">Select option</option>
                 </select>
                 <span class="select-icon-absolute">
                   <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                 </span>
               </div>
             </div>
			   
			   
			   
             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="name" class="form-label">Full Name</label><br>
                  <input id="name" type="text" placeholder="Write your name" onkeypress="return lettersOnly(event)" maxlength="50" required name="full_name" value="<?php echo $row['full_name'];?>" class="form-input">
               </div>
             </div>
			   
			   
			  </div>
         
           <div class="row">  
			   
			   

             <div class="col-md-4 custom-column">
               <div class="form-group tel-option">
                 <label for="tel" class="form-label">Telephone number</label><br>
                  <input id="tel" type="text" placeholder="Your telephone number" onKeyPress="javascript:return isNumber(event)" required name="telephone_number" value="<?php echo $row['telephone_number'];?>" maxlength="12" class="form-input">
                  <select name="" id="">
                    <option value="(0113)">(0113)</option>
                  </select>
               </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="form-group tel-option">
                 <label for="mob" class="form-label">Mobile number</label><br>
                  <input id="mob" type="text" placeholder="Your mobile number" onKeyPress="javascript:return isNumber(event)" required name="mobile_number" value="<?php echo $row['mobile_number'];?>" maxlength="12" class="form-input">
                  <select name="" id="">
                    <option value="+44">+44</option>
                  </select>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
               <div class="form-group">
                 <label for="email" class="form-label">Email address</label><br>
                  <input id="email" type="email" placeholder="Ex. xyz12@gmail.com" maxlength="50" required name="email_address" value="<?php echo $row['email_address'];?>" class="form-input">
               </div>
             </div>
             <div class="col-md-8">
               <div class="form-group">
                 <label for="del" class="form-label">Delivery address</label><br>
                  <input id="del" type="text" placeholder="Write here delivery address" maxlength="150" required name="delivery_address" value="<?php echo $row['delivery_address'];?>" class="form-input">
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col">
               <div class="form-group">
                <label for="message">Customer notes</label>
                 <textarea id="message" placeholder="Write here notes" name="customer_notes" maxlength="500" class=" text-area-box form-input"><?php echo $row['customer_notes'];?></textarea>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
              <div class="form-title-radio">
                  <h3>Credit facility</h3>
                </div>
              <div class="yes-no-box">
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label forml">
                      <input type="radio" class="option-input radio" name="credit_facilty" <?php if($row['credit_facilty']=='Yes'){ echo 'checked'; } ?> value="Yes"/>
                      Yes
                    </label>
                  </div>
                </div>
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label">
                      <input type="radio" class="option-input radio" name="credit_facilty" <?php if($row['credit_facilty']=='No'){ echo 'checked'; } ?> value="No"/>
                      No
                    </label>
                  </div>
                </div>
              </div>
             </div>

             <div class="col-md-4">
               <div class="form-group creadit-group-icon">
                <label for="" class="form-label">Credit facility amount</label>
                 <div class="input-group">

                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><img src="assets/img/pound.png" alt=""></span>
                  </div>
                  <input type="text" class="form-control custom-input form-input" name="credit_facility_amount" placeholder="Amount here" aria-label="Username" maxlength="12" onKeyPress="javascript:return isNumber(event)" value="<?php echo $row['credit_facility_amount'];?>"  aria-describedby="basic-addon1">
                </div>
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group select-icon">
                 <label for="cre-t" class="form-label">Credit terms</label><br>
                 <select name="credit_terms" id="cre-t" class="form-input">
                   <option value="" <?php if($row['credit_terms']==''){ echo 'Selected'; } ?>>Select option</option>
                   <option value="7 day" <?php if($row['credit_terms']=='7 day'){ echo 'Selected'; } ?>>7 day</option>
                   <option value="14 day" <?php if($row['credit_terms']=='14 day'){ echo 'Selected'; } ?>>14 day</option>
                   <option value="30 day" <?php if($row['credit_terms']=='30 day'){ echo 'Selected'; } ?>>30 day</option>
				   <option value="60 day" <?php if($row['credit_terms']=='60 day'){ echo 'Selected'; } ?>>60 day</option>
				   <option value="90 day" <?php if($row['credit_terms']=='90 day'){ echo 'Selected'; } ?>>90 day</option>
				   <option value="Other" <?php if($row['credit_terms']=='Other'){ echo 'Selected'; } ?>>Other</option>	
                 </select>
                 <span class="select-icon-absolute">
                   <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                 </span>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col">
               <div class="form-group">
                <label for="message" class="form-label">Credit notes</label>
                 <textarea id="message" placeholder="Write here notes" maxlength="500" name="credit_notes" class=" text-area-box form-input"><?php echo $row['credit_notes'];?></textarea>
               </div>
             </div>
           </div>
         </div>
       </div><!--Start Customer data single-box-->
		 </div>
		 
		 <?php
	   }
	  ?>
		 
		 <?php
	   if($customer_type=='trade_buisness_customer'){
	    ?> 

          
 <div class="customer-data-signle-box trade_buisness_customer customer_div"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Trade / Business customer:</h3>
         </div>
         <div class="main-data-form">
           <div class="row">
			   
			    <div class="col-md-4 custom-column">
               <div class="customer-details-box-single customer-id-input">
                 <div class="left-label">
                   <label class="form-label">Customer ID :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $main_customer_id;?>" disabled="">
                 </div>
               </div>
             </div>

             <div class="col-md-4">
               <div class="form-group select-icon">
                 <label for="cre-t" class="form-label">Customer Status</label><br>
                 <select name="" id="cre-t" class="form-input">
                   <option value="Select option" <?php if($row['credit_terms']=='Select option'){ echo 'Selected'; } ?>>Select option</option>
                   <option value="Select option">Select option</option>
                   <option value="Select option">Select option</option>
                   <option value="Select option">Select option</option>
                 </select>
                 <span class="select-icon-absolute">
                   <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                 </span>
               </div>
             </div>
			   
             <div class="col-md-4">
               <div class="form-group">
                 <label for="comp" class="form-label">Company Name</label><br>
                  <input id="comp" type="text" placeholder="Write Company Name" maxlength="50" required name="company_name" class="form-input" value="<?php echo $row['company_name'];?>">
               </div>
             </div>
			   
			   </div>
         
         
           <div class="row">

             <div class="col-md-4">
               <div class="form-group">
                 <label for="comp-p" class="form-label">Company Reg number</label><br>
                  <input id="comp-p" type="text" placeholder="Write Company reg number" maxlength="12" required name="company_reg_number" value="<?php echo $row['company_reg_number'];?>" class="form-input">
               </div>
             </div>

             <div class="col-md-4">
               <div class="form-group">
                 <label for="vat" class="form-label">VAT #</label><br>
                  <input id="vat" type="text" placeholder="Ex. #124458BH" name="vat" maxlength="12" value="<?php echo $row['vat'];?>" required class="form-input">
               </div>
             </div>
           </div>
			 
          <div class="row">
             <div class="col">
               <div class="form-group">
                <label for="message" class="form-label">Company information</label>
                 <textarea id="message" placeholder="Write here Company information" maxlength="500" name="company_information" value="<?php echo $row['company_information'];?>" class=" text-area-box form-input"></textarea>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
               <div class="form-group">
                 <label for="p-c-name" class="form-label">Primary contact name</label><br>
                  <input id="p-c-name" type="text" placeholder="Write primary contact name" maxlength="50" required name="primary_contact_name" value="<?php echo $row['primary_contact_name'];?>" class="form-input">
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group">
                 <label for="p-email" class="form-label">Primary email address</label><br>
                  <input id="p-email" type="email" placeholder="Ex. xyz12@gmail.com" maxlength="50" required name="primary_email_address" value="<?php echo $row['primary_email_address'];?>" class="form-input">
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group">
                 <label for="c-w" class="form-label">Company website</label><br>
                  <input id="c-w" type="url" placeholder="Ex. www,xyzcompany.com" maxlength="50" name="company_website" class="form-input" value="<?php echo $row['company_website'];?>">
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-8 custom-column">
               <div class="form-group">
                 <label for="c-a" class="form-label">Company address</label><br>
                  <input id="c-a" type="text" placeholder="Write company address" maxlength="150" required name="company_address" value="<?php echo $row['company_address'];?>" class="form-input">
               </div>
             </div>
             <div class="col-md-4 custom-column">
               <div class="form-group tel-option">
                 <label for="mob" class="form-label">Contact number</label><br>
                  <input id="mob" type="text" placeholder="Your Contact number" maxlength="12" onKeyPress="javascript:return isNumber(event)" required name="contact_number" value="<?php echo $row['contact_number'];?>" class="form-input">
                  <select name="" id="">
                    <option value="+44">+44</option>
                  </select>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-8 custom-column">
               <div class="form-group">
                 <label for="d-a" class="form-label">Delivery address</label><br>
                  <input id="d-a" type="text" placeholder="Write here delivery address" maxlength="150" required name="delivery_address" value="<?php echo $row['delivery_address'];?>" class="form-input">
               </div>
             </div>
             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="mob" class="form-label">Company Billing Name <span class="text-gray">(if different)</span></label><br>
                  <input id="c-b-n" type="text" placeholder="Company Billing Name" maxlength="50" name="company_billing_name" value="<?php echo $row['company_billing_name'];?>" class="form-input">
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="a-p-c" class="form-label">Accounts Payable contact name</label><br>
                  <input id="a-p-c" type="text" placeholder="Write here delivery address" name="accounts_payable_contact_name" value="<?php echo $row['accounts_payable_contact_name'];?>" maxlength="50" class="form-input">
               </div>
             </div>
             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="a-e-a" class="form-label">Accounts email address</label><br>
                  <input id="a-e-a" type="email" placeholder="Ex. xyz12@gmail.com" maxlength="50" name="accounts_email_address" value="<?php echo $row['accounts_email_address'];?>" class="form-input">
               </div>

             </div>
             <div class="col-md-4 custom-column">
               <div class="form-group tel-option">
                 <label for="a-c-n" class="form-label">Accounts contact number</label><br>
                  <input id="a-c-n" type="text" placeholder="Accounts contact number" maxlength="12" onKeyPress="javascript:return isNumber(event)" name="accounts_contact_number" value="<?php echo $row['accounts_contact_number'];?>" class="form-input">
                  <select name="" id="">
                    <option value="+44">+44</option>
                  </select>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
              <div class="form-title-radio">
                  <h3>Credit facility</h3>
                </div>
              <div class="yes-no-box">
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label forml">
                      <input type="radio" class="option-input radio" name="credit_facilty" <?php if($row['credit_facilty']=='Yes'){ echo 'checked'; } ?> value="Yes"/>
                      Yes
                    </label>
                  </div>
                </div>
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label">
                      <input type="radio" class="option-input radio" name="credit_facilty" <?php if($row['credit_facilty']=='No'){ echo 'checked'; } ?> value="No"/>
                      No
                    </label>
                  </div>
                </div>
              </div>
             </div>

             <div class="col-md-4">
               <div class="form-group creadit-group-icon">
                <label for="" class="form-label">Credit facility amount</label>
                 <div class="input-group">

                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><img src="assets/img/pound.png" alt=""></span>
                  </div>
                  <input type="text" class="form-control custom-input form-input" maxlength="12" onKeyPress="javascript:return isNumber(event)" placeholder="Amount here" aria-label="Username" name="credit_facility_amount" value="<?php echo $row['credit_facility_amount'];?>" aria-describedby="basic-addon1">
                </div>
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group select-icon">
                 <label for="cre-t" class="form-label">Credit terms</label><br>
                 <select name="credit_terms" id="cre-t" class="form-input">
                   <option value="" <?php if($row['credit_terms']==''){ echo 'Selected'; } ?>>Select option</option>
                   <option value="7 day" <?php if($row['credit_terms']=='7 day'){ echo 'Selected'; } ?>>7 day</option>
                   <option value="14 day" <?php if($row['credit_terms']=='14 day'){ echo 'Selected'; } ?>>14 day</option>
                   <option value="30 day" <?php if($row['credit_terms']=='30 day'){ echo 'Selected'; } ?>>30 day</option>
				   <option value="60 day" <?php if($row['credit_terms']=='60 day'){ echo 'Selected'; } ?>>60 day</option>
				   <option value="90 day" <?php if($row['credit_terms']=='90 day'){ echo 'Selected'; } ?>>90 day</option>
				   <option value="Other" <?php if($row['credit_terms']=='Other'){ echo 'Selected'; } ?>>Other</option>
                 </select>
                 <span class="select-icon-absolute">
                   <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                 </span>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col">
               <div class="form-group">
                <label for="message" class="form-label"> notes</label>
                 <textarea id="message" placeholder="Write here notes" name="credit_notes" maxlength="500" class=" text-area-box form-input"><?php echo $row['credit_notes'];?></textarea>
               </div>
             </div>
           </div>
         </div>
       </div><!--Start Customer data single-box-->

		 
		 <?php
	   }
	  ?> 
		
		 
		<?php
	    if($customer_type=='student_customer'){
	   ?> 
		 
		 
 <div class="customer-data-signle-box student_customer customer_div"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Student</h3>
         </div>
         <div class="main-data-form">
           <div class="row">
			   
			   <div class="col-md-4 custom-column">
              <div class="customer-details-box-single customer-id-input">
                 <div class="left-label">
                   <label class="form-label">Customer ID :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text"  class="form-input none-bg-border" value="<?php echo $main_customer_id;?>" disabled="">
                 </div>
               </div>
             </div>
			
            
            <div class="col-md-4">
               <div class="form-group select-icon">
                 <label for="cre-t" class="form-label">Customer Status</label><br>
                 <select name="" id="cre-t" class="form-input">
                   <option value="Select option">Select option</option>
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
         
         
         
           <div class="row">  
			   
			   
             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="comp" class="form-label">Full Name</label><br>
                  <input id="comp" type="text" placeholder="Write your name" onkeypress="return lettersOnly(event)" maxlength="50" required name="full_name" value="<?php echo $row['full_name'];?>" class="form-input">
               </div>
             </div>

              <div class="col-md-4 custom-column">
               <div class="form-group tel-option">
                 <label for="tel" class="form-label">Telephone number</label><br>
                  <input id="tel" type="text" placeholder="Your telephone number" maxlength="12" onKeyPress="javascript:return isNumber(event)" value="<?php echo $row['telephone_number'];?>" required name="telephone_number" class="form-input">
                  <select name="" id="">
                    <option value="+44">(0113) </option>
                  </select>
               </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="email-3" class="form-label">Email address</label><br>
                  <input id="email-3" type="email" placeholder="Ex. xyz12@gmail.com" maxlength="50" required name="email_address" value="<?php echo $row['email_address'];?>" class="form-input">
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 custom-column">
               <div class="form-group creadit-group-icon">
                <label for="location" class="form-label">Delivery address</label>
                 <div class="input-group">

                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><img src="assets/img/map.svg" alt=""></span>
                  </div>
                  <input id="location" type="text" class="form-control custom-input form-input" maxlength="150" required name="delivery_address" value="<?php echo $row['delivery_address'];?>" placeholder="Write here delivery address" aria-describedby="basic-addon1">
                </div>
               </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="comp-p" class="form-label">College or university attended</label><br>
                  <input id="comp-p" type="text" placeholder="write here college name" maxlength="50" required name="college_or_university_attended" value="<?php echo $row['college_or_university_attended'];?>" class="form-input">
               </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="vat" class="form-label">Course</label><br>
                  <input id="vat" type="text" placeholder="write here college name" maxlength="50" value="<?php echo $row['course'];?>" required name="course" class="form-input">
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col">
               <div class="form-group">
                <label for="message" class="form-label"> Student notes</label>
                 <textarea id="message" placeholder="Write here student notes" maxlength="500" name="student_notes" class=" text-area-box form-input"><?php echo $row['student_notes'];?></textarea>
               </div>
             </div>
           </div>
         </div>
       </div><!--Start Customer data single-box-->

		 
		 
		  <?php
	   }
	  ?> 
		 
		 
     </div><!--End of customer data main-->

   </div>



   <!----End data -inner single box-->
   <div class="row my-5">
     <div class="col-md-6 offset-md-6 custom-column text-right">
      <div class="buttons-data-table">
        <a href="search_customer.php"  class="btns btn-data-table border-btn">Cancel</a>
        <button type="submit" name='submit' value="update_customer" class="submit-btn1 btns btn-data-table">Save</button>
      </div> 
     </div>
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
