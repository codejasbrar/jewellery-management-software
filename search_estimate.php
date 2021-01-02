<?php include_once('header.php'); ?>

<?php

if(isset($_POST['submit']) && $_POST['submit']=='reset_search_order'){

		    $_SESSION['search_order_customer_id']='';
		    $_SESSION['search_order_name']='';
		    $_SESSION['search_order_phone_no']='';
		   
		    $_SESSION['search_order_id']='';
		    $_SESSION['search_order_delivery_method']='';
		    $_SESSION['search_order_payment_type']='';
		    $_SESSION['search_order_order_created_date_from']='';
		    $_SESSION['search_order_order_created_date_to']='';
	        $_SESSION['search_order_status']='';
	        
	  }
	  
	   if(isset($_POST['submit']) && $_POST['submit']=='search_order'){

		    $_SESSION['search_order_customer_id']='';
		    $_SESSION['search_order_name']='';
		    $_SESSION['search_order_phone_no']='';
		   
		    $_SESSION['search_order_id']='';
		    $_SESSION['search_order_delivery_method']='';
		    $_SESSION['search_order_payment_type']='';
		    $_SESSION['search_order_order_created_date_from']='';
		    $_SESSION['search_order_order_created_date_to']='';
		    $_SESSION['search_order_status']='';
		    
		   
		    $_SESSION['search_order_id']=$_POST['id'];
		    $_SESSION['search_order_name']=$_POST['name'];
		    $_SESSION['search_order_phone_no']=$_POST['phone_no'];
		    $_SESSION['search_order_delivery_method']=$_POST['delivery_method'];
		    $_SESSION['search_order_payment_type']=$_POST['payment_type'];
		    $_SESSION['search_order_order_created_date_from']=$_POST['order_created_date_from'];
		    $_SESSION['search_order_order_created_date_to']=$_POST['order_created_date_to'];
		    $_SESSION['search_order_status']=$_POST['status'];
		    
		   
	   }
		    @$id=$_SESSION['search_order_id'];
	        @$name=$_SESSION['search_order_name'];
            @$phone_no=$_SESSION['search_order_phone_no'];
            @$delivery_method=$_SESSION['search_order_delivery_method'];
	        @$payment_type=$_SESSION['search_order_payment_type'];
	        @$order_created_date_from=$_SESSION['search_order_order_created_date_from'];
            @$order_created_date_to=$_SESSION['search_order_order_created_date_to'];
            @$status=$_SESSION['search_order_status'];

?>

<section class="create-customer-main-area" style="background-color: #FCFCFD">
  <div class="header-breadcrumb">
    <div class="container">
        <div class="bread-inner">
          <div class="single-bread-box">
          <div class="header-breadcrumb-left">
            <ul>
              <li><a class="none-box" href="customer-data.html">Home</a></li>
              <li><a href="javascript:avoid()" class="white-bg">All Orders Estimations</a></li>
            </ul>
          </div>
        </div>
        <div class="single-bread-box">
          <div class="buttons-data-table filter-data-table top-button">
                <!--<a href="#"  class="btns btn-data-table border-btn">Convert an Estimate to order</a>-->
                <a href="create_estimate.php?id=new"  class="btns btn-data-table"><span class="plus-create mr-2">&plus;</span>Create New Order Estimation </a>
          </div>
      </div>
        </div>
    </div>
  </div>
 <form method="post" action="">
   <div class="container">

   <div class="customer-data-inner data-inner-single-item-box bottom-filter-0"> <!--Start data -inner single box-->
    <div class="order-form-title">
      <h1>Search Order Estimation</h1>
      <span class="filter-angle-bottom">
        <img src="assets/img/arrow_drop_down_24px.png" alt="">
      </span>
    </div>
     <div class="customer-data-main"><!--Start of customer data main-->
      <div class="customer-data-signle-box"><!--Start Customer data single-box--> 
         <div class="main-data-form">
           <div class="row">
             <div class="col-md-4">
               <div class="form-group">
                 <label for="name" class="form-label">Estimation Ref. No.</label><br>
                  <input id="name" name="id" type="text" placeholder="Ex. ABC1245X" value="<?php echo $id;?>" class="form-input">
               </div>
             </div>

             <div class="col-md-4">
               <div class="form-group">
                 <label for="tel" class="form-label">Customer Name</label><br>
                  <input id="tel" type="text" name="name" placeholder="Write customer name" value="<?php echo $name;?>" class="form-input" onkeypress="return lettersOnly(event)">
               </div>
             </div>
				
			  <div class="col-md-4">
               <div class="form-group tel-option">
                 <label for="mob" class="form-label">Customer Phone No.</label><br>
                  <input id="mob" type="text" name="phone_no" placeholder="Customer phone number" value="<?php echo $phone_no;?>" class="form-input" onKeyPress="javascript:return isNumber(event)">
                  <select name="" id="">
                    <option value="+44">+44</option>
                  </select>
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
             
            
			    <div class="col-md-4 custom-column">
               <div class="form-group select-icon">
                 <label for="cre-t" class="form-label">Delivery Method</label><br>
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
			   
				
             <div class="col-md-4 custom-column">
               <div class="form-group select-icon">
                 <label for="cre-t" class="form-label">Payment type</label><br>
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
           <div class="row cusomization-row">
             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="date" class="form-label">Estimation Created Date (From)</label><br>
                  <input id="date" name="order_created_date_from" type="date" value="<?php echo $order_created_date_from;?>" class="form-input form-control">
               </div>
             </div>

             <div class="col-md-4 custom-column">
               <div class="form-group">
                 <label for="date" class="form-label">Estimation Created Date (To)</label><br>
                  <input id="date" name="order_created_date_to" type="date" value="<?php echo $order_created_date_to;?>"  class="form-input form-control">
               </div>
             </div>
             <div class="col-md-4 mt-3 custom-column">
              <div class="buttons-data-table filter-data-table">
                <!--a href="#"  class="btns btn-data-table border-btn"><img src="assets/img/refresh_24px.png" class="mr-2" alt="">Reset</a-->
				<button type="submit" name='submit' value="reset_search_order" class="btns btn-data-table border-btn"><img src="assets/img/refresh_24px.png" class="mr-2" alt="">Reset</button>   
				  
                <!--a href="#"  class="btns btn-data-table"><img src="assets/img/search_24px.png" class="mr-2" alt="">Search</a-->
				 <button type="submit" name='submit' value="search_order" class="btns btn-data-table"><img src="assets/img/search_24px.png" class="mr-2" alt="">Search</button>  
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
      <th scope="col">Estimation Ref. No.</th>
      <th scope="col">Customer Name</th>
		 <th scope="col">Customer Phone No.</th>
       <th scope="col">Order Created Date</th>
       <th scope="col">Delivery Method</th>
        <th scope="col">Payment Type</th>
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
	  
	 
	  
	  
	    //$sqlq="select * from orders where id!=0";
	    $sqlq="select orders.*,customer.name,customer.phone_no from orders LEFT JOIN customer ON customer.id=orders.customer_id where orders.id!=0 AND orders.order_status='estimate'";
	  
		   
	     $sqlw='';
	  
	     if($id!=''){
			$sqlw.=" and orders.id='$id'"; 
		 }
		  
		 if($delivery_method!=''){
			$sqlw.=" and orders.delivery_method='$delivery_method'";  
		 }
	  
	     if($payment_type!=''){
			$sqlw.=" and orders.payment_type='$payment_type'";  
		 }
		   
		 if($name!=''){
			$sqlw.=" and customer.name LIKE '%$name%'";
		 }
		
	     if($phone_no!=''){
			$sqlw.=" and customer.phone_no  LIKE '%$phone_no%'";  
		 } 
	  
	 
		 if($order_created_date_from!=''){
			 $order_created_date_from=date("Y-m-d", strtotime($order_created_date_from.'-1 days'));
			$sqlw.=" and orders.created > '$order_created_date_from'";
		 } 
	  
	     if($order_created_date_to!=''){
			 $order_created_date_to=date("Y-m-d", strtotime($order_created_date_to.'+1 days'));
			 $sqlw.=" and orders.created < '$order_created_date_to'";
		 } 
		   
	     if($status!=''){
			$sqlw.=" and orders.status  LIKE '%$status%'";  
		 } 
		  
		   
		  $ps="SELECT COUNT(*) As total_records FROM orders LEFT JOIN customer ON customer.id=orders.customer_id where orders.id!=0  AND orders.order_status='estimate'".$sqlw;
	    $result_count = mysqli_query($con,$ps);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total pages minus 1
      
	   $sqlq.=$sqlw; 
	   $sqlq.=" order by orders.id desc LIMIT $offset, $total_records_per_page";
	   //echo $sqlq;
	   $result=mysqli_query($con, $sqlq);	
       while($row=mysqli_fetch_array($result))
	   {
		   
	   
	   $order_id=$row['id'];
	   $main_customer_id=$row['customer_id'];
	   
	   $name=ucfirst($row['name']);
	   $phone_no=$row['phone_no'];
	   
	   $order_created_date=date("d-m-Y", strtotime($row['created']));	
		
	   $delivery_method=$row['delivery_method'];
	   $payment_type=$row['payment_type'];	
		   
	   $status=$row['status'];		   
	   	   
		   /*
		    $sqlcustomer="SELECT * FROM customer WHERE id='$main_customer_id' ORDER BY id DESC";
	  $resultcust = mysqli_query($con, $sqlcustomer);  
           $rowcust = mysqli_fetch_assoc($resultcust);
	      $customer_id=$rowcust['customer_id'];
          $customer_type=$rowcust['customer_type'];
		   
	   $name=ucfirst($rowcust['name']);
	   $email=$rowcust['email'];
	   $phone_no=$rowcust['phone_no'];
	   $customer_type=$rowcust['customer_type'];
		
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
		   */
	  ?>
    <tr id="tr_<?php echo $order_id;?>">
      <th scope="row"><?php echo $order_id;?></th>
      <td><?php echo $name;?></td>
	  <td><?php echo $phone_no;?></td>	
      <td><?php echo $order_created_date;?></td>
      
      <td><?php echo $delivery_method;?></td>
	  <td><?php echo $payment_type;?></td>	
      <td><?php echo $status;?></td>
     
      <td class="d-flex custom-margin">
        <a href="view_estimate.php?id=<?php echo $order_id;?>" class="btn btn-primary" title='Click here to view this'>
          <i class="fa fa-eye"></i>
        </a>

        <a href="update_estimate.php?id=<?php echo $order_id;?>" class="btn btn-primary" title='Click here to edit this'>
          <i class="fa fa-pencil"></i>
        </a>
        
        <a href="#!" class="btn btn-danger" onClick="delete_row('orders',<?php echo $order_id;?>);" title='Click here to delete this'>
        <i class="fa fa-trash" aria-hidden="true"></i>
        </a>

        <!--a href="order_track.php?id=<?php echo $order_id;?>" class="btn btn-info" title='Click here to track this'>
          <i class="fa fa-truck" aria-hidden="true"></i>
        </a-->
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
				     url:"order.php",
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
 