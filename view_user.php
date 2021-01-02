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
 <form action="">
   <div class="container">

   <div class="customer-data-inner data-inner-single-item-box create-order-page"> <!--Start data -inner single box-->
     <div class="title-customer-data">
       <h1>User Details</h1>
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
                   <label class="form-label">User ID :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" class="form-input none-bg-border" disabled="" value="<?php echo $row['id'];?>">
                 </div>
               </div>
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">User Role :</label>
                 </div>
                 <div class="input-undi">
                <input type="text" class="form-input none-bg-border" disabled="" value="<?php echo $row['user_role'];?>">
                 </div>
               </div>

               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">User Status :</label>
                 </div>
                 <div class="input-undi">
                <input type="text" class="form-input none-bg-border" disabled="" value="">
                 </div>
               </div>

               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Title :</label>
                 </div>
                 <div class="input-undi">
                <input type="text" class="form-input none-bg-border" disabled="" value="<?php echo $row['title'];?>">
                 </div>
               </div>
             </div>

             <div class="col-md-6 text-right custom-column">
               <div class="user-profile-pic">
                 <div class="profile-pic-thumb">
					 <?php
                   $photo=$row['photo'];
			    if($photo!=''){ ?>
					<img src="<?php echo $photo;?>" alt="" class="photo_preview"> 
					 <?php } ?>
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
                   <input type="text" class="form-input none-bg-border" disabled="" value="<?php echo ucfirst($row['name']);?>">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Designation : </label>
                 </div>
                 <div class="input-undi">
                   <input type="text" class="form-input none-bg-border" disabled="" value="<?php echo $row['designation'];?>">
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
                   <p class="form-input none-bg-border"><?php echo $row['address'];?></p>
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
                   <input type="text" class="form-input none-bg-border" disabled="" value="<?php echo $row['phone_no'];?>">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Email :</label>
                 </div>
                 <div class="input-undi">
                   <input type="text" class="form-input none-bg-border" disabled="" value="<?php echo $row['email'];?>">
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
                <input type="text" class="form-input none-bg-border" disabled="" value="<?php echo $row['identification_type'];?>">
                 </div>
               </div>
             </div>
             <div class="col-md-6 custom-column">
               <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">Identification No :</label>
                 </div>
                 <div class="input-undi">
                   <input type="text" class="form-input none-bg-border" disabled="" value="<?php echo $row['identification_no'];?>">
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
                   <textarea class="text-area-box form-input none-bg-border" disabled=""><?php echo $row['personal_notes'];?></textarea>
                 </div>
               </div>
             </div>
           </div>
			 
           
			 
			  <div class="customer-details-box-single">
                 <div class="left-label">
                   <label class="form-label">User Department :</label>
                 </div>
                 <div class="input-undi">
                  <input type="text" class="form-input none-bg-border" disabled="" value="<?php echo $rowd['department_name'];?>">
                 </div>
               </div>
			 
     </div>
		  
   </div><!--Start Customer data single-box-->
 </div><!--End of customer data main-->
</div><!----End data -inner single box-->

   <div class="customer-data-inner data-inner-single-item-box mt-4"> <!--Start data -inner single box-->
   <div class="row my-5">
     <div class="col-md-6 offset-md-6 custom-column text-right">
      <div class="buttons-data-table">
        <a href="#!"  class="btns btn-data-table border-btn" onClick="delete_row('users',<?php echo $users_id;?>);" title='Click here to delete this'>Delete</a>
        <a href="update_user.php?id=<?php echo $users_id;?>"  class="btns btn-data-table">Update</a>
      </div> 
     </div>
   </div>
 </div>
 </div>
 </form>
</section>
</main>

<script>

	function delete_row(tble_name,id){
	
	if(confirm('Are You sure, you want to delete!'))
	{
		
	var datastring = 'tble_name='+tble_name+'&id='+id+'&action=delete';
	  //alert(datastring);
               $.ajax({  
				     url:"user.php",
                     method:"POST",  
                     data:datastring, 
                     success:function(data)  
                     {  
                        //alert(data);
	                    $('#tr_'+id).hide();
						 window.location.href='search_user.php';
						
					 }
					 }); 
		
	}
	
}		

</script>

<?php include_once('footer.php'); ?>
