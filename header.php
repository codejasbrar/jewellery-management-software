<?php
//error_reporting(0);
include_once('database/dbconfig.php');
session_start();
$current_url= basename($_SERVER['PHP_SELF']);

if (! isset($_SERVER['HTTPS']) or $_SERVER['HTTPS'] == 'off' ) {
     $redirect_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    // header("Location: $redirect_url");
    // exit();
}

date_default_timezone_set ("Europe/London");
?>
		
<script>
function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
 } 	
	
function lettersOnly(event) 
{
         
	var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
	      
}	
</script>	
	
<?php	
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
{
	$user_id=$_SESSION['user_id'];
	?>
	<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>">
	<?php
}
else
{
	if($current_url!="login.php")
	{
		
	//echo "<script>location.href='login.php';</script>";
    //exit;
	}
}	
?>	
		
	
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Just Casting :: Website Title</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
<!-- Fontawesome CSS File -->
<link rel="stylesheet" type="text/css" href="vendors/css/bootstrap.min.css">
<!--link rel="stylesheet" type="text/css" href="vendors/css/owl.carousel.min.css"-->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/default.css">
<link rel="stylesheet" type="text/css" href="assets/css/checkbox.css">
<link rel="stylesheet" type="text/css" href="assets/css/inputfile.css">
	
</head>
<body>

<main>
<header class="header-area">
 <div class="container">
   <div class="header-inner">
   <div class="header-logo-area">
     <a href="#" class="header-logo">
       <img src="assets/img/casting-logo.png" alt="">
     </a>
   </div>
   <div class="header-menu-area">
     <ul class="main-menu">
       <li><a href="index.php" <?php if($current_url=='index.php'){ ?> class="active" <?php }?> >Home</a></li>
       <li><a href="search_customer.php" <?php if($current_url=='search_customer.php'){ ?> class="active" <?php }?>>Customer</a></li>
       <li><a href="search_order.php" <?php if($current_url=='search_order.php'){ ?> class="active" <?php }?>>Order</a></li>
	   <li><a href="search_estimate.php" <?php if($current_url=='search_estimate.php'){ ?> class="active" <?php }?>>Estimation</a></li>	 
	   <li><a href="reports.php" <?php if($current_url=='reports.php'){ ?> class="active" <?php }?>>Reports</a></li>	
	   <li><a href="search_user.php" <?php if($current_url=='search_user.php'){ ?> class="active" <?php }?>>User</a></li>
       <li><a href="scanner.php" <?php if($current_url=='scanner.php'){ ?> class="active" <?php }?>>Scan QR</a></li>
	   <li><a href="department_scanner.php?department=casting" <?php if($current_url=='department_scanner.php?department=casting'){ ?> class="active" <?php }?>>Dept Scan QR</a></li>	 
     </ul>
   </div>
 </div>
 </div>
</header>
	
	
	

