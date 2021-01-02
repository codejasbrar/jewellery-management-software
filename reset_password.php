<?php 
include_once('header.php'); 
include_once('user.php');
?>

<style>

	.photo_preview{
		max-width: 200px;
		max-height: 100px;
	}
	
</style>




<section id="custom-lable-modi" class="create-customer-main-area" style="background-color: #FCFCFD">
 <form action="" method="post">
   <div class="container">
   
   <div class="customer-data-inner data-inner-single-item-box create-order-page"> <!--Start data -inner single box-->
     <div class="title-customer-data">
       <h1>Reset Password</h1>
     </div>
   </div><!----End data -inner single box-->
    <?php echo $message;?>
   <div class="customer-data-inner data-inner-single-item-box product-area-box"> <!--Start data -inner single box-->
     <div class="customer-data-main"><!--Start of customer data main-->

      <div class="customer-data-signle-box p-4"><!--Start Customer data single-box-->
     <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="main-data-form">
           <div class="row customer-profile-label">
             <div class="col-md-8 offset-md-2 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Current Password :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="password" required name="current_password" placeholder="Enter password" class="form-input">
                 </div>
               </div>
             </div>
           </div>

           <div class="row customer-profile-label">
             <div class="col-md-8 offset-md-2 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">New Password :</label>
                 </div>
                 <div class="input-undi">
                   <input id="password" type="password" onkeyup='check();' required name="new_password" placeholder="Enter New password" class="form-input">
                 </div>
               </div>
             </div>
           </div>
           <div class="row customer-profile-label">
             <div class="col-md-8 offset-md-2 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Re-Enter New Password :</label>
                 </div>
                 <div class="input-undi">
                   <input id="repassword" type="password" onkeyup='check();' required name="re_password" placeholder="Re Enter Password" class="form-input">
					 <span id='message'></span>
                 </div>
               </div>
             </div>
           </div>
			 
           <div class="row my-5">
            <div class="col-md-3"></div>
           <div class="col-md-6 offset-md-2  custom-column">
            <div class="buttons-data-table">
             
				<button type="submit" name='submit' id="submit" value="reset_password" class="submit-btn1 btns btn-data-table border-btn">Submit</button>
              <a href="search_user.php"  class="btns btn-data-table">Cancel</a>
            </div> 
           </div>
         </div>
       </div><!--Start Customer data single-box-->
      </div><!--End of customer data main-->
   </div><!--Start Customer data single-box-->
 </div><!--End of customer data main-->
</div><!----End data -inner single box-->

   <div class="customer-data-inner data-inner-single-item-box mt-4"> <!--Start data -inner single box-->
   
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

</script>
