<?php
if (! isset($_SERVER['HTTPS']) or $_SERVER['HTTPS'] == 'off' ) {
     $redirect_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  // header("Location: $redirect_url");
    //exit();
}

?>
<?php include_once('header.php'); ?>
<?php
$department="";
if(isset($_REQUEST['department']) && !empty($_REQUEST['department'])){
		  $department=$_REQUEST['department'];	
		}

?>
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
		
		<select id="department" onChange="set_department(this.value);">
		<option value="1">Holding in Area</option>
		<option value="2">Design Consultation</option>
		<option value="3">CAD</option>
		<option value="4">CAM (3D MODEL)</option>
		<option value="5">Wax Injection</option>	
		<option value="6">Mould Making</option>
		<option value="7">Casting</option>
		<option value="8">Workshop</option>
		<option value="9">Outsource</option>
		<option value="10">Completed</option>	
		</select>
		
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
			
			
/*			
var url = "https://justcasting.webezy.co.uk/view_order.php?id=g&name=boo";
var id = /id=(\d+)/.exec(url)[1];
var name = /name=(\w+)/.exec(url)[1];	
	alert(id);		
	*/		
			

/*
			
	function getParam(name,purl)
        {  
            name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");  
            var regexS = "[\\?&]"+name+"=([^&#]*)";  
            var regex = new RegExp( regexS );  
           // var results = regex.exec(window.location.href);
			var results = regex.exec(purl);
            if(results == null)
                return "";  
            else    
                return results[1];
        }
			
		var uid = getParam("id",purl);
            var age = getParam("data",purl);	
			
			alert(uid);
		*/	
			
			
			function onScanSuccess(qrCodeMessage) {
    // handle on success condition with the decoded message
				//var department="<?php echo $department;?>";
				var department=document.getElementById('department').value;
				//alert(department);
				
				window.location.href=qrCodeMessage+'&department='+department;
				
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

function set_department(v){
	
}

		</script>
	
	</body>
	
</html>