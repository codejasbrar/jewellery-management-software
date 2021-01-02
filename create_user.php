<?php 
include_once('header.php');

include_once('user.php');
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




<section id="custom-lable-modi" class="create-customer-main-area" style="background-color: #FCFCFD">
 <form name="ffk3" id="ffk3" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
   <div class="container">

   <div class="customer-data-inner data-inner-single-item-box create-order-page"> <!--Start data -inner single box-->
     <div class="title-customer-data">
       <h1>Create New User</h1>
     </div>
   </div><!----End data -inner single box-->

   <div class="customer-data-inner data-inner-single-item-box product-area-box"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->

      <div class="customer-data-signle-box p-4"><!--Start Customer data single-box-->
         <div class="main-data-form dec-label">
          <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">User Role :</label>
                 </div>
                 <div class="input-undi">
                <div class="form-group select-icon icon-select-2">
                 <select name="user_role" required id="cre-t" class="form-input">
                   <option value="Receipient">Receipient</option>
                   <option value="Salesman">Salesman</option>
                   <option value="Supervisor">Supervisor</option>
                   <option value="Labour">Labour</option>
                 </select>
                 <span class="select-icon-absolute">
                   <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                 </span>
               </div>
                 </div>
               </div>
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Title :</label>
                 </div>
                 <div class="input-undi">
                <div class="form-group select-icon icon-select-2">
                 <select name="title" id="cre-t" class="form-input">
                   <option value="">Title</option>
                   <option value="Mr">Mr</option>
                   <option value="Mrs">Mrs</option>
                   <option value="Miss">Miss</option>
                 </select>
                 <span class="select-icon-absolute">
                   <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                 </span>
               </div>
                 </div>
               </div>
             </div>

             <div class="col-md-6 text-right custom-column">
               <!--div class="user-profile-pic">
                 <div class="profile-pic-thumb">
                   <img src="https://via.placeholder.com/100x70" alt="">
                 </div>
                 <div class="form-group">
                   <input type="file">
                 </div>
               </div-->
				 
				 <div class="col-md-61 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Photo :</label>
                 </div>
                 <div class="input-undi">
                   <div class="file-field form-group">
					   
                  <div class="z-depth-1-half mb-2 image_box">
					  
					<label for="photoupload">					  
                    <img src="assets/img/filel-uploader.svg"
                      alt="example placeholder" id="image_upload" class="image_upload_preview">
					 </label>   
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="">
                      <p class="file-type">JPG or PNG, Smaller then 10MB</p>
                      <div class="input-file-container">  
						  
						 <input name="photoupload" type="file" id="photoupload" class='file-upload__input rf_0 multiplefilesfilter image_upload' accept="image/*" onchange="document.getElementById('image_upload').src = window.URL.createObjectURL(this.files[0])"> 
						  
                        <label for="photoupload">
                        <!--label tabindex="0" for="my-file" class="input-file-trigger"--><strong>Select a file...</strong> Select a file...<!--/label-->
						</label> 	
                      </div>
                    </div>
                  </div>
						  
					  
                </div>
                 </div>
               </div>
             </div>
				 
				 
				 
             </div>

           </div>

           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Name :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" name="name" required placeholder="Enter Name" class="form-input">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Designation : </label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" name="designation" placeholder="Designation" class="form-input">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-12 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Address :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" name="address" placeholder="Address" class="form-input">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Phone Number :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" name="phone_no" required placeholder="Phone Number" class="form-input">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="Email" name="email" required placeholder="Email" class="form-input">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
            <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Identification Type :</label>
                 </div>
                 <div class="input-undi">
                <div class="form-group select-icon icon-select-2">
                 <select name="identification_type" id="cre-t" class="form-input">
                   <option value="Select option">Select Option</option>
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
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Identification No :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" name="identification_no" placeholder="Identification No" class="form-input">
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-12 custom-column">
               <div class="customer-data-signle-box">
                 <div class="left-label">
                   <label for="">Personal Notes :</label>
                 </div>
                 <div class="input-undi">
                   <textarea class="text-area-box form-input" name="personal_notes" placeholder="Notes"></textarea>
                 </div>
               </div>
             </div>
           </div>
           
     </div>
     <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Select The Department</h3>
         </div>
         <div class="main-data-form">
           <div class="row mb-5">
			    <div class="form-group select-icon icon-select-2">
			   <select id="department_id" name="department_id" required class="form-input">
              <?php
					$d=0;
			   $sqldepart="SELECT * FROM department_list ORDER BY department_order ASC";
	        $resultdepart = mysqli_query($con, $sqldepart);  
           while($row = mysqli_fetch_assoc($resultdepart))
		   {
			   $d=$d+1;
			   ?>
				   <option value="<?php echo $row['id'];?>"><?php echo $row['department_name'];?></option>
			 <?php														  
			   
		   }
			   ?>
			</select>	
					<span class="select-icon-absolute">
                   <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                 </span>
			   </div>			
         </div>

         <div class="row">
           <div class="col">
             <div class="single-box-title-data">
           <h3 class="retail-text trade-text">Login Details : </h3>
         </div>
           </div>
         </div>

         
           <div class="row customer-profile-label">
             <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Enter The Password :</label>
                 </div>
                 <div class="input-undi">
                   <input id="password" type="password" name="password" onkeyup='check();' required placeholder="Enter password" class="form-input">
                 </div>
               </div>
             </div>
           </div>

           <div class="row customer-profile-label">
             <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Re-Enter The Password :</label>
					 
                 </div>
                 <div class="input-undi">
                   <input id="repassword" type="password" name="repassword" onkeyup='check();' required placeholder="Re Enter password" class="form-input">
					 <span id='message'></span>
                 </div>
				    
               </div>
				
             </div>
			   
           </div>
			 
			  
			 
           <div class="row customer-profile-label">
             <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Enter The Pin :</label>
                 </div>
                 <div class="input-undi">
                   <input id="pin" type="text" name="pin" onkeyup='checkpin();' required placeholder="Enter Pin" class="form-input">
                 </div>
               </div>
             </div>
           </div>

           <div class="row customer-profile-label">
             <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Re-Enter The Pin :</label>
                 </div>
                 <div class="input-undi">
                   <input id="repin" type="text" name="repin" onkeyup='checkpin();' required placeholder="Re-Enter Pin" class="form-input">
					 <span id='messagepin'></span>
                 </div>
               </div>
             </div>
           </div>
			 
			 
			 
       </div><!--Start Customer data single-box-->
      </div><!--End of customer data main-->
   </div><!--Start Customer data single-box-->
 </div><!--End of customer data main-->
</div><!----End data -inner single box-->

   <div class="customer-data-inner data-inner-single-item-box mt-4"> <!--Start data -inner single box-->
   <div class="row my-5">
     <div class="col-md-6 offset-md-6 custom-column text-right">
      <div class="buttons-data-table">
        <a href="search_user.php"  class="btns btn-data-table border-btn">Cancel</a>
        
		   <button type="submit" id="submit" name='submit' value="create_user" class="submit-btn1 btns btn-data-table">Save</button>
      </div> 
     </div>
   </div>
 </div>
 </div>
 </form>
</section>
</main>




<?php include_once('footer.php'); ?>

<script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('repassword').value && document.getElementById('password').value != '') {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
	document.getElementById('submit').disabled = false;
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not matching';
	document.getElementById('submit').disabled = true;
  }
	
	
}


var checkpin = function() {
	
	 if (document.getElementById('pin').value ==
    document.getElementById('repin').value && document.getElementById('pin').value != '') {
    document.getElementById('messagepin').style.color = 'green';
    document.getElementById('messagepin').innerHTML = 'Matching';
	document.getElementById('submit').disabled = false;
  } else {
    document.getElementById('messagepin').style.color = 'red';
    document.getElementById('messagepin').innerHTML = 'Not matching';
	document.getElementById('submit').disabled = true;
  }
	
	
}
</script>

<script type="text/javascript" src="js/order.js">
		
	</script>	
	



