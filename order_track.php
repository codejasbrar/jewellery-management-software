<?php include_once('header.php'); ?>
<?php
if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
	$_SESSION['track_order_id']=$_REQUEST['id'];
}
    $order_id=$_SESSION['track_order_id'];


$sqlo="select * from orders where id='$order_id'";
 $resulto = mysqli_query($con, $sqlo);  
           $row = mysqli_fetch_assoc($resulto);
if($row>0)
{

}else{
	exit;
}

$status=$row['status'];
 $due_date =date("d-m-Y", strtotime($row['due_date']));
?>

<style>

.confirm {
    text-align: center;
    width: 20%;
    position: relative;
    float: left;
    margin-left: 5%;
}	
	
.confirm .imgcircle, .process .imgcircle, .quality .imgcircle {
    background-color: #98D091;
}	
	
.imgcircle {
    height: 75px;
    width: 75px;
    border-radius: 50%;
    background-color: #F5998E;
    position: relative;
	text-align: center;
	z-index: 2;
}	
	
.imgcircle img {
    height: 30px;
    position: absolute;
    top: 28%;
    left: 30%;
}	
	
	.process {
    background-color: #98D091 !important;
}
	
.not_checked {
    background-color: #82B0F8;
}	

	span.line {
    height: 5px;
    width: 90px;
    background-color: #F5998E;
    display: block;
    position: absolute;
    top: 28%;
    left: 45%;
}
	
	
	
	
.confirm span.line, .process span.line {
    background-color: #98D091;
}
			
	
	
	
	
	@media (max-width: 375px){

span.line {
    top: 149%;
    left: 44.5%;
    height: 51px;
}

}		
	@media (max-width: 384px){

span.line {
    top: 154%;
    left: 44%;
    height: 52px;
}
		
}		
	@media (max-width: 414px){
		
span.line {
    width: 6px;
    left: 43.5%;
    height: 58px;
    top: 152%;
}
		
}
	
	@media (max-width: 568px){
		

span.line {
    width: 6px;
    left: 43.5%;
    height: 58px;
    top: 152%;
}
		
	}
	@media (max-width: 600px){

span.line {
    width: 6px;
    left: 43.5%;
    height: 58px;
    top: 152%;
}
}		
	@media (max-width: 667px){

span.line {
    width: 6px;
    left: 43.5%;
    height: 58px;
    top: 152%;
}
		
}		
@media (max-width: 736px)

span.line {
    width: 62px;
    left: 55%;
}
@media (max-width: 768px)

span.line {
    width: 72px;
    left: 51%;
}
@media (max-width: 900px)

span.line {
    width: 78px;
    left: 49%;
}
@media (max-width: 991px)

span.line {
    width: 84px;
    left: 47%;
}
@media (max-width: 1050px)

span.line {
    width: 84px;
    left: 47%;
}
@media (max-width: 1080px)

span.line {
    width: 88px;
    left: 46%;
}
@media (max-width: 1280px)

span.line {
    width: 80px;
    left: 48%;
    top: 29%;
}
	@media (max-width: 1366px){

span.line {
    width: calc(100% - 75px);
    left: 75px;
	z-index: 1;
}
}		
@media (max-width: 1440px)

span.line {
    width: 99px;
    left: 43%;
}
@media (max-width: 1600px)

span.line {
    width: 117px;
    left: 39%;
}
@media (max-width: 1680px)

span.line {
    width: 127px;
    left: 37%;
}
@media (max-width: 1920px)

span.line {
    width: 157px;
    left: 32%;
}	
	
	
@media (max-width: 414px)

.imgcircle img {
    height: 30px;
    top: 27%;
    left: 28%;
}
@media (max-width: 568px)

.imgcircle img {
    height: 25px;
    top: 27%;
    left: 25%;
}
@media (max-width: 600px)

.imgcircle img {
    top: 26%;
    left: 27%;
}

.imgcircle img {
    height: 30px;
    position: absolute;
    top: 28%;
    left: 30%;
}

	.cn{
		top: 5px;
		color: #ffffff;
		padding-top: 10px;
	}
</style>

<section class="create-customer-main-area">
 <form action="">
	 <div class="container" align="center" style="background-color: #98d091;
    text-align: center;
    padding: 2em; color: #ffffff;">
		  <div class="customer-data-inner data-inner-single-item-box create-order-page no-bottom-margin">
		 <h3><strong>ORDER TRACKING : #<?php echo $order_id;?> </strong></h3>
		 </div>
	 </div>
	 
	 <div class="container" align="center" style="background-color: #b5e6ae;
    text-align: left;
    padding: 2em; color: #4E7D48;">
		  <div class="customer-data-inner data-inner-single-item-box create-order-page no-bottom-margin">
			<div class="row">  
			   <div class="col-md-6 custom-column">
		 <h5><strong>Status : </strong><?php echo $status;?> </h5>
			  </div>
			   <div class="col-md-6 custom-column">
		<h5><strong>Expected Date : </strong><?php echo $due_date;?> </h5>	  
			  </div>
			</div>	
		 </div>
	 </div>
	 
   <div class="container">

   <div class="customer-data-inner data-inner-single-item-box create-order-page no-bottom-margin"> <!--Start data -inner single box-->

 <div class="customer-data-main" style="background-color: #F5F5F5;"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">List of The Departments</h3>
         </div>
         <div class="main-data-form">
           <div class="row mb-5">
			   
			   
			   
			   <?php
					$d=0;
			        $dc=0;
			   $sqldepart="SELECT * FROM department WHERE order_id='$order_id'";
	        $resultdepart = mysqli_query($con, $sqldepart);  
           while($rowd = mysqli_fetch_assoc($resultdepart))
		   {
			   $department_status=$rowd['department_status'];
			   if($rowd['department_name']=='Holding in Area'){
				   $department_status='done';
			   }
			   $d=$d+1;
			   $dc=$dc+1;
			   ?>
			   <div class="col-md-4 custom-column">
			  <div class="custom-control custom-checkbox">
                <!--input type="checkbox" disabled="" class="custom-control-input" <?php if($rowd['department_include']=='yes'){ echo 'checked'; } ?> name="<?php echo $rowd['department_name'];?>" id="department_<?php echo $dc;?>" value="yes">
                <label class="custom-control-label" for="department_<?php echo $row['id'];?>"><?php echo $dc;?>. <?php echo $rowd['department_name'];?></label>
				  
				 
                   <input id="department_<?php echo $dc;?>_price" type="hidden" placeholder="" class="form-input" name="<?php echo $rowd['department_name'];?>_price" value="<?php echo $rowd['department_price'];?>">
                 
				  
				  
              <!---/div>
				   
				   
				    <div class="confirm1"-->
                <div class="imgcircle <?php 
			   if($rowd['department_include']=='yes')
			   { }else{ echo 'not_checked'; } 
			   
			   if($department_status=='done')
			   { echo 'process'; }else{ } ?>" >
                    <!--img src="assets/img/bg.png" alt="confirm order"-->
					<h1 class="cn"><?php echo $dc;?></h1>
            	</div>
				<!--span class="line"></span-->
				<input type="checkbox" disabled="" class="custom-control-input" <?php if($rowd['department_include']=='yes'){ echo 'checked'; } ?> name="<?php echo $rowd['department_name'];?>" id="department_<?php echo $dc;?>" value="yes">
					<label class="custom-control-label" for="department_<?php echo $row['id'];?>"><?php echo $dc;?>. <?php echo $rowd['department_name'];?></label>	
			</div>
				   
				  <span class="line <?php if($department_status=='done')
			   { echo 'process'; }else{ } ?>"></span>
				   
			   </div>
			   
			   
			   <!--div class="confirm">
                <div class="imgcircle">
                    <img src="assets/img/bg.png" alt="confirm order">
            	</div>
				<span class="line"></span>
				<p>Confirmed Order</p>
			</div-->
			   
			   
			   <br><br><br><br>
			   <?php		
			  
			   
		   }
			   ?>
			   
			   
         
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->
 </div>
	   
	  	
	   
	   
	   
	   
	   
	   
 </div>
 </div>
 </form>
</section>
</main>
	


 
<?php include_once('footer.php'); ?>
	   
	   