<?php include_once('header.php'); ?>

<?php

if(isset($_POST['submit']) && $_POST['submit']=='reset_search_user'){

		    $_SESSION['search_user_id']='';
		    $_SESSION['search_user_user_role']='';
		    $_SESSION['search_user_name']='';
		    $_SESSION['search_user_email']='';
		    $_SESSION['search_user_phone_no']='';
	        $_SESSION['search_user_status']='';
	  }
	  
	   if(isset($_POST['submit']) && $_POST['submit']=='search_user'){

		    $_SESSION['search_user_id']='';
		    $_SESSION['search_user_user_role']='';
		    $_SESSION['search_user_name']='';
		    $_SESSION['search_user_email']='';
		    $_SESSION['search_user_phone_no']='';
		    $_SESSION['search_user_status']='';
		   
		    $_SESSION['search_user_id']=$_POST['id'];
		    $_SESSION['search_user_user_role']=$_POST['user_role'];
		    $_SESSION['search_user_name']=$_POST['name'];
		    $_SESSION['search_user_email']=$_POST['email'];
		    $_SESSION['search_user_phone_no']=$_POST['phone_no'];
		    $_SESSION['search_user_status']=$_POST['status'];
		   
	   }
		    @$id=$_SESSION['search_user_id'];
	        @$users_role=$_SESSION['search_user_user_role'];
	        @$name=$_SESSION['search_user_name'];
	        @$email=$_SESSION['search_user_email'];
	        @$phone_no=$_SESSION['search_user_phone_no']; 
            @$status=$_SESSION['search_user_status']; 

?>

<section class="create-customer-main-area" style="background-color: #FCFCFD">
  <div class="header-breadcrumb">
    <div class="container">
        <div class="bread-inner">
          <div class="single-bread-box">
          <div class="header-breadcrumb-left">
            <ul>
              <li><a class="none-box" href="customer-data.html">Home</a></li>
              <li><a href="javascript:avoid()" class="white-bg">Search User</a></li>
            </ul>
          </div>
        </div>
        <div class="single-bread-box">
          <div class="buttons-data-table filter-data-table top-button">
                <!--<a href="#"  class="btns btn-data-table border-btn">Convert an Estimate to order</a>-->
                <a href="create_user.php"  class="btns btn-data-table"><span class="plus-create mr-2">&plus;</span>Create New User </a>
          </div>
      </div>
        </div>
    </div>
  </div>
 <form method="post" action="">
   <div class="container">

   <div class="customer-data-inner data-inner-single-item-box bottom-filter-0"> <!--Start data -inner single box-->
    <div class="order-form-title">
      <h1>Search User</h1>
      <span class="filter-angle-bottom">
        <img src="assets/img/arrow_drop_down_24px.png" alt="">
      </span>
    </div>
     <div class="customer-data-main"><!--Start of customer data main-->
      <div class="customer-data-signle-box search"><!--Start Customer data single-box--> 
         <div class="main-data-form">
           <div class="row">
             <div class="col-md-4">
               <div class="form-group">
                 <label for="name" class="form-label">User ID</label><br>
                  <input id="name" name="id" type="text" placeholder="Ex. 1245" value="<?php echo $id;?>" class="form-input">
               </div>
             </div>

             <div class="col-md-4">
               <div class="form-group">
                 <label for="tel" class="form-label">User Name</label><br>
                  <input id="tel" type="text" name="name" placeholder="Write User name" value="<?php echo $name;?>" class="form-input" onkeypress="return lettersOnly(event)">
               </div>
             </div>
				
                <div class="col-md-4 custom-column">
               <div class="form-group select-icon">
                 <label for="cre-t" class="form-label">User Role</label><br>
                 <select name="user_role" id="cre-t" class="form-input">
				    <option value="" <?php if($users_role==''){ echo 'selected'; } ?>>Select</option>	
					 <option value="Receipient" <?php if($users_role=='Receipient'){ echo 'selected'; } ?>>Receipient</option>	
                   <option value="Salesman" <?php if($users_role=='Salesman'){ echo 'selected'; } ?>>Salesman</option>
                   <option value="Supervisor" <?php if($users_role=='Supervisor'){ echo 'selected'; } ?>>Supervisor</option>
                   <option value="Labour" <?php if($users_role=='Labour'){ echo 'selected'; } ?>>Labour</option>
                 </select>
                 <span class="select-icon-absolute">
                   <img src="assets/img/keyboard_arrow_down_24px.png" alt="">
                 </span>
               </div>
             </div>
                
             
           </div>
           <div class="row">


           </div>

           <div class="row">
             <div class="col-md-4 custom-column">
               <div class="form-group select-icon">
                 <label for="cre-t" class="form-label">Status</label><br>
                 <select name="status" id="cre-t" class="form-input">
                   <option value="">Select Status</option>
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
                 <label for="mob" class="form-label">User Phone No.</label><br>
                  <input id="mob" type="text" name="phone_no" placeholder="User phone number" value="<?php echo $phone_no;?>" class="form-input" maxlength="12" onKeyPress="javascript:return isNumber(event)">
                  
               </div>
             </div>
				
             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="email" class="form-label">Email address</label><br>
                  <input id="email" type="email" name="email" placeholder="Ex. xyz12@gmail.com" value="<?php echo $email;?>" class="form-input">
               </div>
             </div>
             
				
           </div>
           <div class="row cusomization-row">
             <div class="col-md-4 custom-column">
               
             </div>

             <div class="col-md-4 custom-column">
               
             </div>
             <div class="col-md-4 mt-3 custom-column">
              <div class="buttons-data-table filter-data-table">
                <!--a href="#"  class="btns btn-data-table border-btn"><img src="assets/img/refresh_24px.png" class="mr-2" alt="">Reset</a-->
				<button type="submit" name='submit' value="reset_search_user" onClick="allclear();" class="btns btn-data-table border-btn"><img src="assets/img/refresh_24px.png" class="mr-2" alt="">Reset</button>   
				  
                <!--a href="#"  class="btns btn-data-table"><img src="assets/img/search_24px.png" class="mr-2" alt="">Search</a-->
				 <button type="submit" name='submit' value="search_user" class="btns btn-data-table"><img src="assets/img/search_24px.png" class="mr-2" alt="">Search</button>  
             </div>
             </div>
           </div>
         </div>
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->

 </div>
 </form>
</section>

<section class="all-order-result">
   <div class="container">

   <div class="customer-data-inner data-inner-single-item-box"> <!--Start data -inner single box-->
    <div class="order-form-title">
      <h1><i class="fa fa-search mr-3 custom-color"></i>Search Result</h1>
      <span class="filter-angle-bottom">
        <img src="assets/img/arrow_drop_down_24px.png" alt="">
      </span>
    </div>
     <div class="customer-data-main padding-filter-0"><!--Start of customer data main-->
      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <table class="table table-striped table-responsive table-bordered cust-search">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">User Name</th>
       <th scope="col">User Role</th>
      <th scope="col">User Phone No.</th>
       <th scope="col">Email</th>
    
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
	 
	  <?php
	  if(isset($_GET['page_no']) && $_GET['page_no']!="") {
        $page_no = $_GET['page_no'];  
        } else {
        $page_no = 1;
        }
	  
	  $total_records_per_page = 10;
	  
	  $offset = ($page_no-1) * $total_records_per_page;
      $previous_page = $page_no - 1;
      $next_page = $page_no + 1;
      $adjacents = "2";
	  
	 
	  
	  
	   $sqlq="select * from users where id!=0 AND user_role!='admin'";
	  
	  
		   
	     $sqlw='';
	  
	     if($id!=''){
			$sqlw.=" and id='$id'"; 
		 }
		  
		 if($users_role!=''){
			$sqlw.=" and user_role='$users_role'";  
		 }
		   
		 if($name!=''){
			$sqlw.=" and name LIKE '%$name%'";
		 }
		   
		 if($email!=''){
			$sqlw.=" and email LIKE '%$email%'";
		 } 
		   
		 if($phone_no!=''){
			$sqlw.=" and phone_no LIKE '%$phone_no%'";  
		 }   
		   
	     if($status!=''){
			$sqlw.=" and status LIKE '%$status%'";  
		 } 
		   
	    $result_count = mysqli_query(
$con,
"SELECT COUNT(*) As total_records FROM users where id!=0".$sqlw
);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total pages minus 1
      
	   $sqlq.=$sqlw; 
	   $sqlq.=" order by id desc LIMIT $offset, $total_records_per_page";
	   //echo $sqlq;
	   $result=mysqli_query($con, $sqlq);	
       while($row=mysqli_fetch_array($result))
	   {
		   
	   
	   $users_id=$row['id'];
	   $name=ucfirst($row['name']);
	   $email=$row['email'];
	   $phone_no=$row['phone_no'];
	   $users_role=$row['user_role'];
	   $status=$row['status'];	   
		
		
		   
	  ?>
    <tr id="tr_<?php echo $users_id;?>">
      <th scope="row"><?php echo $users_id;?></th>
      <td><?php echo $name;?></td>
      <td><?php echo $users_role;?></td>
      <td><?php echo $phone_no;?></td>
      <td><?php echo $email;?></td>
      <td><?php echo $status;?></td>
     
       <td class="d-flex custom-margin">
        <a href="view_user.php?id=<?php echo $users_id;?>" class="btn btn-primary">
          <i class="fa fa-eye"></i>
        </a>
        <a href="update_user.php?id=<?php echo $users_id;?>" class="btn btn-primary">
          <i class="fa fa-pencil"></i>
        </a>

        <a href="#!" class="btn btn-danger" onClick="delete_row('users',<?php echo $users_id;?>);" title='Click here to delete this'>
         <i class="fa fa-trash"></i>
        </a>     
      </td>
    </tr>
   <?php
	  }
	 ?>
    
  </tbody>
</table>

<!--ul class="pagination" style="justify-content: center; padding-bottom: 20px;">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul-->
		  
		  <ul class="pagination" style="justify-content: center; padding-bottom: 20px;">
<?php if($page_no > 1){
echo "<li class='page-item'><a class='page-link' href='?page_no=1'>First Page</a></li>";
} ?>
    
<li <?php if($page_no <= 1){ echo "class='disabled page-item'"; } ?>>
<a class='page-link' <?php if($page_no > 1){
echo "href='?page_no=$previous_page'";
} ?>>Previous</a>
</li>
    <?php
			  
	if ($total_no_of_pages <= 10){   
 for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
 if ($counter == $page_no) {
 echo "<li class='page-item active'><a class='page-link'>$counter</a></li>"; 
         }else{
        echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                }
        }
}elseif ($total_no_of_pages > 10){
// Here we will add further conditions
		
		if($page_no <= 4) { 
 for ($counter = 1; $counter < 8; $counter++){ 
 if ($counter == $page_no) {
    echo "<li class='page-item active'><a class='page-link'>$counter</a></li>"; 
 }else{
           echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                }
}
echo "<li class='page-item'><a class='page-link'>...</a></li>";
echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
}
elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) { 
echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
echo "<li class='page-item'><a class='page-link'>...</a></li>";
for (
     $counter = $page_no - $adjacents;
     $counter <= $page_no + $adjacents;
     $counter++
     ) { 
     if ($counter == $page_no) {
 echo "<li class='active page-item'><a class='page-link'>$counter</a></li>"; 
 }else{
        echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
          }                  
       }
echo "<li class='page-item'><a class='page-link'>...</a></li>";
echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
}
else {
echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
echo "<li class='page-item'><a class='page-link'>...</a></li>";
for (
     $counter = $total_no_of_pages - 6;
     $counter <= $total_no_of_pages;
     $counter++
     ) {
     if ($counter == $page_no) {
 echo "<li class='active page-item'><a class='page-link'>$counter</a></li>"; 
 }else{
        echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
 }                   
     }
}		
		
		
		
		
}		  
		
			  
?>
			  
<li <?php if($page_no >= $total_no_of_pages){
echo "class='disabled page-item'";
} ?>>
<a class='page-link' <?php if($page_no < $total_no_of_pages) {
echo "href='?page_no=$next_page'";
} ?>>Next</a>
</li>
 
<?php if($page_no < $total_no_of_pages){
echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
} ?>
</ul>
		  
		  
		  
       </div><!--Start Customer data single-box-->
     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->

 </div>
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
						
					 }
					 }); 
		
	}
	
}		
	
	
	
	function allclear(){
		
		  $('.search').find('input').val(''); 
		 //$('.search').find('input:text').val('');    
	}
</script>

<?php include_once('footer.php'); ?>
<?php
	  if (isset($_GET['page_no']) && $_GET['page_no']!="") {        
		  ?>
		<script> 
			//window.scrollTo(0,document.body.scrollHeight);
	     $(document).scrollTop($(document).height());
	   </script>
	  <?php
        }
?>
 