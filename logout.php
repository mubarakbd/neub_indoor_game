<?php include('inc/header.php');?>


<?php
		if(isset($_GET['action']) && $_GET['action'] == 'logout'){
			Session::destroy();
			header("Location:login.php");
			exit();
		}
	?>
    