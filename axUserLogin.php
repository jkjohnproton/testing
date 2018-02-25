<?php
ob_start();
header("Cache-Control: no-store, no-cache");

set_time_limit (60);

$includePath        = "./";

include_once($includePath."axCommon.php");
include_once($includePath."classes/axUser.cls.php");
 	
$clsaxUser	= new clsaxUser($connect, $includePath);



$pageTitle			= "User Login - ".getProductName();	
$metaDescription	= "";
$metaKeywords		= "";



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?php echo getTitle()?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<!-- Favicone Icon -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<!-- CSS -->
<link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900%7CLato:400,100,200,300,500" rel="stylesheet" type="text/css">
<link href="template_assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/ionicons.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/plugin/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/plugin/owl.transitions.css" rel="stylesheet" type="text/css">
<!--Main Slider-->
<link href="template_assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
<link href="template_assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
<link href="template_assets/css/style.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/responsive.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/main.css" rel="stylesheet" type="text/css">
<!--Theme Color-->
<link href="template_assets/css/theme-color/default.css" rel="stylesheet" id="theme-color" type="text/css">

<link rel="stylesheet" href="./template_assets/style.css">


<link href="<?php  echo $includePath?>assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>

<script src="template_assets/js/jquery.min.js" type="text/javascript"></script>  
<script src="template_assets/js/plugin/jquery.easing.js" type="text/javascript"></script> 
<script src="template_assets/js/jquery-ui.js" type="text/javascript"></script> 
<script src="template_assets/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="template_assets/js/plugin/owl.carousel.min.js" type="text/javascript"></script> 
<script src="<?php  echo $includePath?>assets/plugins/toastr/toastr.min.js"></script>
<!-- revolution Js --> 
<script type="text/javascript" src="template_assets/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="template_assets/js/jquery.themepunch.revolution.min.js"></script> 
<script type="text/javascript" src="template_assets/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="template_assets/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="template_assets/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="template_assets/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="template_assets/js/jquery.revolution.js"></script> 

<script type="text/javascript" src="template_assets/js/main.js"></script> 
<!-- revolution Js --> 
<script src="template_assets/js/plugin/isotope.pkgd.min.js" type="text/javascript"></script> 
<script src="template_assets/js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
<!--<script src="template_assets/js/appointment-index-page.js" type="text/javascript"></script>-->  
<script src="template_assets/js/custom.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo $includePath?>scripts/axCommon.js"></script>

<script src="<?php echo $includePath?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>

<script type="text/javascript" src="./template_assets/chosen.min.js"></script>
<script type="text/javascript" src="<?php echo $includePath?>template_assets/scripts/slick.min.js"></script>
<script type="text/javascript" src="<?php echo $includePath?>template_assets/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="./template_assets/jquery.jpanelmenu.js"></script>
<script type="text/javascript" src="./template_assets/tooltips.min.js"></script>
<script type="text/javascript" src="./template_assets/custom.js"></script>

</head>
	<body>

	<?php
				
		include_once($includePath."includes/axCommonBody.inc.php"); 
	
	?>


	</body>


</html>


<?php

 function writeMain($connect, $includePath){
 

  global $facebook,$clsaxUser,$client,$plus,$oauth2;
  $clsaxUser->setPostVars();

	
	

  
  if($_GET["userId"]){
     $clsaxUser->userId = $_GET["userId"];
	 $clsaxUser->retrieveUser($clsaxUser->userId);
	 $clsaxUser->verifyUserByLink($_GET["userId"]);
	 $clsaxUser->firstLogin	=	1;
	} 
  
  $clsaxUser->postUser();
 
  include_once($includePath."templates/axUserLogin.tmpl.php");
   
 }
ob_end_flush(); 
?> 