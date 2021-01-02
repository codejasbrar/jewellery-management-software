<?php
//error_reporting(0);

session_start();
include_once('database/dbconfig.php');
include_once('lib/dbfunctions.php');


$current_url= basename($_SERVER['PHP_SELF']);

if (! isset($_SERVER['HTTPS']) or $_SERVER['HTTPS'] == 'off' ) {
     $redirect_url = "https://www." . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    //header("Location: $redirect_url");
    //exit();
}


//echo $uid = md5($_SERVER['HTTP_USER_AGENT'] .  $_SERVER['REMOTE_ADDR']);
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
      <link rel="stylesheet" type="text/css" href="vendors/css/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/default.css">
</head>
  <body>
   
<?php
	$usercredentials=new Databasefunctions();
	$message="";
	  
if(isset($_COOKIE['name']) && isset($_COOKIE['email'])) {
    
} else {
   echo "<script>window.location.href='signin.php'</script>";
}	  
	  
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
{
	echo "<script>window.location.href='index.php'</script>";
}
	  
if(isset($_POST['pin']) && isset($_POST['submit']))
{
// Posted Values
 $pin=mysqli_real_escape_string($con,$_POST['pin']);//md5($_POST['pin']);
 $email=mysqli_real_escape_string($con,$_COOKIE['email']);	

$result=mysqli_query($con,"select * from users where email='$email' and pin='$pin'");	
$row=mysqli_fetch_array($result);
if($row>0)
{
  $_SESSION['user_id']=$row['id'];
  $_SESSION['fname']=$row['name'];
  $_SESSION['user_role']=$row['user_role'];	
// For success, page redirect to home page and session stored.
echo "<script>window.location.href='index.php'</script>";
}
else
{
// Message for unsuccessfull login
//echo "<script>alert('Wrong login details. Please try again');</script>";
//echo "<script>window.location.href='login.php'</script>";
	$message="Wrong pin code. Please try again.";
}
}	  
?>	  

    <section class="login-main-section">
      <div class="login-main-inner-section">
        <div class="login-left-bg-area">
          <div class="login-bottom-logo">
           <a href="#"> <img src="assets/img/casting-logo.png" alt=""></a>
          </div>
        </div>
		  <form action='' method="POST">
			  <p style="color: darkred"><?php echo $message;?></p>
        <div class="right-main-login-box">
          <div class="sign-in-inner">
            <h2 class="sign-in-title">Sign in</h2>
			   <h2 class="sign-in-title" id="getname"><?php echo ucfirst($_COOKIE['name']);?></h2>
			  <script>
				  var name = getCookie('name');
				  var email = getCookie('email');
				  //$('#getname').html(name);
			  </script>
			   
            <div class="main-form-box">
              <form action="">
                <div class="form-group">
                  <label for="pin" class="form-label">PIN</label><br>
                  <input id="pin" name="pin" type="text" placeholder="Enter Pin Code" class="form-input" onKeyPress="javascript:return isNumber(event)" maxlength="6" required>
                </div>
                <div class="form-group forget-rem-box">
                  <div class="forget-box">
                    <a href="signin.php">CHANGE ACCOUNT</a>
                  </div>
                  <div class="forget-password-box">
                    <a href="#" class="forgot-pass">Forgot Password</a>
                  </div>
                </div>
                <div class="form-group sign-in-btn-area">
                  <button class="submit-btn" type="submit" name="submit">Sign In</button>
                </div>
                
                <div class="bottom-meta-text">
                  <p>Use the application according to policy rules. Any kinds of violations will be subject to sanctions.</p>
                </div>
              </form>
            </div>
          </div>
        </div>
		  </form>
      </div>
    </section>


<script>
function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
 } 	
	
	
function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name) {   
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}	
	
</script>


  <!-- Jqurey Min File -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
   <script type="text/javascript" src="vendors/js/bootstrap.min.js"></script>
   <script src="https://use.fontawesome.com/507559299c.js"></script>
   <script type="text/javascript" src="vendors/js/owl.carousel.min.js"></script>
   <!-- Javascript Main File -->
   <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>
