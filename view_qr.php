<?php
if (! isset($_SERVER['HTTPS']) or $_SERVER['HTTPS'] == 'off' ) {
     $redirect_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  // header("Location: $redirect_url");
    //exit();
}

if(isset($_REQUEST['id']) && !empty($_REQUEST['id']) && isset($_REQUEST['data']) && !empty($_REQUEST['data'])){
	
	$id=$_REQUEST['id'];
	$d=$_REQUEST['data'];
	$turl="";
	
	if($d=='orders'){
		$turl="https://justcasting.webezy.co.uk/view_order.php?id=".$id;
		
		if(isset($_REQUEST['department']) && !empty($_REQUEST['department'])){
		  $turl="https://justcasting.webezy.co.uk/view_department.php?id=".$id."&department=".$_REQUEST['department'];	
		}
		
	}
	//echo $turl;
	if($turl!=""){
		echo "<script>location.href='".$turl."';</script>";
        exit;
	}
	
	
}

?>
<?php include_once('header.php'); ?>
