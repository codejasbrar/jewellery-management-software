<?php 
include_once('header.php');

include_once('customer.php');
?>

<section class="create-customer-main-area" style="background-color: #FCFCFD">
 <form method="post" action="">
   <div class="container">

   <div class="customer-data-inner data-inner-single-item-box"> <!--Start data -inner single box-->
     <div class="title-customer-data">
       <h1>Create Customer</h1>
     </div>
     <div class="customer-data-main"><!--Start of customer data main-->

       <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3>Select the Customer Types</h3>
         </div>
         <div class="main-data-form">
           <div class="row">
             <div class="col-md-4">
               <div class="form-group checked-box retail_customer_checkbox diff">
                 <label class="radion-label">
                  <input type="radio" class="option-input radio" onChange="change_cutomer_type(this.value);" name="customer_type" value="retail_customer" checked="" />
                  Retail Customer
                </label>
               </div>
             </div>

             <div class="col-md-4">
               <div class="form-group checked-box trade_buisness_customer_checkbox">
                 <label class="radion-label">
                  <input type="radio" class="option-input radio" name="customer_type" onChange="change_cutomer_type(this.value);" value="trade_buisness_customer"/>
                  Trade Customer
                </label>
               </div>
             </div>

             <div class="col-md-4">
               <div class="form-group checked-box student_customer_checkbox">
                 <label class="radion-label">
                  <input type="radio" class="option-input radio" name="customer_type" onChange="change_cutomer_type(this.value);" value="student_customer" />
                  Student
                </label>
               </div>
             </div>
           </div>
         </div>
       </div><!--Start Customer data single-box-->

     
		 <div class="form_data">
		       
      <div class="customer-data-signle-box retail_customer customer_div"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text">Retail customer</h3>
         </div>
         <div class="main-data-form">
           <div class="row">
             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="name" class="form-label">Full Name * </label><br>
                  <input id="name" type="text" placeholder="Write your name" onkeypress="return lettersOnly(event)" maxlength="50" required name="full_name" class="form-input" oninvalid="this.setCustomValidity('Please Enter Full Name')"
 oninput="setCustomValidity('')">
               </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="form-group tel-option">
                 <label for="tel" class="form-label">Telephone number * </label><br>
                  <input id="tel" type="text" placeholder="Your telephone number" onKeyPress="javascript:return isNumber(event)" required name="telephone_number" maxlength="7" class="form-input" oninvalid="this.setCustomValidity('Please Enter Telephone number')"
 oninput="setCustomValidity('')">
                  <select name="" id="">
                    <option value="(0113)">(0113)</option>
                  </select>
               </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="form-group tel-option">
                 <label for="mob" class="form-label">Mobile number * </label><br>
                  <input id="mob" type="text" placeholder="Your mobile number" onKeyPress="javascript:return isNumber(event)" required name="mobile_number" maxlength="10" class="form-input" oninvalid="this.setCustomValidity('Please Enter Mobile number')" oninput="setCustomValidity('')">
                  <select name="" id="">
                    <option value="+44">+44</option>
                  </select>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
               <div class="form-group">
                 <label for="email" class="form-label">Email address * </label><br>
                  <input id="email" type="email" placeholder="Ex. xyz12@gmail.com" maxlength="50" required name="email_address" class="form-input" oninvalid="this.setCustomValidity('Please Enter Email address')" oninput="setCustomValidity('')">
               </div>
             </div>
             <div class="col-md-8">
               <div class="form-group">
                 <label for="del" class="form-label">Delivery address * </label><br>
                  <input id="del" type="text" placeholder="Write here delivery address" maxlength="150" required name="delivery_address" class="form-input" oninvalid="this.setCustomValidity('Please Enter Delivery address')" oninput="setCustomValidity('')">
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col">
               <div class="form-group">
                <label for="message">Customer notes</label>
                 <textarea id="message" placeholder="Write here notes" name="customer_notes" maxlength="500" class=" text-area-box form-input"></textarea>
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
                      <input type="radio" class="option-input radio" name="credit_facilty" value="Yes"/>
                      Yes
                    </label>
                  </div>
                </div>
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label">
                      <input type="radio" class="option-input radio" name="credit_facilty" checked value="No"/>
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
                  <input type="text" class="form-control custom-input form-input" name="credit_facility_amount" placeholder="Amount here" aria-label="Username" maxlength="12" onKeyPress="javascript:return isNumber(event)"  aria-describedby="basic-addon1">
                </div>
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group select-icon">
                 <label for="cre-t" class="form-label">Credit terms</label><br>
                 <select name="credit_terms" id="cre-t" class="form-input">
                   <option value="">Select option</option>
                   <option value="7 day">7 day</option>
                   <option value="14 day">14 day</option>
                   <option value="30 day">30 day</option>
				   <option value="60 day">60 day</option>
				   <option value="90 day">90 day</option>
				   <option value="Other">Other</option>	
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
                 <textarea id="message" placeholder="Write here notes" maxlength="500" name="credit_notes" class=" text-area-box form-input"></textarea>
               </div>
             </div>
           </div>
         </div>
       </div><!--Start Customer data single-box-->
		 </div>
		 
		 


     </div><!--End of customer data main-->

   </div>

    


   <!----End data -inner single box-->
   <div class="row my-5">
     <div class="col-md-6 offset-md-6 custom-column text-right">
      <div class="buttons-data-table">
        <a href="search_customer.php"  class="btns btn-data-table border-btn">Cancel</a>
        <button type="submit" name='submit' value="create_customer" class="submit-btn1 btns btn-data-table">Save</button>
      </div> 
     </div>
   </div>
 </div>
 </form>
</section>
</main>








      <div class="customer-data-signle-box retail_customer customer_div" style="display: none;"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text">Retail customer</h3>
         </div>
         <div class="main-data-form">
           <div class="row">
             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="name" class="form-label">Full Name *</label><br>
                  <input id="name" type="text" placeholder="Write your name" name="full_name" onkeypress="return lettersOnly(event)" maxlength="50" required class="form-input" oninvalid="this.setCustomValidity('Please Enter Full Name')" oninput="setCustomValidity('')">
               </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="form-group tel-option">
                 <label for="tel" class="form-label">Telephone number *</label><br>
                  <input id="tel" type="text" placeholder="Your telephone number" maxlength="7" required onKeyPress="javascript:return isNumber(event)" name="telephone_number" class="form-input" oninvalid="this.setCustomValidity('Please Enter Telephone number')" oninput="setCustomValidity('')">
                  <select name="" id="">
                    <option value="(0113)">(0113)</option>
                  </select>
               </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="form-group tel-option">
                 <label for="mob" class="form-label">Mobile number *</label><br>
                  <input id="mob" type="text" placeholder="Your mobile number" maxlength="10" required onKeyPress="javascript:return isNumber(event)" name="mobile_number" class="form-input" oninvalid="this.setCustomValidity('Please Enter Mobile number')" oninput="setCustomValidity('')">
                  <select name="" id="">
                    <option value="+44">+44</option>
                  </select>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
               <div class="form-group">
                 <label for="email" class="form-label">Email address *</label><br>
                  <input id="email" type="email" placeholder="Ex. xyz12@gmail.com" maxlength="50" required name="email_address" class="form-input" oninvalid="this.setCustomValidity('Please Enter Email address')" oninput="setCustomValidity('')">
               </div>
             </div>
             <div class="col-md-8">
               <div class="form-group">
                 <label for="del" class="form-label">Delivery address *</label><br>
                  <input id="del" type="text" placeholder="Write here delivery address" maxlength="150" required name="delivery_address" class="form-input" oninvalid="this.setCustomValidity('Please Enter Delivery address')" oninput="setCustomValidity('')">
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col">
               <div class="form-group">
                <label for="message">Customer notes</label>
                 <textarea id="message" placeholder="Write here notes" name="customer_notes" maxlength="500" class=" text-area-box form-input"></textarea>
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
                      <input type="radio" class="option-input radio" name="credit_facilty" value="Yes"/>
                      Yes
                    </label>
                  </div>
                </div>
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label">
                      <input type="radio" class="option-input radio" name="credit_facilty" checked value="No"/>
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
                  <input type="text" class="form-control custom-input form-input" name="credit_facility_amount" placeholder="Amount here" aria-label="Username" maxlength="12" onKeyPress="javascript:return isNumber(event)" aria-describedby="basic-addon1">
                </div>
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group select-icon">
                 <label for="cre-t" class="form-label">Credit terms</label><br>
                 <select name="credit_terms" id="cre-t" class="form-input">
                   <option value="">Select option</option>
                   <option value="7 day">7 day</option>
                   <option value="14 day">14 day</option>
                   <option value="30 day">30 day</option>
				   <option value="60 day">60 day</option>
				   <option value="90 day">90 day</option>
				   <option value="Other">Other</option>	 
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
                 <textarea id="message" placeholder="Write here notes" name="credit_notes" maxlength="500" class=" text-area-box form-input"></textarea>
               </div>
             </div>
           </div>
         </div>
       </div><!--Start Customer data single-box-->






 <div class="customer-data-signle-box trade_buisness_customer customer_div" style="display: none;"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Trade / Business customer:</h3>
         </div>
         <div class="main-data-form">
           <div class="row">
             <div class="col-md-4">
               <div class="form-group">
                 <label for="comp" class="form-label">Company Name *</label><br>
                  <input id="comp" type="text" placeholder="Write Company Name" maxlength="50" required name="company_name" class="form-input" oninvalid="this.setCustomValidity('Please Enter Company Name')" oninput="setCustomValidity('')">
               </div>
             </div>

             <div class="col-md-4">
               <div class="form-group">
                 <label for="comp-p" class="form-label">Company Reg number *</label><br>
                  <input id="comp-p" type="text" placeholder="Write Company reg number" maxlength="12" required name="company_reg_number" class="form-input" oninvalid="this.setCustomValidity('Please Enter Company Reg number')" oninput="setCustomValidity('')">
               </div>
             </div>

             <div class="col-md-4">
               <div class="form-group">
                 <label for="vat" class="form-label">VAT # *</label><br>
                  <input id="vat" type="text" placeholder="Ex. #124458BH" name="vat" maxlength="12" required class="form-input" oninvalid="this.setCustomValidity('Please Enter VAT')" oninput="setCustomValidity('')">
               </div>
             </div>
           </div>
          <div class="row">
             <div class="col">
               <div class="form-group">
                <label for="message" class="form-label">Company information</label>
                 <textarea id="message" placeholder="Write here Company information" maxlength="500" name="company_information" class=" text-area-box form-input"></textarea>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
               <div class="form-group">
                 <label for="p-c-name" class="form-label">Primary contact name *</label><br>
                  <input id="p-c-name" type="text" placeholder="Write primary contact name" maxlength="50" required name="primary_contact_name" class="form-input" oninvalid="this.setCustomValidity('Please Enter Primary contact name')" oninput="setCustomValidity('')">
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group">
                 <label for="p-email" class="form-label">Primary email address *</label><br>
                  <input id="p-email" type="email" placeholder="Ex. xyz12@gmail.com" maxlength="50" required name="primary_email_address" class="form-input" oninvalid="this.setCustomValidity('Please Enter Primary email address')" oninput="setCustomValidity('')">
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group">
                 <label for="c-w" class="form-label">Company website</label><br>
                  <input id="c-w" type="url" placeholder="Ex. www,xyzcompany.com" maxlength="50" name="company_website" class="form-input">
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-8 custom-column">
               <div class="form-group">
                 <label for="c-a" class="form-label">Company address *</label><br>
                  <input id="c-a" type="text" placeholder="Write company address" maxlength="150" required name="company_address" class="form-input" oninvalid="this.setCustomValidity('Please Enter Company address')" oninput="setCustomValidity('')">
               </div>
             </div>
             <div class="col-md-4 custom-column">
               <div class="form-group tel-option">
                 <label for="mob" class="form-label">Contact number *</label><br>
                  <input id="mob" type="text" placeholder="Your Contact number" maxlength="10" onKeyPress="javascript:return isNumber(event)" required name="contact_number" class="form-input" oninvalid="this.setCustomValidity('Please Enter Contact number')" oninput="setCustomValidity('')">
                  <select name="" id="">
                    <option value="+44">+44</option>
                  </select>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-8 custom-column">
               <div class="form-group">
                 <label for="d-a" class="form-label">Delivery address *</label><br>
                  <input id="d-a" type="text" placeholder="Write here delivery address" maxlength="150" required name="delivery_address" class="form-input" oninvalid="this.setCustomValidity('Please Enter Delivery address')" oninput="setCustomValidity('')">
               </div>
             </div>
             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="mob" class="form-label">Company Billing Name <span class="text-gray">(if different)</span></label><br>
                  <input id="c-b-n" type="text" placeholder="Company Billing Name" maxlength="50" name="company_billing_name" class="form-input">
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="a-p-c" class="form-label">Accounts Payable contact name</label><br>
                  <input id="a-p-c" type="text" placeholder="Write here delivery address" name="accounts_payable_contact_name" maxlength="50" class="form-input">
               </div>
             </div>
             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="a-e-a" class="form-label">Accounts email address</label><br>
                  <input id="a-e-a" type="email" placeholder="Ex. xyz12@gmail.com" maxlength="50" name="accounts_email_address" class="form-input">
               </div>

             </div>
             <div class="col-md-4 custom-column">
               <div class="form-group tel-option">
                 <label for="a-c-n" class="form-label">Accounts contact number</label><br>
                  <input id="a-c-n" type="text" placeholder="Accounts contact number" maxlength="10" onKeyPress="javascript:return isNumber(event)" name="accounts_contact_number" class="form-input">
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
                      <input type="radio" class="option-input radio" name="credit_facilty" value="Yes"/>
                      Yes
                    </label>
                  </div>
                </div>
                <div class="single-yesno">
                   <div class="form-group">
                     <label class="radion-label">
                      <input type="radio" class="option-input radio" name="credit_facilty" checked value="No"/>
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
                  <input type="text" class="form-control custom-input form-input" maxlength="12" onKeyPress="javascript:return isNumber(event)" placeholder="Amount here" aria-label="Username" name="credit_facility_amount" aria-describedby="basic-addon1">
                </div>
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group select-icon">
                 <label for="cre-t" class="form-label">Credit terms</label><br>
                 <select name="credit_terms" id="cre-t" class="form-input">
                   <option value="">Select option</option>
                   <option value="7 day">7 day</option>
                   <option value="14 day">14 day</option>
                   <option value="30 day">30 day</option>
				   <option value="60 day">60 day</option>
				   <option value="90 day">90 day</option>
				   <option value="Other">Other</option>	
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
                 <textarea id="message" placeholder="Write here notes" name="credit_notes" maxlength="500" class=" text-area-box form-input"></textarea>
               </div>
             </div>
           </div>
         </div>
       </div><!--Start Customer data single-box-->








 <div class="customer-data-signle-box student_customer customer_div" style="display: none;"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Student</h3>
         </div>
         <div class="main-data-form">
           <div class="row">
             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="comp" class="form-label">Full Name *</label><br>
                  <input id="comp" type="text" placeholder="Write your name" onkeypress="return lettersOnly(event)" maxlength="50" required name="full_name" class="form-input" oninvalid="this.setCustomValidity('Please Enter Full Name')" oninput="setCustomValidity('')">
               </div>
             </div>

              <div class="col-md-4 custom-column">
               <div class="form-group tel-option">
                 <label for="tel" class="form-label">Telephone number *</label><br>
                  <input id="tel" type="text" placeholder="Your telephone number" maxlength="7" onKeyPress="javascript:return isNumber(event)" required name="telephone_number" class="form-input" oninvalid="this.setCustomValidity('Please Enter Telephone number')" oninput="setCustomValidity('')">
                  <select name="" id="">
                    <option value="+44">(0113) </option>
                  </select>
               </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="email-3" class="form-label">Email address *</label><br>
                  <input id="email-3" type="email" placeholder="Ex. xyz12@gmail.com" maxlength="50" required name="email_address" class="form-input" oninvalid="this.setCustomValidity('Please Enter Email address')" oninput="setCustomValidity('')">
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 custom-column">
               <div class="form-group creadit-group-icon">
                <label for="location" class="form-label">Delivery address *</label>
                 <div class="input-group">

                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><img src="assets/img/map.svg" alt=""></span>
                  </div>
                  <input id="location" type="text" class="form-control custom-input form-input" maxlength="150" required name="delivery_address" placeholder="Write here delivery address" aria-describedby="basic-addon1" oninvalid="this.setCustomValidity('Please Enter Delivery address')" oninput="setCustomValidity('')">
                </div>
               </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="comp-p" class="form-label">College or university attended *</label><br>
                  <input id="comp-p" type="text" placeholder="write here college name" maxlength="50" required name="college_or_university_attended" class="form-input" oninvalid="this.setCustomValidity('Please Enter College or university attended')" oninput="setCustomValidity('')">
               </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="vat" class="form-label">Course *</label><br>
                  <input id="vat" type="text" placeholder="write here college name" maxlength="50" required name="course" class="form-input" oninvalid="this.setCustomValidity('Please Enter Course')" oninput="setCustomValidity('')">
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col">
               <div class="form-group">
                <label for="message" class="form-label"> Student notes</label>
                 <textarea id="message" placeholder="Write here student notes" maxlength="500" name="student_notes" class=" text-area-box form-input"></textarea>
               </div>
             </div>
           </div>
         </div>
       </div><!--Start Customer data single-box-->





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
