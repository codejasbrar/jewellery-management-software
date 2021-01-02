<?php
if (! isset($_SERVER['HTTPS']) or $_SERVER['HTTPS'] == 'off' ) {
     $redirect_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  // header("Location: $redirect_url");
    //exit();
}

?>
<?php include_once('header.php'); ?>
<html>
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
    <script src="html5-qrcode.min.js"></script>	
	
	<style>
		#reader__dashboard_section_csr{
			padding: 10px;
		}
	
	</style>
	
	</head>
	<body>
		<center>
	<div style="max-width: 500px; width: 100%;" id="reader"></div>
		</center>
		<script>
	/*	
			function onScanSuccess(qrCodeMessage) {
	// handle on success condition with the decoded message
}

var html5QrcodeScanner = new Html5QrcodeScanner(
	"reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);
		
			
			
			
			
			
			var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
        
function onScanSuccess(qrCodeMessage) {
    // handle on success condition with the decoded message
    html5QrcodeScanner.clear();
    // ^ this will stop the scanner (video feed) and clear the scan area.
}

html5QrcodeScanner.render(onScanSuccess);
*/			
			
			
			
			
			
			
			
			function onScanSuccess(qrCodeMessage) {
    // handle on success condition with the decoded message
				window.location.href=qrCodeMessage;
				
				html5QrcodeScanner.clear();
    // ^ this will stop the scanner (video feed) and clear the scan area.
}

function onScanError(errorMessage) {
    // handle on error condition, with error message
}

var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);
			
	
			
// To automatically start the request camera on page load.			
const element = document.querySelector('button');
var b=element.innerHTML;
	//alert(b);
if(b=='Request Camera Permissions'){
	element.click();
	
	
	setTimeout(function() {
   
		
	document.querySelector("#reader__camera_selection").selectedIndex = document.querySelector("#reader__camera_selection").length - 1;	
		
		
	const element1 = document.querySelector('button');
	var c=element1.innerHTML;
	//alert(c);
	if(c=='Start Scanning'){
		element1.click();
	}
  }, 3000);
	
	
}			



		</script>
	
	</body>
	
</html>