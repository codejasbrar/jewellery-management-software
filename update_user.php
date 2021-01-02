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
                   <option value="Receipient" <?php if($row['user_role']=='Receipient'){ echo 'selected'; } ?>>Receipient</option>
                   <option value="Salesman" <?php if($row['user_role']=='Salesman'){ echo 'selected'; } ?>>Salesman</option>
                   <option value="Supervisor" <?php if($row['user_role']=='Supervisor'){ echo 'selected'; } ?>>Supervisor</option>
                   <option value="Labour" <?php if($row['user_role']=='Labour'){ echo 'selected'; } ?>>Labour</option>
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
                   <option value="" <?php if($row['title']==''){ echo 'selected'; } ?>>Title</option>
                   <option value="Mr" <?php if($row['title']=='Mr'){ echo 'selected'; } ?>>Mr</option>
                   <option value="Mrs" <?php if($row['title']=='Mrs'){ echo 'selected'; } ?>>Mrs</option>
                   <option value="Miss" <?php if($row['title']=='Miss'){ echo 'selected'; } ?>>Miss</option>
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
                    <!--img src="assets/img/filel-uploader.svg"
                      alt="example placeholder" id="image_upload" class="image_upload_preview"-->
						<?php
                   $photo=$row['photo'];
			    if($photo!=''){ ?>
					<img src="<?php echo $photo;?>" alt="" id="image_upload" class="photo_preview image_upload_preview"> 
					 <?php }else{
					?>
					<img src="assets/img/filel-uploader.svg"
                      alt="example placeholder" id="image_upload" class="image_upload_preview">
				<?php		
				} 
				?>
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
                   <input id="tel" type="text" name="name" value="<?php echo $row['name'];?>" required placeholder="Enter Name" class="form-input">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Designation : </label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="text" name="designation" value="<?php echo $row['designation'];?>" placeholder="Designation" class="form-input">
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
                   <input id="tel" type="text" name="address" value="<?php echo $row['address'];?>" placeholder="Address" class="form-input">
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
                   <input id="tel" type="text" name="phone_no" value="<?php echo $row['phone_no'];?>" required placeholder="Phone Number" class="form-input">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Email :</label>
                 </div>
                 <div class="input-undi">
                   <input id="tel" type="Email" name="email" value="<?php echo $row['email'];?>" required placeholder="Email" class="form-input">
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
                   <option value="Select option" <?php if($row['identification_type']=='Select option'){ echo 'selected'; } ?>>Select Option</option>
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
                   <input id="tel" type="text" name="identification_no" value="<?php echo $row['identification_no'];?>" placeholder="Identification No" class="form-input">
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
                   <textarea class="text-area-box form-input" name="personal_notes" placeholder="Notes"><?php echo $row['personal_notes'];?></textarea>
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
           while($rowd = mysqli_fetch_assoc($resultdepart))
		   {
			   $d=$d+1;
			   ?>
				   <option value="<?php echo $rowd['id'];?>" <?php if($row['department_id']==$rowd['id']){ echo 'selected'; } ?>><?php echo $rowd['department_name'];?></option>
			 <?php														  
			   
		   }
			   ?>
			</select>	
					<span class="select-icon-absolute">
                   <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                 </span>
			   </div>			
         </div>

        <hr>
         <div class="row customer-profile-label py-3">
             <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Password :</label>
                 </div>
                 <div class="input-undi">
                   <a href="reset_password.php?id=<?php echo $users_id;?>" class="btns btn-data-table border-btn">Reset Password</a>
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-8 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Pin :</label>
                 </div>
                 <div class="input-undi">
                   <a href="reset_pin.php?id=<?php echo $users_id;?>" class="btns btn-data-table border-btn">Reset Pin</a>
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
        
		   <button type="submit" name='submit' value="update_user" class="submit-btn1 btns btn-data-table">Save</button>
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
	



