<?php include_once('header.php'); ?>
<?php
if($_SESSION['user_role']=='admin'){
	echo "<script>window.location.href='search_customer.php'</script>";
}
?>