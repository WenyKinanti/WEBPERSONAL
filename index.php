<?php 
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}else{
		$page="home";
	}
	
	switch($page){
		case "home":
			$title="Home of WenyKinanti";
			include("header.php");
			include("halaman/home.php");
			include("footer.php");
		break;
		case "experience":
			$title="Experience of WenyKinanti";
			include("header.php");
			include("halaman/experience.php");
			include("footer.php");
			break;
		case "galery":
			$title="Gallery of WenyKinanti";
			include("header.php");
			include("halaman/galery.php");
			include("footer.php");
			break;
		case "about":
			$title="Experience of WenyKinanti";
			include("header.php");
			include("halaman/about.php");
			include("footer.php");
			break;
	}
	
?>